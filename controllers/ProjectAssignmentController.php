<?php

namespace app\controllers;

use Yii;
use app\models\ProjectAssignment;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class ProjectAssignmentController extends \yii\web\Controller
{
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


    public function actionCreate()
    {
         $model = new ProjectAssignment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);


        return $this->render('delete');
    }

    public function actionIndex()
    {
        $projectassignment = projectassignment::find()->orderBy('employee_id')->all();

        return $this->render('index', compact('projectassignment'));


        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);


      }
    protected function findModel($id)
    {
        if (($model = ProjectAssignment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}