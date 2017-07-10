<?php
namespace backend\services;

use backend\models\User;

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
}
