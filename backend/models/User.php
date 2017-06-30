<?php
namespace backend\models;

use Yii;
/**
 * This is the model class for table "user".
 *
 * @property string $id
 */
class User extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

 
}
