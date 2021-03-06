<?php

namespace common\models\Supplier;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Supplier\Supplier;

/**
 * SupplierSearch represents the model behind the search form of `common\models\Supplier\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier', 'nama_supplier', 'alamat', 'no_tlp'], 'safe'],
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
        $query = Supplier::find();

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
        $query->andFilterWhere(['like', 'id_supplier', $this->id_supplier])
            ->andFilterWhere(['like', 'nama_supplier', $this->nama_supplier])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp]);

        return $dataProvider;
    }
}
