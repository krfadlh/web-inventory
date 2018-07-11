<?php

namespace common\models\Menjual;

use Yii;

/**
 * This is the model class for table "menjual".
 *
 * @property string $no_nota
 * @property string $tgl_penjualan
 * @property int $jml_barang
 * @property string $id_member
 * @property string $id_barang
 * @property string $id_agen
 */
class Menjual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menjual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'tgl_penjualan', 'jml_barang', 'id_member', 'id_barang', 'id_agen'], 'required'],
            [['jml_barang'], 'integer'],
            [['no_nota'], 'string', 'max' => 8],
            [['tgl_penjualan', 'id_member', 'id_barang', 'id_agen'], 'string', 'max' => 10],
            [['id_member', 'id_barang', 'id_agen'], 'unique', 'targetAttribute' => ['id_member', 'id_barang', 'id_agen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'tgl_penjualan' => 'Tgl Penjualan',
            'jml_barang' => 'Jml Barang',
            'id_member' => 'Id Member',
            'id_barang' => 'Id Barang',
            'id_agen' => 'Id Agen',
        ];
    }
}
