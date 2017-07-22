<?php
namespace frontend\models;

use Yii;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use backend\services\CommonService;

class frontendUser extends ActiveRecord implements IdentityInterface
{

    const STATUS_DELETED = 0;

    const STATUS_ACTIVE = 0;

    private $_menus;

    private $rightUrls;

    /**
     */
    public static function validatePassword($user, $password)
    {
        return ($user != null && Yii::$app->getSecurity()->validatePassword($password, $user->password));
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public static function login($username, $password, $rememberMe)
    {
        $user = User::findByUsername($username);
        if (self::validatePassword($user, $password) == true) {
            if (Yii::$app->user->login($user, $rememberMe ? 3600 * 24 * 30 : 0) == true) {
                // $user->initUserModuleList();
                $user->initUserSession($user);
                return true;
            }
        } 
        return false;
    }

    /**
     * Finds user by username
     *
     * @param string $username            
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return User::findOne([
            'uname' => $username,
            'status' => self::STATUS_ACTIVE
        ]);
    }

    public static function findIdentity($id)
    {
        return self::findOne([
            'id' => $id,
            'status' => self::STATUS_ACTIVE
        ]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * cookie
     *
     * @see \yii\web\IdentityInterface::getId()
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * cookie登录需要实现
     *
     * @see \yii\web\IdentityInterface::getAuthKey()
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * cookie登录需要实现
     *
     * @see \yii\web\IdentityInterface::getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function clearUserSession(){
        Yii::$app->session['user_info'] = null;
    }
    public function initUserSession($user = null)
    {
        $info = [];
        $info['user_id'] = $user->id;
        $info['full_name'] = $user->full_name;
        $info['uname'] = $user->uname;
        $info['phone'] = $user->phone;
        $info['status'] = $user->status;
        $info['create_date'] = $user->create_date;
        $info['level'] = $user->level;
        $info['status_name'] = CommonService::getStatusName($user->status);
        $info['level_name'] = CommonService::getLevelStatusName($user->level);
        $info['top_user_id'] = '';
        $info['top_full_name'] = '';
        $info['user_path'] = '';
        $sql = "select  a.user_path,a.top_user_id,b.full_name as top_full_name  from  ".UserTier::tableName()." a left join  ".User::tableName()." b on a.top_user_id=b.id where a.user_id = :uid";
        $query = User::findBysql($sql,[':uid'=>$user->id])->asArray()->one();
        if($query){
            $info['top_user_id'] = $query['top_user_id'];
            $info['top_full_name'] = $query['top_full_name'];
            $info['user_path'] = $query['user_path'];
        }
        Yii::$app->session['user_info'] = $info;
        return true;
    }
}

?>