<?php
//使用表单组件创建表单
$from = \yii\bootstrap\ActiveForm::begin();//表单开始
//姓名  $from->field(（表单）模型,'字段名')->textInput() <input type='text' />
echo $from->field($model,'name')->textInput()/*->label('姓名')*/;
echo $from->field($model,'age')->textInput()/*->label('年龄')*/;
echo \yii\bootstrap\Html::submitInput('提交',['class'=>'btn btn-info']);
\yii\bootstrap\ActiveForm::end();//表单结束