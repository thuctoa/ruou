<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $sampham_id
 * @property string $sanpham_ten
 * @property string $sanpham_anh
 * @property string $sanpham_noidung
 * @property string $sanpham_ngaylap
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sanpham_ten', 'sanpham_anh', 'sanpham_noidung'], 'required'],
            [['sanpham_anh', 'sanpham_noidung'], 'string'],
            [['sanpham_ngaylap'], 'safe'],
            [['sanpham_ten'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sampham_id' => 'Sampham ID',
            'sanpham_ten' => 'Sanpham Ten',
            'sanpham_anh' => 'Sanpham Anh',
            'sanpham_noidung' => 'Sanpham Noidung',
            'sanpham_ngaylap' => 'Sanpham Ngaylap',
        ];
    }
}
