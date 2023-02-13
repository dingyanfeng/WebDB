<?php

/*
 * Team：EW_WAR
 * Coding By：薛家琪
 * 冲突管理
*/

namespace frontend\controllers;

use frontend\models\collision;
use frontend\models\collisionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CollisionController implements the CRUD actions for Collision model.
 */
class CollisionController extends Controller
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
     * Lists all Collision models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CollisionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Collision model.
     * @param string $place Place
     * @param string $time Time
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($place, $time)
    {
        return $this->render('view', [
            'model' => $this->findModel($place, $time),
        ]);
    }

    /**
     * Creates a new Collision model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Collision();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'place' => $model->place, 'time' => $model->time]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Collision model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $place Place
     * @param string $time Time
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($place, $time)
    {
        $model = $this->findModel($place, $time);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'place' => $model->place, 'time' => $model->time]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Collision model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $place Place
     * @param string $time Time
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($place, $time)
    {
        $this->findModel($place, $time)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Collision model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $place Place
     * @param string $time Time
     * @return Collision the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($place, $time)
    {
        if (($model = Collision::findOne(['place' => $place, 'time' => $time])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
