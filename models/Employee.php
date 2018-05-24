<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $gender
 * @property string $contactnumber
 *
 * @property ProjectAssignment[] $projectAssignments
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'gender', 'contactnumber'], 'required'],
            [['name', 'address', 'gender', 'contactnumber'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'gender' => 'Gender',
            'contactnumber' => 'Contactnumber',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectAssignments()
    {
        return $this->hasMany(ProjectAssignment::className(), ['employee_id' => 'id']);
    }
}
