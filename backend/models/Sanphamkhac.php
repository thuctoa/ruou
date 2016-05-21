<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanphamkhac".
 *
 * @property integer $sanphamkhac_id
 * @property string $sanphamkhac_ten
 * @property string $sanphamkhac_anh
 * @property string $sanphamkhac_noidung
 * @property string $sanphamkhac_ngaylap
 */
class Sanphamkhac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanphamkhac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanphamkhac_ten', 'sanphamkhac_anh', 'sanphamkhac_noidung'], 'required'],
            [['sanphamkhac_ten', 'sanphamkhac_anh', 'sanphamkhac_noidung'], 'string'],
            [['sanphamkhac_ngaylap'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sanphamkhac_id' => 'Sanphamkhac ID',
            'sanphamkhac_ten' => 'Sanphamkhac Ten',
            'sanphamkhac_anh' => 'Sanphamkhac Anh',
            'sanphamkhac_noidung' => 'Sanphamkhac Noidung',
            'sanphamkhac_ngaylap' => 'Sanphamkhac Ngaylap',
        ];
    }
}
