<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Suachua;

/**
 * SuachuaSearch represents the model behind the search form about `frontend\models\Suachua`.
 */
class SuachuaSearch extends Suachua
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['suachua_id'], 'integer'],
            [['suachua_tieude', 'suachua_anh', 'suachua_noidung', 'suachua_ngaylap'], 'safe'],
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
        $query = Suachua::find();

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
            'suachua_id' => $this->suachua_id,
            'suachua_ngaylap' => $this->suachua_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'suachua_tieude', $this->suachua_tieude])
            ->andFilterWhere(['like', 'suachua_anh', $this->suachua_anh])
            ->andFilterWhere(['like', 'suachua_noidung', $this->suachua_noidung]);

        return $dataProvider;
    }
}
