<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tintuc".
 *
 * @property integer $tintuc_id
 * @property string $tintuc_tieude
 * @property string $tintuc_anh
 * @property string $tintuc_gioithieu
 * @property string $tintuc_noidung
 * @property string $tintuc_ngaylap
 */
class Tintuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tintuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tintuc_tieude', 'tintuc_anh', 'tintuc_gioithieu', 'tintuc_noidung'], 'required'],
            [['tintuc_anh', 'tintuc_gioithieu', 'tintuc_noidung'], 'string'],
            [['tintuc_ngaylap'], 'safe'],
            [['tintuc_tieude'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tintuc_id' => 'ID',
            'tintuc_tieude' => 'Tiêu đề',
            'tintuc_anh' => 'Ảnh minh họa',
            'tintuc_gioithieu' => 'Giới thiệu',
            'tintuc_noidung' => 'Nội dung',
            'tintuc_ngaylap' => 'Ngày tạo',
        ];
    }
}
