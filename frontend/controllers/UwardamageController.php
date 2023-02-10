<?php

namespace frontend\controllers;

use frontend\models\Uwardamage;
use frontend\models\uwardamageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UwardamageController implements the CRUD actions for Uwardamage model.
 */
class UwardamageController extends Controller
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
     * Lists all Uwardamage models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new uwardamageSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Uwardamage model.
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
     * Creates a new Uwardamage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Uwardamage();

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
     * Updates an existing Uwardamage model.
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
     * Deletes an existing Uwardamage model.
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
     * Finds the Uwardamage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $place Place
     * @param string $time Time
     * @param string $weapon Weapon
     * @return Uwardamage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($place, $time, $weapon)
    {
        if (($model = Uwardamage::findOne(['place' => $place, 'time' => $time, 'weapon' => $weapon])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
