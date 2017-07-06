<?php
namespace frontend\models;

use Yii;
/**
 * This is the model class for table "announcement".
 *
 * @property string $id
 */
class Announcement extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['sort_order'], 'integer'],
            [['add_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'sort_order' => '排序',
            'content' => '内容',
        ];
    }
 
}
