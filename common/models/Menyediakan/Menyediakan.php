<?php

namespace common\models\Menyediakan;

use Yii;

/**
 * This is the model class for table "menyediakan".
 *
 * @property string $no_beli
 * @property string $tgl_pembelian
 * @property int $jml_barang
 * @property string $Id_barang
 * @property string $id_supplier
 */
class Menyediakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menyediakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_beli', 'tgl_pembelian', 'jml_barang', 'Id_barang', 'id_supplier'], 'required'],
            [['jml_barang'], 'integer'],
            [['no_beli'], 'string', 'max' => 20],
            [['tgl_pembelian', 'Id_barang', 'id_supplier'], 'string', 'max' => 10],
            [['Id_barang', 'id_supplier'], 'unique', 'targetAttribute' => ['Id_barang', 'id_supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_beli' => 'No Beli',
            'tgl_pembelian' => 'Tgl Pembelian',
            'jml_barang' => 'Jml Barang',
            'Id_barang' => 'Id Barang',
            'id_supplier' => 'Id Supplier',
        ];
    }
}
