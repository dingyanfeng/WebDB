<?php

namespace frontend\controllers;

use frontend\models\Usupport;
use frontend\models\usupportSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsupportController implements the CRUD actions for Usupport model.
 */
class UsupportController extends Controller
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
     * Lists all Usupport models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new usupportSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usupport model.
     * @param string $country Country
     * @param string $resource Resource
     * @param string $time Time
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($country, $resource, $time)
    {
        return $this->render('view', [
            'model' => $this->findModel($country, $resource, $time),
        ]);
    }

    /**
     * Creates a new Usupport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Usupport();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Usupport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $country Country
     * @param string $resource Resource
     * @param string $time Time
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($country, $resource, $time)
    {
        $model = $this->findModel($country, $resource, $time);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Usupport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $country Country
     * @param string $resource Resource
     * @param string $time Time
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($country, $resource, $time)
    {
        $this->findModel($country, $resource, $time)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Usupport model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $country Country
     * @param string $resource Resource
     * @param string $time Time
     * @return Usupport the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($country, $resource, $time)
    {
        if (($model = Usupport::findOne(['country' => $country, 'resource' => $resource, 'time' => $time])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
