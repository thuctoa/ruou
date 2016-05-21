<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Khoahoccongnghe;
use frontend\models\KhoahoccongngheSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KhoahoccongngheController implements the CRUD actions for Khoahoccongnghe model.
 */
class KhoahoccongngheController extends Controller
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
     * Lists all Khoahoccongnghe models.
     * @return mixed
     */
  public function actionIndex()
    {
 
          $khoahoccongnghe= khoahoccongnghe::find()->all();
        return $this->render('index', [

            'khoahoccongnghe' => $khoahoccongnghe,
        ]);
    }

    /**
     * Displays a single Sanpham model.
     * @param integer $id
     * @return mixed
     */
      public function actionView($id)
    {   
        $khoahoccongnghe= $this->findModel($id);
        return $this->render('view', [
             'khoahoccongnghe' => $khoahoccongnghe,
        ]);
    }

    /**
     * Creates a new Khoahoccongnghe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Khoahoccongnghe();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->baiviet_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Khoahoccongnghe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->baiviet_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Khoahoccongnghe model.
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
     * Finds the Khoahoccongnghe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Khoahoccongnghe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Khoahoccongnghe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
