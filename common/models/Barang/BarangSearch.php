<?php

namespace common\models\Barang;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Barang\Barang;

/**
 * BarangSearch represents the model behind the search form of `common\models\Barang\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'nama_barang'], 'safe'],
            [['harga'], 'integer'],
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
        $query = Barang::find();

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
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'id_barang', $this->id_barang])
            ->andFilterWhere(['like', 'nama_barang', $this->nama_barang]);

        return $dataProvider;
    }
}