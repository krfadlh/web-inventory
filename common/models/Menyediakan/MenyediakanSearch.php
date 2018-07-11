<?php

namespace common\models\Menyediakan;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Menyediakan\Menyediakan;

/**
 * MenyediakanSearch represents the model behind the search form of `common\models\Menyediakan\Menyediakan`.
 */
class MenyediakanSearch extends Menyediakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_beli', 'tgl_pembelian', 'Id_barang', 'id_supplier'], 'safe'],
            [['jml_barang'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Menyediakan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'jml_barang' => $this->jml_barang,
        ]);

        $query->andFilterWhere(['like', 'no_beli', $this->no_beli])
            ->andFilterWhere(['like', 'tgl_pembelian', $this->tgl_pembelian])
            ->andFilterWhere(['like', 'Id_barang', $this->Id_barang])
            ->andFilterWhere(['like', 'id_supplier', $this->id_supplier]);

        return $dataProvider;
    }
}
