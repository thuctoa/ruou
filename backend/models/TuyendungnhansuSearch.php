<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tuyendungnhansu;

/**
 * TuyendungnhansuSearch represents the model behind the search form about `frontend\models\Tuyendungnhansu`.
 */
class TuyendungnhansuSearch extends Tuyendungnhansu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
      
            [['baiviet_tieude', 'baiviet_anh', 'baiviet_gioithieu', 'baiviet_noidung', 'baiviet_ngaylap'], 'safe'],
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
        $query = Tuyendungnhansu::find();

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
            'baiviet_id' => $this->baiviet_id,
    
            'baiviet_ngaylap' => $this->baiviet_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'baiviet_tieude', $this->baiviet_tieude])
            ->andFilterWhere(['like', 'baiviet_anh', $this->baiviet_anh])
            ->andFilterWhere(['like', 'baiviet_gioithieu', $this->baiviet_gioithieu])
            ->andFilterWhere(['like', 'baiviet_noidung', $this->baiviet_noidung]);

        return $dataProvider;
    }
}
