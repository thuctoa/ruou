<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Sanphamkhac;
use frontend\models\SanphamkhacSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SanphamkhacController implements the CRUD actions for Sanphamkhac model.
 */
class SanphamkhacController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sanphamkhac models.
     * @return mixed
     */
    public function actionIndex()
    {
 
          $sanphamkhac= sanphamkhac::find()->all();
        return $this->render('index', [

            'sanphamkhac' => $sanphamkhac,
        ]);
    }

    /**
     * Displays a single Sanpham model.
     * @param integer $id
     * @return mixed
     */
      public function actionView($id)
    {   
        $sanphamkhac= $this->findModel($id);
        return $this->render('view', [
             'sanphamkhac' => $sanphamkhac,
        ]);
    }
    

    /**
     * Creates a new Sanphamkhac model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sanphamkhac();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sanphamkhac_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sanphamkhac model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sanphamkhac_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sanphamkhac model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sanphamkhac model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sanphamkhac the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sanphamkhac::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
