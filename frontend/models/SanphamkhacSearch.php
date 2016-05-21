<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Sanphamkhac;

/**
 * SanphamkhacSearch represents the model behind the search form about `frontend\models\Sanphamkhac`.
 */
class SanphamkhacSearch extends Sanphamkhac
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanphamkhac_id'], 'integer'],
            [['sanphamkhac_ten', 'sanphamkhac_anh', 'sanphamkhac_noidung', 'sanphamkhac_ngaylap'], 'safe'],
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
        $query = Sanphamkhac::find();

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
            'sanphamkhac_id' => $this->sanphamkhac_id,
            'sanphamkhac_ngaylap' => $this->sanphamkhac_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'sanphamkhac_ten', $this->sanphamkhac_ten])
            ->andFilterWhere(['like', 'sanphamkhac_anh', $this->sanphamkhac_anh])
            ->andFilterWhere(['like', 'sanphamkhac_noidung', $this->sanphamkhac_noidung]);

        return $dataProvider;
    }
}
