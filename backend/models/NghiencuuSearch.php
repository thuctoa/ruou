<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nghiencuu;

/**
 * NghiencuuSearch represents the model behind the search form about `backend\models\Nghiencuu`.
 */
class NghiencuuSearch extends Nghiencuu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nghiencuu_id'], 'integer'],
            [['nghiencuu_tieude', 'nghiencuu_anh', 'ngiencuu_noidung', 'nghiencuu_ngaylap'], 'safe'],
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
        $query = Nghiencuu::find();

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
            'nghiencuu_id' => $this->nghiencuu_id,
            'nghiencuu_ngaylap' => $this->nghiencuu_ngaylap,
        ]);

        $query->andFilterWhere(['like', 'nghiencuu_tieude', $this->nghiencuu_tieude])
            ->andFilterWhere(['like', 'nghiencuu_anh', $this->nghiencuu_anh])
            ->andFilterWhere(['like', 'ngiencuu_noidung', $this->ngiencuu_noidung]);

        return $dataProvider;
    }
}
