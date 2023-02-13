<?php

/*
 * Team：EW_WAR
 * Coding By：所有人
 * 后台主控制器
*/

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use common\models\Comment;
use backend\models\DeleteCommentForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error','userinfo','managecomments'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionUserinfo()
    {
        if (Yii::$app->user->identity->type==0)
        {
            return $this->goHome();
        }
        return $this->render('userinfo');
    }

    public function actionManagecomments()
    {
        if (Yii::$app->user->identity->type==0)
        {
            return $this->goHome();
        }
        $model = new DeleteCommentForm();
        
        if ($model->load(Yii::$app->request->post()))
        {
            $id = $model->id;
            $comment = Comment::findOne(['id' => $id]);
            $comment->delete();
            if ($model->submit())
            {
                return $this->redirect(array('/site/managecomments', 'message' => '发布成功！', 'id' => 4));
            }
        }
        return $this->render('managecomments',[
            'model' => $model,
        ]
        );
    }

    
}
