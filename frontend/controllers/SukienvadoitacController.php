<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Sukienvadoitac;
use frontend\models\SukienvadoitacSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SukienvadoitacController implements the CRUD actions for Sukienvadoitac model.
 */
class SukienvadoitacController extends Controller
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
     * Lists all Sukienvadoitac models.
     * @return mixed
     */
   public function actionIndex()
    {
 
          $sukienvadoitac= sukienvadoitac::find()->all();
        return $this->render('index', [

            'sukienvadoitac' => $sukienvadoitac,
        ]);
    }

    /**
     * Displays a single Sanpham model.
     * @param integer $id
     * @return mixed
     */
      public function actionView($id)
    {   
        $sukienvadoitac= $this->findModel($id);
        return $this->render('view', [
             'sukienvadoitac' => $sukienvadoitac,
        ]);
    }
    /**
     * Creates a new Sukienvadoitac model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sukienvadoitac();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->baiviet_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sukienvadoitac model.
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
     * Deletes an existing Sukienvadoitac model.
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
     * Finds the Sukienvadoitac model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sukienvadoitac the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sukienvadoitac::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
