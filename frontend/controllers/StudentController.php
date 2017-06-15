<?php
namespace frontend\controllers;

use frontend\models\AddForm;
use frontend\models\Student;
use yii\web\Controller;
use yii\web\Request;

class StudentController extends Controller{
  //使用表单模型创建表单
    public function actionNew()
    {
        $model = new AddForm();
        $request = new Request();
        //模型接受表单提交的数据
        if($request->isPost){
            $model->load($request->post());//接受表单提交的数据
            //验证数据
            if($model->validate()){
                //保存到数据表
                $student = new Student();
                $student->name = $model->name;
                $student->age = $model->age;
                $student->save();
                //跳转到列表页
                return $this->redirect(['student/index']);
            }else{
                //打印验证失败错误信息
                var_dump($model->getErrors());exit;
            }

        }

        return $this->render('new',['model'=>$model]);
    }


    //学生列表
    public function actionIndex()
    {
        $students = Student::find()->all();

        return $this->render('index',['students'=>$students]);
    }
}