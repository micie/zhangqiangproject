<?php

namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\User;
use backend\models\UserLevelHis;
use backend\models\UserTier;
use yii\web\NotFoundHttpException;

class UserLevelController extends Base2Controller
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
                        $where .= " and (b.full_name like '%".$value."%' or c.full_name like '%".$value."%' )";
                    }
                }
            }
            if(count($parame) > 0){
                $query = $query->where($condition, $parame);
            }
        }
        $sql = "select a.*,b.full_name as ask_full_name,c.full_name as approval_full_name  from ".UserLevelHis::tableName()." a left join  ".User::tableName()." b on a.user_id=b.id left join  ".User::tableName()." c on a.approval_user_id=c.id ".$where." order by a.status asc,a.add_time desc ";
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

        return $this->render('index', [
            'models'=>$models,
            'pages'=>$pagination,
            'query'=>$querys,
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
        $sql = "select a.*,b.full_name as ask_full_name,c.full_name as top_full_name  from ".UserLevelHis::tableName()." a left join  ".User::tableName()." b on a.user_id=b.id left join  ".User::tableName()." c on a.approval_user_id=c.id where a.id=:id ";
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
        $status = Yii::$app->request->post('status');
        $approval_remark = Yii::$app->request->post('approval_remark');
        $modelUser = User::findOne($id);
        if(isset($status)){
            $modelUser->status = $status;
        }
        if(isset($approval_remark)){
            $modelUser->approval_remark = $approval_remark;
        }

        $modelUser->approval_time = date('Y-m-d H:i:s',time());
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
