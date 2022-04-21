<?php

namespace frontend\controllers;

use common\models\Category;
use common\models\Products;
use yii\data\Pagination;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Products::find()->with('category0')->where(['status' => 1]); //жадная загрузка
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $productCount = Products::find()->where(['status' => 1])->count();
        $categories = Category::find()->where(['status' => 1])->all();
        //echo json_encode($model);

        return $this->render('index', [
            'model' => $model,
            'pages' => $pages,
            'productCount' => $productCount,
            'categories' => $categories
        ]);
    }

    public function actionView($id) {
        $model = Products::findOne(['id' => $id]);

        return $this->render('view', [
            'model' => $model
        ]);
    }

}
