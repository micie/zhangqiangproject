<?php

namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\User;
use backend\models\UserLevelHis;
use backend\models\UserTier;
use yii\web\NotFoundHttpException;
use backend\services\CommonService;

class UserController extends Base2Controller
{
	public $layout = "lte_main";

    /**
     * Lists all AdminUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $querys = Yii::$app->request->get('query');
        $where = " where 1 ";
        // $query = Rules::find();
        if(count($querys) > 0){
            $parame = array();
            foreach($querys as $key=>$value){
                $value = trim($value);
                if(empty($value) == false){
                    if($key == 'keyword'){
                        $where .= " and (a.uname like '%".$value."%' or a.phone like '%".$value."%' or a.full_name like '%".$value."%' )";
                    }
                }
            }
            if(count($parame) > 0){
                $query = $query->where($condition, $parame);
            }
        }
        $top_user_id = Yii::$app->request->get('top_user_id');
        if($top_user_id && is_numeric($top_user_id)){
            $where .= " and b.top_user_id =".$top_user_id;
        }else{
            $top_user_id = 0;
        }
        $sql = "select a.*,b.role,b.top_user_id,c.full_name as top_full_name  from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id left join  ".User::tableName()." c on b.top_user_id=c.id ".$where." order by a.create_date desc ";
        $query = User::findBysql($sql);

        $pagination = new Pagination([
            'totalCount' =>$query->count(), 
            'pageSize' => '30', 
            'pageParam'=>'page', 
            'pageSizeParam'=>'per-page']
        );
        $models = $query
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->asArray()
        ->all();
        $path = CommonService::getUserPath($top_user_id);
        $path_show = CommonService::getUserPathShow($path);
        //print_r($path_show);die;
        return $this->render('index', [
            'models'=>$models,
            'pages'=>$pagination,
            'query'=>$querys,
            'top_user_id'=>$top_user_id,
            'path_show'=>$path_show,
        ]);
    }

    /**
     * Displays a single AdminUser model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        //$id = Yii::$app->request->post('id');
        // $model = $this->findModel($id);
        // echo json_encode($model->getAttributes());
        $sql = "select a.*,b.role,b.top_user_id,c.full_name as top_full_name  from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id left join  ".User::tableName()." c on b.top_user_id=c.id where a.id=:id ";
        $query = User::findBysql($sql,[':id'=>$id])->asArray()->one();
        echo json_encode($query);

    }

    /**
     * Creates a new AdminUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        return true;
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

    /**
     * Deletes an existing AdminUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete(array $ids)
    {
        return true;
    
    }

}
