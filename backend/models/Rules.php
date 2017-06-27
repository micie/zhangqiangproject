<?php
namespace backend\models;

use Yii;
/**
 * This is the model class for table "rules".
 *
 * @property string $id
 */
class Rules extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rules';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['sort_order'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
            'sort_order' => '排序',
        ];
    }
 
}
