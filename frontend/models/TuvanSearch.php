<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tuvan;

/**
 * TuvanSearch represents the model behind the search form about `frontend\models\Tuvan`.
 */
class TuvanSearch extends Tuvan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuvan_id'], 'integer'],
            [['tuvan_tieude', 'tuvan_anh', 'tuvan_noidung', 'tuvan_ngaytao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Tuvan::find();

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
            'tuvan_id' => $this->tuvan_id,
            'tuvan_ngaytao' => $this->tuvan_ngaytao,
        ]);

        $query->andFilterWhere(['like', 'tuvan_tieude', $this->tuvan_tieude])
            ->andFilterWhere(['like', 'tuvan_anh', $this->tuvan_anh])
            ->andFilterWhere(['like', 'tuvan_noidung', $this->tuvan_noidung]);

        return $dataProvider;
    }
}
