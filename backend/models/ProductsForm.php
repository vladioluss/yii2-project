<?php

namespace backend\models;

use common\models\Products;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ProductsForm extends Model
{
    public $imgs; //свойство

    public function __construct(Products $model = null, $config = []) {
        if ($model) {
            $this->imgs = $model->imgs;
        }

        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['imgs'], 'image']
        ];
    }

    public function uploadImage(UploadedFile $imgs, $curImage = null) {
        if (!is_null($curImage)) {
            $this->deleteCurrentImage($curImage);
        }

        $this->imgs = $imgs;

        if ($this->validate()) {
            return $this->saveImage();
        }

        return false;
    }

    private function getUploadPath() {
        return Yii::$app->params['uploadPath'] . 'imgs/';
    }

    public function generateFileName() {
        do {
            $name = substr(md5(microtime() . rand(0, 1000)), 0, 20);
            $file = strtolower($name .'.'. $this->imgs->extension);
        } while (file_exists($file));

        return $file;
    }

    public function deleteCurrentImage($curImage) {
        if ($curImage && $this->fileExists($curImage)) {
            unlink($this->getUploadPath() . $curImage);
        }
    }

    public function fileExists($currentFile) {
        $file = $currentFile ? $this->getUploadPath() . $currentFile : null;
        return file_exists($file);
    }

    public function saveImage() {
        $filename = $this->generateFilename();
        $this->imgs->saveAs($this->getUploadPath() . $filename);
        return $filename;
    }
}