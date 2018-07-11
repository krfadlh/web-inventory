<?php

namespace common\models\Agen;

use Yii;

/**
 * This is the model class for table "agen".
 *
 * @property string $id_agen
 * @property string $username
 * @property string $password
 * @property string $alamat
 * @property string $no_tlp
 */
class Agen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_agen', 'username', 'password', 'alamat', 'no_tlp'], 'required'],
            [['id_agen'], 'string', 'max' => 10],
            [['username', 'password'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 50],
            [['no_tlp'], 'string', 'max' => 30],
            [['id_agen'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_agen' => 'Id Agen',
            'username' => 'Username',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'no_tlp' => 'No Tlp',
        ];
    }
}
