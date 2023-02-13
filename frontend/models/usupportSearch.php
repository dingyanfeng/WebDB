<?php

/*
 * Team：EW_WAR
 * Coding By：薛家琪
*/

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Usupport;

/**
 * usupportSearch represents the model behind the search form of `frontend\models\Usupport`.
 */
class usupportSearch extends Usupport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'resource', 'time'], 'safe'],
            [['amount'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usupport::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'amount' => $this->amount,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'resource', $this->resource]);

        return $dataProvider;
    }
}
