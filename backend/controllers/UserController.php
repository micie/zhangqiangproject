<?php

namespace backend\controllers;

use Yii;
use yii\data\Pagination;
use backend\models\User;
use backend\models\UserLevelHis;
use backend\models\UserTier;
use yii\web\NotFoundHttpException;

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
        // $query = Rules::find();
        // if(count($querys) > 0){
        //     $condition = "";
        //     $parame = array();
        //     foreach($querys as $key=>$value){
        //         $value = trim($value);
        //         if(empty($value) == false){
        //             $parame[":{$key}"]=$value;
        //             if(empty($condition) == true){
        //                 $condition = " {$key}=:{$key} ";
        //             }
        //             else{
        //                 $condition = $condition . " AND {$key}=:{$key} ";
        //             }
        //         }
        //     }
        //     if(count($parame) > 0){
        //         $query = $query->where($condition, $parame);
        //     }
        // }
        //$models = $query->orderBy('display_order')
        $sql = "select a.*,b.role,b.top_user_id,c.full_name as top_full_name  from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id left join  ".User::tableName()." c on b.top_user_id=c.id order by a.create_date desc ";
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
        $model = new Rules();
        if ($model->load(Yii::$app->request->post())) {
            
            if($model->validate() == true && $model->save()){
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                echo json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>$model->getErrors());
                echo json_encode($msg);
            }
        } else {
            $msg = array('errno'=>2, 'msg'=>'数据出错');
            echo json_encode($msg);
        }
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
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
       
            if($model->validate() == true && $model->save()){
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                echo json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>$model->getErrors());
                echo json_encode($msg);
            }
        } else {
            $msg = array('errno'=>2, 'msg'=>'数据出错');
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
        if(count($ids) > 0){
            $c = Rules::deleteAll(['in', 'id', $ids]);
            echo json_encode(array('errno'=>0, 'data'=>$c, 'msg'=>json_encode($ids)));
        }
        else{
            echo json_encode(array('errno'=>2, 'msg'=>''));
        }
    
  
    }

    /**
     * Finds the AdminUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AdminUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rules::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('未找到相关信息');
        }
    }
}
