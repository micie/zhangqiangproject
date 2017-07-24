<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use frontend\models\User;
use frontend\models\UserLevelHis;
use frontend\models\UserTier;
use yii\web\NotFoundHttpException;
use backend\services\CommonService;

class UserController extends Base2Controller
{
	public $layout = "lte_main";

    // 个人资料
    public function actionInfo()
    {
        $user_info = Yii::$app->session['user_info'];
        return $this->render('info', [
            'user_info'=>$user_info,
        ]);
    }

    // 升级申请
    public function actionUpgrade()
    {
        $user_info = Yii::$app->session['user_info'];
        return $this->render('upgrade', [
            'user_info'=>$user_info,
        ]);

    }

    // 保存提交升级申请
    public function actionApplyUpgrade()
    {
        $user_info = Yii::$app->session['user_info'];
        $e = UserLevelHis::findOne(['user_id'=>$user_info['user_id'],'status'=>0]);
        if($e){
            $msg = '您已经有未处理的申请，请等待处理';
        }elseif($user_info['level'] == CommonService::$level_max){
            $msg = '您的等级已经达到最大值，不能再升级了';
        }else{
            $his = new UserLevelHis();
            $his->user_id = $user_info['user_id'];
            $his->approval_user_id = $user_info['top_user_id'];
            $his->old_level = $user_info['level'];
            $his->new_level = $user_info['level']+1;
            $his->status = 0;
            $his->add_time = date('Y-m-d H:i:s',time());
            if( $his->save()){
                $msg = '您的申请已提交，请等待处理';
            }else{
                $msg = '系统错误，请联系管理员';
            }
        }
        return $this->render('upgrade', [
            'user_info'=>$user_info,
            'msg'=>$msg,
        ]);

    }
    // 升级记录
    public function actionUpgradeLog()
    {
        $user_info = Yii::$app->session['user_info'];
        $sql = "select  a.*,b.full_name as top_full_name  from  ".UserLevelHis::tableName()." a left join  ".User::tableName()." b on a.approval_user_id=b.id where a.user_id = :user_id";
        $his = UserLevelHis::findBysql($sql,[':user_id'=>$user_info['user_id']])->asArray()->all();
        return $this->render('upgrade-log', [
            'user_info'=>$user_info,
            'his'=>$his,
        ]);

    }
    // 下级的升级申请
    public function actionUpgradeLogSub()
    {
        $user_info = Yii::$app->session['user_info'];
        $sql = "select  a.*,b.full_name as sub_full_name  from  ".UserLevelHis::tableName()." a left join  ".User::tableName()." b on a.user_id=b.id where a.approval_user_id = :approval_user_id";
        $his = UserLevelHis::findBysql($sql,[':approval_user_id'=>$user_info['user_id']])->asArray()->all();
        $msg = '';
        //处理
        $id = Yii::$app->request->get('id');
        $status = Yii::$app->request->get('status');
        if($id){
            $e = UserLevelHis::findOne(['id'=>$id]);
            if(!$e){
                $msg = '数据错误，请重试';
            }elseif($e->approval_user_id !=$user_info['user_id'] ){
                $msg = '此申请的审核人不是您';
            }elseif($e->status !=0 ){
                $msg = '此申请已处理过了';
            }elseif($status !=1  && $status !=2){
                $msg = '状态错误，请重试';
            }else{
                $e->status = $status;
                $e->approval_time = date('Y-m-d H:i:s',time());
                if($e->save()){
                    $msg = '处理成功';
                }else{
                    $msg = '系统错误，请联系管理员';
                }
            }
        }
        return $this->render('upgrade-log-sub', [
            'user_info'=>$user_info,
            'his'=>$his,
            'msg'=>$msg,
        ]);

    }
    // 给下级注册账号
    public function actionRegSub()
    {
        $user_info = Yii::$app->session['user_info'];
        return $this->render('reg-sub', [
            'user_info'=>$user_info,
        ]);
    }
    // 保存给下级注册账号
    public function actionSaveRegSub()
    {
        $user_info = Yii::$app->session['user_info'];
        $sub_info = CommonService::getUserSub($user_info['user_id'],1);
        $save_success = false;
        $msg = '数据错误';
 
        if(count($sub_info) >= CommonService::$sub_max){
            $msg = '您的直属下级数量已满，不能再添加了';
        }else{
            $full_name = Yii::$app->request->post('full_name');
            $phone = Yii::$app->request->post('phone');
            $uname = Yii::$app->request->post('uname');
            $password = Yii::$app->request->post('password'); 
            if(!$full_name || !$phone || !$uname || !$password){
                $msg = '姓名、手机号、用户名、密码都是必填项哦';
            }else{
                $exist = User::findOne(['uname'=>$uname]);
                if($exist){
                    $msg = '用户名已存在';
                }else{
                    $user = new User();
                    $user->uname = $uname;
                    $user->full_name = $full_name;
                    $user->phone = $phone;
                    $user->password = Yii::$app->security->generatePasswordHash($password);
                    $user->status = 0;
                    $user->create_user = $user_info['user_id'];
                    $user->create_date = date('Y-m-d H:i:s',time());;
                    $user->level = 1;
                    $user->update_user = 0;
                    $user->update_date = '';

                    if($user->save()){
                        $save_success = true;
                        $msg = '用户已添加';
                        $user_tier = new UserTier();
                        $user_tier->user_id = $user->id;
                        $user_tier->top_user_id = $user_info['user_id'];
                        $user_tier->role = CommonService::getNewRoleForUser($sub_info);
                        $user_tier->user_path = $user_info['user_path'].$user->id.'-';
                        if(!$user_tier->save()){
                            $save_success = false;
                            $msg = '用户级别添加失败';
                        }
                    }else{
                        $msg = '添加失败';
                    }
                }     
            }     
        }

        return $this->render('reg-sub', [
            'user_info'=>$user_info,
            'msg'=>$msg,
            'save_success'=>$save_success,
        ]);
    }

    // 下级列表
    public function actionSubList()
    {
        $user_info = Yii::$app->session['user_info'];
        $where = " where a.status = 0 ";
        $top_user_id = Yii::$app->request->get('top_user_id');
        if($top_user_id && is_numeric($top_user_id)){
        }else{
            $top_user_id = $user_info['user_id'];
        }
        $where .= " and b.top_user_id =".$top_user_id;
        $sql = "select a.*,b.role,b.top_user_id,c.full_name as top_full_name  from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id left join  ".User::tableName()." c on b.top_user_id=c.id ".$where." order by a.create_date desc ";
        $query = User::findBysql($sql)->asArray()->all();
        $path = CommonService::getUserPath($top_user_id);
        $path_show = CommonService::getUserPathShow($path);
        return $this->render('sub-list', [
            'list'=>$query,
            'top_user_id'=>$top_user_id,
            'path_show'=>$path_show,
        ]);
    }
    
    /**
     * Updates an existing AdminUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->post('id');
        $phone = Yii::$app->request->post('phone');
        $full_name = Yii::$app->request->post('full_name');
        $sex = Yii::$app->request->post('sex');
        $level = Yii::$app->request->post('level');
        $modelUser = User::findOne($id);
        if(isset($phone)){
            $modelUser->phone = $phone;
        }
        if(isset($full_name)){
            $modelUser->full_name = $full_name;
        }
        if(isset($sex)){
            $modelUser->sex = $sex;
        }
        if(isset($level)){
            $modelUser->level = $level;
        }
        $modelUser->update_date = date('Y-m-d H:i:s',time());
        if($modelUser->save()){
            $msg = array('errno'=>0, 'msg'=>'保存成功');
            echo json_encode($msg);
        }else{
            $msg = array('errno'=>2, 'data'=>$model->getErrors());
            echo json_encode($msg);
        }    
    }

}
