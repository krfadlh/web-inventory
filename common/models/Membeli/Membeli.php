<?php

namespace common\models\Membeli;

use Yii;

/**
 * This is the model class for table "membeli".
 *
 * @property string $no_transaksi
 * @property string $tgl_pembelian
 * @property int $jml_barang
 * @property string $id_barang
 * @property string $id_agen
 */
class Membeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'membeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_transaksi', 'tgl_pembelian', 'jml_barang', 'id_barang', 'id_agen'], 'required'],
            [['jml_barang'], 'integer'],
            [['no_transaksi'], 'string', 'max' => 20],
            [['tgl_pembelian', 'id_barang', 'id_agen'], 'string', 'max' => 10],
            [['id_barang', 'id_agen'], 'unique', 'targetAttribute' => ['id_barang', 'id_agen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_transaksi' => 'No Transaksi',
            'tgl_pembelian' => 'Tgl Pembelian',
            'jml_barang' => 'Jml Barang',
            'id_barang' => 'Id Barang',
            'id_agen' => 'Id Agen',
        ];
    }
}
