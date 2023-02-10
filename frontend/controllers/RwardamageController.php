<?php

namespace frontend\controllers;

use frontend\models\Rwardamage;
use frontend\models\rwardamageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RwardamageController implements the CRUD actions for Rwardamage model.
 */
class RwardamageController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Rwardamage models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new rwardamageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rwardamage model.
     * @param string $place Place
     * @param string $time Time
     * @param string $weapon Weapon
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($place, $time, $weapon)
    {
        return $this->render('view', [
            'model' => $this->findModel($place, $time, $weapon),
        ]);
    }

    /**
     * Creates a new Rwardamage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Rwardamage();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rwardamage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $place Place
     * @param string $time Time
     * @param string $weapon Weapon
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($place, $time, $weapon)
    {
        $model = $this->findModel($place, $time, $weapon);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rwardamage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $place Place
     * @param string $time Time
     * @param string $weapon Weapon
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($place, $time, $weapon)
    {
        $this->findModel($place, $time, $weapon)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rwardamage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $place Place
     * @param string $time Time
     * @param string $weapon Weapon
     * @return Rwardamage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($place, $time, $weapon)
    {
        if (($model = Rwardamage::findOne(['place' => $place, 'time' => $time, 'weapon' => $weapon])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
