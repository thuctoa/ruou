<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gioithieu".
 *
 * @property integer $gioithieu_id
 * @property string $gioithieu_tieude
 * @property string $gioithieu_noidung
 */
class gioithieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gioithieu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gioithieu_tieude', 'gioithieu_noidung'], 'required'],
            [['gioithieu_tieude', 'gioithieu_noidung'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gioithieu_id' => 'ID',
            'gioithieu_tieude' => 'Tiêu đề',
            'gioithieu_noidung' => 'Nội dung',
        ];
    }
}
