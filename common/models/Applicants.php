<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "{{%applicants}}".
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $last_name2
 * @property string $CURP
 * @property int $phone_lada
 * @property int $phone
 * @property int $celphone_lada
 * @property int $celphone
 * @property int $created_at
 * @property int $updated_at
 */
class Applicants extends \yii\db\ActiveRecord
{
    
    public function behaviors()
    {
        return [
        [
            'class' => TimestampBehavior::className()
        ],
    ];
    }

    public static function tableName()
    {
        return '{{%applicants}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'last_name2', 'CURP'], 'required'],
            [['phone_lada', 'phone', 'celphone_lada', 'celphone', 'created_at', 'updated_at'], 'integer'],
            [['name', 'last_name', 'last_name2', 'CURP'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'last_name' => 'Apellido Paterno',
            'last_name2' => 'Apellido Materno',
            'CURP' => 'CURP',
            'phone_lada' => 'Lada',
            'phone' => 'FIjo',
            'celphone_lada' => 'Lada',
            'celphone' => 'Celular',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
