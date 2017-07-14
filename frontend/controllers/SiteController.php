<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;
use frontend\models\FrontendUser;
use frontend\models\UserRole;
use common\utils\CommonFun;
/**
 * Site controller
 */
class SiteController extends Base2Controller
{
    public $layout = "lte_main";
    /**
     * @inheritdoc
     */
//     public function actions()
//     {
//         return [
//             'error' => [
//                 'class' => 'yii\web\ErrorAction',
//             ],
//         ];
//     }

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest){
            $this->layout = "lte_main_login";
            return $this->render('login');
        }
        else{
//             $this->layout = "lte_main";
            $menus = [];
            $sysInfo = [
                ['name'=> '操作系统', 'value'=>php_uname('s')],  //'value'=>php_uname('s').' '.php_uname('r').' '.php_uname('v')],
                ['name'=>'PHP版本', 'value'=>phpversion()],
                ['name'=>'Yii版本', 'value'=>Yii::getVersion()],
                ['name'=>'数据库', 'value'=>$this->getDbVersion()],
            ];
            return $this->render('index', [
                'system_menus' => $menus,
                'sysInfo'=>$sysInfo
            ]);
        }
    }

    public function actionLogin()
    {
        
        $username = Yii::$app->request->post('username');
        $password = Yii::$app->request->post('password');
        $rememberMe = Yii::$app->request->post('remember');
        $rememberMe = $rememberMe == 'y' ? true : false;
        if(User::login($username, $password, $rememberMe) == true){
            User::updateAll(
                ['last_ip' => CommonFun::getClientIp()],
                ['uname' => $username]
                );
            //return $this->goBack();
            echo json_encode(['errno'=>0]);
        }
        else{
            echo json_encode(['errno'=>2]);
        }

    }

    public function actionTest()
    {

          
    }
    
    public function actionLogout()
    {
        Yii::$app->user->identity->clearUserSession();
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionPswSave()
    {
        $old_password = Yii::$app->request->post('old_password', '');
        $new_password = Yii::$app->request->post('new_password', '');
        $confirm_password = Yii::$app->request->post('confirm_password', '');
        if(empty($old_password) == true){
            $msg = array('error'=>2, 'data'=>array('old_password'=>'旧密码不正确'));
            echo json_encode($msg);
            exit();
        }
        if(empty($new_password) == true){
            $msg = array('error'=>2, 'data'=>array('new_password'=>'新密码不能为空'));
            echo json_encode($msg);
            exit();
        }
        if(empty($confirm_password) == true){
            $msg = array('error'=>2, 'data'=>array('confirm_password'=>'确认密码不能为空'));
            echo json_encode($msg);
            exit();
        }
        if($new_password != $confirm_password){
            $msg = array('error'=>2, 'data'=>array('confirm_password'=>'两次新密码不相同'));
            echo json_encode($msg);
            exit();
        }
        if(Yii::$app->user->isGuest == false){
            $user = User::findByUsername(Yii::$app->user->identity->uname);
            if(FrontendUser::validatePassword($user, $old_password) == true){
                $user->password = Yii::$app->security->generatePasswordHash($new_password);
                $user->save();
                $msg = array('errno'=>0, 'msg'=>'保存成功');
                echo json_encode($msg);
            }
            else{
                $msg = array('errno'=>2, 'data'=>array('old_password'=>'旧密码不正确'));
                echo json_encode($msg);
            }
        }
        else{
            $msg = array('errno'=>2, 'msg'=>'请先登录');
            echo json_encode($msg);
        }
    }
    private function getDbVersion(){
        $driverName = Yii::$app->db->driverName;
        if(strpos($driverName, 'mysql') !== false){
            $v = Yii::$app->db->createCommand('SELECT VERSION() AS v')->queryOne();
            $driverName = $driverName .'_' . $v['v'];
        }
        return $driverName;
    }
    
    /**
     * 全局错误处理
     */
    public function actionError()
    {
        $exception = Yii::$app->getErrorHandler()->exception;
        $statusCode = $exception->statusCode;
        //return $this->render('error', ['name' => $statusCode, 'message'=>$exception->__toString()]);
        //return $this->render('error', ['name' => $statusCode, 'message'=>"系统出错，具体错误信息请查看runtime\logs\app.log"]);
        return $this->render('error', ['name' => $statusCode, 'message'=>"系统出错"]);
         
    }
}
