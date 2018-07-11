<?php

namespace common\models\Membeli;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Membeli\Membeli;

/**
 * MembeliSearch represents the model behind the search form of `common\models\Membeli\Membeli`.
 */
class MembeliSearch extends Membeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_transaksi', 'tgl_pembelian', 'id_barang', 'id_agen'], 'safe'],
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
        $query = Membeli::find();

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

        $query->andFilterWhere(['like', 'no_transaksi', $this->no_transaksi])
            ->andFilterWhere(['like', 'tgl_pembelian', $this->tgl_pembelian])
            ->andFilterWhere(['like', 'id_barang', $this->id_barang])
            ->andFilterWhere(['like', 'id_agen', $this->id_agen]);

        return $dataProvider;
    }
}
