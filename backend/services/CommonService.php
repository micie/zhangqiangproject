<?php
namespace backend\services;

use backend\models\User;
use backend\models\UserTier;

class CommonService {
	public static $role_list = [
		'1'=>'左位',
		'2'=>'中位',
		'3'=>'右位',
	];
    public static $status_list = [
        '0'=>'正常',
        '1'=>'禁用',
        '2'=>'替代',
    ];
    public static $sex_list = [
        '0'=>'男',
        '1'=>'女',
    ];
    public static $level_status_list = [
        '0'=>'未处理',
        '1'=>'已通过',
        '2'=>'未通过',
    ];
    public static $level_max = 8; // 最大层级
    public static $sub_max = 3; // 直属下级最大数量
    
    public static function getRoleName($id=0){
    	if(isset(self::$role_list[$id])){
    		return self::$role_list[$id];
    	}
    	return '无';
    }
    public static function getStatusName($id=0){
        if(isset(self::$status_list[$id])){
            return self::$status_list[$id];
        }
        return '无';
    }
    public static function getSexName($id=0){
        if(isset(self::$sex_list[$id])){
            return self::$sex_list[$id];
        }
        return '无';
    }
    public static function getLevelStatusName($id=0){
        if(isset(self::$level_status_list[$id])){
            return self::$level_status_list[$id];
        }
        return '无';
    }
    public static function getUserPath($id=0){
        $sql = "select a.id,a.uname,a.phone,a.full_name,b.role,b.top_user_id from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id  where a.status=0 and b.user_id=:id  ";
        $query = User::findBysql($sql,[':id'=>$id])->asArray()->one();
        if($query['top_user_id'] == 0){
            $rtn = [
                'self_info'=>$query,
            ];
            return $rtn;
        }else{
            $top = self::getUserPath($query['top_user_id']);
            $rtn = [
                'self_info'=>$query,
                'top_info'=>$top,
            ];
            return $rtn;
        }

    }
    public static function getUserPathShow($path=[],$rtn=[]){
        $a = [
            'user_id'=>$path['self_info']['id'],
            'full_name'=>$path['self_info']['full_name'],
        ];
        $rtn[] = $a;
        if(isset($path['top_info'])){
            $rtn = self::getUserPathShow($path['top_info'],$rtn);
        }
        asort($rtn);
        return $rtn;
    }
    public static function getUserSub($id=0,$deep=0){
        $sql = "select a.id,a.uname,a.phone,a.full_name,b.role from ".User::tableName()." a left join  ".UserTier::tableName()." b on a.id=b.user_id  where a.status=0 and b.top_user_id=:id  ";
        $query = User::findBysql($sql,[':id'=>$id])->asArray()->all();
        foreach ($query as $key => $value) {
            // 是否只取下属下级
            if($deep == 0){
                $sub = self::getUserSub($value['id']);
                if($sub){
                    $query[$key]['sub_info'] = $sub;
                }                
            }
        }
        return $query;

    }
    public static function getNewRoleForUser($arr=[]){
        // 从小到大自动生成 123，所以看数量就知道应该是1还是2还是3
        $c = count($arr);
        if($c == 0){
            $n = 1;
        }elseif($c == 1){
            $n = 2;
        }elseif($c == 2){
            $n = 3;
        }else{
            $n = false;
        }
        return $n;

    }


}
