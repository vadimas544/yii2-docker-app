<?php


namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Employee;
use Yii;

class EmployeeController extends Controller
{
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){
            $model->attributes = $formData;

            if( $model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registered');
            }
        }
        return $this->render('register', [
            'model' => $model
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){
            $model->attributes = $formData;

            if( $model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Updated');
            }
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }
}