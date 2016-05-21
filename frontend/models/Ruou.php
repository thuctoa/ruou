<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ruou".
 *
 * @property integer $ruou_id
 * @property string $ruou_tieude
 * @property string $ruou_anh
 * @property string $ruou_noidung
 * @property string $ruou_ngaylap
 */
class Ruou extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruou';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ruou_tieude', 'ruou_anh', 'ruou_noidung'], 'required'],
            [['ruou_tieude', 'ruou_anh', 'ruou_noidung'], 'string'],
            [['ruou_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ruou_id' => 'Ruou ID',
            'ruou_tieude' => 'Ruou Tieude',
            'ruou_anh' => 'Ruou Anh',
            'ruou_noidung' => 'Ruou Noidung',
            'ruou_ngaylap' => 'Ruou Ngaylap',
        ];
    }
}
