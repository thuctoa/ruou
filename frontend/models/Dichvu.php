<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dichvu".
 *
 * @property integer $dichvu_id
 * @property string $dichvu_tieude
 * @property string $dichvu_anh
 * @property string $dichvu_noidung
 * @property string $dichvu_ngaylap
 */
class Dichvu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dichvu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dichvu_tieude', 'dichvu_anh', 'dichvu_noidung'], 'required'],
            [['dichvu_tieude', 'dichvu_anh', 'dichvu_noidung'], 'string'],
            [['dichvu_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dichvu_id' => 'Dichvu ID',
            'dichvu_tieude' => 'Dichvu Tieude',
            'dichvu_anh' => 'Dichvu Anh',
            'dichvu_noidung' => 'Dichvu Noidung',
            'dichvu_ngaylap' => 'Dichvu Ngaylap',
        ];
    }
}
