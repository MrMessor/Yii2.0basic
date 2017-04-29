<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Account".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Surname
 * @property integer $Pass
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Name', 'Surname', 'Pass'], 'required'],
            [['ID', 'Pass'], 'integer'],
            [['Name', 'Surname'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Surname' => 'Surname',
            'Pass' => 'Pass',
        ];
    }
}
