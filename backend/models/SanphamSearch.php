<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sanpham;

/**
 * SanphamSearch represents the model behind the search form about `backend\models\Sanpham`.
 */
class SanphamSearch extends Sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanpham_id'], 'integer'],
            [['sanpham_ten', 'sanpham_anh', 'sanpham_noidung', 'sanpham_ngaylap'], 'safe'],
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
        $query = Sanpham::find();

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
            'sanpham_id' => $this->sanpham_id,
            'sanpham_ngaylap' => $this->sanpham_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'sanpham_ten', $this->sanpham_ten])
            ->andFilterWhere(['like', 'sanpham_anh', $this->sanpham_anh])
            ->andFilterWhere(['like', 'sanpham_noidung', $this->sanpham_noidung]);

        return $dataProvider;
    }
}
