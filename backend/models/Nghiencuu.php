<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nghiencuu".
 *
 * @property integer $nghiencuu_id
 * @property string $nghiencuu_tieude
 * @property string $nghiencuu_anh
 * @property string $ngiencuu_noidung
 * @property string $nghiencuu_ngaylap
 */
class Nghiencuu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nghiencuu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nghiencuu_tieude', 'nghiencuu_anh', 'ngiencuu_noidung'], 'required'],
            [['nghiencuu_tieude', 'nghiencuu_anh', 'ngiencuu_noidung'], 'string'],
            [['nghiencuu_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nghiencuu_id' => 'Nghiencuu ID',
            'nghiencuu_tieude' => 'Nghiencuu Tieude',
            'nghiencuu_anh' => 'Nghiencuu Anh',
            'ngiencuu_noidung' => 'Ngiencuu Noidung',
            'nghiencuu_ngaylap' => 'Nghiencuu Ngaylap',
        ];
    }
}
