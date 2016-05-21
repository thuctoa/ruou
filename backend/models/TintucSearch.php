<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tintuc;

/**
 * TintucSearch represents the model behind the search form about `backend\models\Tintuc`.
 */
class TintucSearch extends Tintuc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tintuc_id'], 'integer'],
            [['tintuc_tieude', 'tintuc_noidung', 'tintuc_ngaylap'], 'safe'],
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
        $query = Tintuc::find();

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
            'tintuc_id' => $this->tintuc_id,
            'tintuc_ngaylap' => $this->tintuc_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'tintuc_tieude', $this->tintuc_tieude])
            ->andFilterWhere(['like', 'tintuc_noidung', $this->tintuc_noidung]);

        return $dataProvider;
    }
}
