<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;



/**
 * This is the model class for table "banners".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $image
 */
class Banners extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
            [['file'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'file' => 'File Image'
        ];
    }

    /**
     * @inheritdoc
     * @return BannersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BannersQuery(get_called_class());
    }
}
