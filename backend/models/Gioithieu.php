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
class Gioithieu extends \yii\db\ActiveRecord
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
            [['gioithieu_noidung'], 'string'],
            [['gioithieu_tieude'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gioithieu_id' => 'Gioithieu ID',
            'gioithieu_tieude' => 'Gioithieu Tieude',
            'gioithieu_noidung' => 'Gioithieu Noidung',
        ];
    }
}
