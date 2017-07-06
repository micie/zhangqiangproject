<?php
namespace frontend\services;

use frontend\models\User;

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
}
