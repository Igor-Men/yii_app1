<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $tags
 */
class Blog extends \yii\db\ActiveRecord
{

    public $file;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title', 'image', 'tags'], 'string', 'max' => 255],
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
            'tags' => 'Tags',
            'file' => 'File Image'
        ];
    }

    /**
     * @inheritdoc
     * @return BlogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlogQuery(get_called_class());
    }



    public function upload() {

        if ($this->validate()) {
            $this->file = UploadedFile::getInstance($this, 'file');
            $this->file->saveAs('uploads/'.$this->file->getBaseName().'.'.$this->file->extension);

            Image::getImagine()->open('uploads/'.$this->file->getBaseName().'.'.$this->file->extension)
                ->thumbnail(new Box(537, 258))
                ->save('uploads/blogCrop/'. $this->file->getBaseName(). '.'. $this->file->extension, ['quality' => 90]);
            @unlink('uploads/'.$this->file->getBaseName().'.'.$this->file->extension);
            $this->image = 'uploads/blogCrop/'.$this->file->getBaseName().'.'.$this->file->extension;
            $this->save();
            return true;
        } else {
            return false;
        }


    }
}
