<?php

namespace common\models\Supplier;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property string $id_supplier
 * @property string $nama_supplier
 * @property string $alamat
 * @property string $no_tlp
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier', 'nama_supplier', 'alamat', 'no_tlp'], 'required'],
            [['nama_supplier'], 'string'],
            [['id_supplier'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 50],
            [['no_tlp'], 'string', 'max' => 30],
            [['id_supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'nama_supplier' => 'Nama Supplier',
            'alamat' => 'Alamat',
            'no_tlp' => 'No Tlp',
        ];
    }
}
