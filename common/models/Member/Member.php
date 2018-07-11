<?php

namespace common\models\Member;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property string $id_member
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_tlp
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_member', 'nama', 'tgl_lahir', 'alamat', 'no_tlp'], 'required'],
            [['nama'], 'string'],
            [['id_member'], 'string', 'max' => 10],
            [['tgl_lahir'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 50],
            [['no_tlp'], 'string', 'max' => 30],
            [['id_member'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_member' => 'Id Member',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'no_tlp' => 'No Tlp',
        ];
    }
}
