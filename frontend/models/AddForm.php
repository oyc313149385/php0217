<?php
namespace frontend\models;

use yii\base\Model;

class AddForm extends Model{
    //定义表单字段
    public $name;
    public $age;

    //设置字段的验证规则
    public function rules()
    {
        return [
            //[ 字段名,验证方法]
            [['name','age'],'required'/*,'message'=>'{attribute}不能为空'*/],
            //['age','integer'],//必须是数字
            ['age','match','pattern'=>'/^\d{1,3}$/','message'=>'年龄不正确']
        ];
    }

    //设置属性label的标签名称
    public function attributeLabels()
    {
        return [
            'name' => '姓名',
            'age' => '年龄',
        ];
    }
}