<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ruou;

/**
 * RuouSearch represents the model behind the search form about `backend\models\Ruou`.
 */
class RuouSearch extends Ruou
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ruou_id'], 'integer'],
            [['ruou_tieude', 'ruou_anh', 'ruou_noidung', 'ruou_ngaylap'], 'safe'],
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
        $query = Ruou::find();

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
            'ruou_id' => $this->ruou_id,
            'ruou_ngaylap' => $this->ruou_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'ruou_tieude', $this->ruou_tieude])
            ->andFilterWhere(['like', 'ruou_anh', $this->ruou_anh])
            ->andFilterWhere(['like', 'ruou_noidung', $this->ruou_noidung]);

        return $dataProvider;
    }
}
