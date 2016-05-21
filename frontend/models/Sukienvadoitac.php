<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sukienvadoitac".
 *
 * @property integer $baiviet_id
 * @property string $baiviet_tieude
 * @property string $baiviet_anh
 * @property string $baiviet_gioithieu
 * @property string $baiviet_noidung
 * @property integer $baivietid
 * @property string $baiviet_ngaylap
 */
class Sukienvadoitac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sukienvadoitac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['baiviet_tieude', 'baiviet_anh', 'baiviet_gioithieu', 'baiviet_noidung'], 'required'],
            [['baiviet_tieude', 'baiviet_anh', 'baiviet_gioithieu', 'baiviet_noidung'], 'string'],
            [['baiviet_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'baiviet_id' => 'Baiviet ID',
            'baiviet_tieude' => 'Baiviet Tieude',
            'baiviet_anh' => 'Baiviet Anh',
            'baiviet_gioithieu' => 'Baiviet Gioithieu',
            'baiviet_noidung' => 'Baiviet Noidung',
    
            'baiviet_ngaylap' => 'Baiviet Ngaylap',
        ];
    }
}
