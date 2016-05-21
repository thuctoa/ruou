<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dichvu;

/**
 * DichvuSearch represents the model behind the search form about `backend\models\Dichvu`.
 */
class DichvuSearch extends Dichvu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dichvu_id'], 'integer'],
            [['dichvu_tieude', 'dichvu_anh', 'dichvu_noidung', 'dichvu_ngaylap'], 'safe'],
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
        $query = Dichvu::find();

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
            'dichvu_id' => $this->dichvu_id,
            'dichvu_ngaylap' => $this->dichvu_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'dichvu_tieude', $this->dichvu_tieude])
            ->andFilterWhere(['like', 'dichvu_anh', $this->dichvu_anh])
            ->andFilterWhere(['like', 'dichvu_noidung', $this->dichvu_noidung]);

        return $dataProvider;
    }
}
