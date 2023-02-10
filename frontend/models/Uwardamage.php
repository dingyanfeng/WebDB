<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "uwardamage".
 *
 * @property string $place
 * @property string $time
 * @property string $weapon
 * @property int|null $amount
 */
class Uwardamage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uwardamage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place', 'time', 'weapon'], 'required'],
            [['time'], 'safe'],
            [['amount'], 'integer'],
            [['place', 'weapon'], 'string', 'max' => 255],
            [['place', 'time', 'weapon'], 'unique', 'targetAttribute' => ['place', 'time', 'weapon']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'place' => 'Place',
            'time' => 'Time',
            'weapon' => 'Weapon',
            'amount' => 'Amount',
        ];
    }
}
