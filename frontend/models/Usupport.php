<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "usupport".
 *
 * @property string $country
 * @property string $resource
 * @property int|null $amount
 * @property string $time
 */
class Usupport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usupport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'resource', 'time'], 'required'],
            [['amount'], 'integer'],
            [['time'], 'safe'],
            [['country', 'resource'], 'string', 'max' => 255],
            [['country', 'resource', 'time'], 'unique', 'targetAttribute' => ['country', 'resource', 'time']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'resource' => 'Resource',
            'amount' => 'Amount',
            'time' => 'Time',
        ];
    }
}
