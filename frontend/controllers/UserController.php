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
        return $this->render('upgrade-log-sub', [
            'user_info'=>$user_info,
            'his'=>$his,
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
