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

    /**
     * Lists all AdminUser models.
     * @return mixed
     */
    public function actionInfo()
    {
        $user_info = Yii::$app->session['user_info'];
        return $this->render('info', [
            'user_info'=>$user_info,
        ]);
    }

    /**
     * Displays a single AdminUser model.
     * @param string $id
     * @return mixed
     */
    public function actionApplyUpgrade()
    {
        return $this->render('index', [
            'models'=>$models,
            'pages'=>$pagination,
            'query'=>$querys,
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
