<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Gioithieu;

/**
 * GioithieuSearch represents the model behind the search form about `frontend\models\Gioithieu`.
 */
class GioithieuSearch extends Gioithieu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gioithieu_id'], 'integer'],
            [['gioithieu_tieude', 'gioithieu_noidung'], 'safe'],
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
        $query = Gioithieu::find();

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
            'gioithieu_id' => $this->gioithieu_id,
        ]);

        $query->andFilterWhere(['like', 'gioithieu_tieude', $this->gioithieu_tieude])
            ->andFilterWhere(['like', 'gioithieu_noidung', $this->gioithieu_noidung]);

        return $dataProvider;
    }
}
