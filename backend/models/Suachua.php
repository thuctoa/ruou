<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "suachua".
 *
 * @property integer $suachua_id
 * @property string $suachua_tieude
 * @property string $suachua_anh
 * @property string $suachua_noidung
 * @property string $suachua_ngaylap
 */
class Suachua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suachua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['suachua_tieude', 'suachua_anh', 'suachua_noidung'], 'required'],
            [['suachua_tieude', 'suachua_anh', 'suachua_noidung'], 'string'],
            [['suachua_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'suachua_id' => 'Suachua ID',
            'suachua_tieude' => 'Suachua Tieude',
            'suachua_anh' => 'Suachua Anh',
            'suachua_noidung' => 'Suachua Noidung',
            'suachua_ngaylap' => 'Suachua Ngaylap',
        ];
    }
}
