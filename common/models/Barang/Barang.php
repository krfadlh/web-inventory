<?php

namespace common\models\Barang;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $id_barang
 * @property string $nama_barang
 * @property int $harga
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'nama_barang', 'harga'], 'required'],
            [['nama_barang'], 'string'],
            [['harga'], 'integer'],
            [['id_barang'], 'string', 'max' => 10],
            [['id_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga' => 'Harga',
        ];
    }
}
