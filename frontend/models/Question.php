<?php
namespace frontend\models;

use Yii;
/**
 * This is the model class for table "question".
 *
 * @property string $id
 */
class Question extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'answer'], 'required'],
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
            'question' => '问题',
            'answer' => '答案',
            'sort_order' => '排序',
        ];
    }
 
}
