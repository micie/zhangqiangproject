<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\BadRequestHttpException;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;
use common\utils\CommonFun;
use yii\helpers\StringHelper;
use yii\helpers\Inflector;
class Base2Controller extends Controller
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            if($this->verifyPermission($action) == true){
                return true;
            }
        }
        return false;
    }
    
    private function verifyPermission($action){
        $route = $this->route;
        // 检查是否已经登录
        if(Yii::$app->user->isGuest){
            $allowUrl = ['site/index', 'site/login'];
            if(in_array($route, $allowUrl) == false){
                $this->redirect(Url::toRoute('site/index'));
                return false;
            }
        }
        else{
            // $system_rights = Yii::$app->user->identity->getSystemRights();
            // $loginAllowUrl = ['site/index', 'site/logout', 'site/psw', 'site/psw-save'];
            // if(in_array($route, $loginAllowUrl) == false){
            //    if((empty($system_rights) == true || empty($system_rights[$route]) == true)){
            //         header("Content-type: text/html; charset=utf-8");
            //         //exit('没有权限访问'.$route);
            //    }
            //    $rights = $system_rights[$route];
            //    if($route != 'system-log/index'){
            //         $systemLog = new AdminLog();
            //         $systemLog->url = $route;
            //         $systemLog->controller_id = $action->controller->id;
            //         $systemLog->action_id = $action->id;
            //         $systemLog->module_name = $rights['module_name'];
            //         $systemLog->func_name = $rights['menu_name'];
            //         $systemLog->right_name = $rights['right_name'];
            //         $systemLog->create_date = date('Y-m-d H:i:s');
            //         $systemLog->create_user = Yii::$app->user->identity->uname;
            //         $systemLog->client_ip = CommonFun::getClientIp();
            //         $systemLog->save();
            //    }
            // }
        }
        return true;
    }
    
}

?>