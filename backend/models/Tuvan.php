<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tuvan".
 *
 * @property integer $tuvan_id
 * @property string $tuvan_tieude
 * @property string $tuvan_anh
 * @property string $tuvan_noidung
 * @property string $tuvan_ngaytao
 */
class Tuvan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuvan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tuvan_tieude', 'tuvan_anh', 'tuvan_noidung'], 'required'],
            [['tuvan_tieude', 'tuvan_anh', 'tuvan_noidung'], 'string'],
            [['tuvan_ngaytao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuvan_id' => 'Tuvan ID',
            'tuvan_tieude' => 'Tuvan Tieude',
            'tuvan_anh' => 'Tuvan Anh',
            'tuvan_noidung' => 'Tuvan Noidung',
            'tuvan_ngaytao' => 'Tuvan Ngaytao',
        ];
    }
}
