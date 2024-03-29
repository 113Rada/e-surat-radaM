<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Approval_surat_keluar;

/**
 * Approval_surat_keluarSearch represents the model behind the search form of `app\models\Approval_surat_keluar`.
 */
class Approval_surat_keluarSearch extends Approval_surat_keluar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'surat_keluar_id', 'jabatan_users_id', 'dari_jabatan_users_id'], 'integer'],
            [['status', 'tanggal', 'keterangan'], 'safe'],
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
        $query = Approval_surat_keluar::find();

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
            'id' => $this->id,
            'surat_keluar_id' => $this->surat_keluar_id,
            'jabatan_users_id' => $this->jabatan_users_id,
            'tanggal' => $this->tanggal,
            'dari_jabatan_users_id' => $this->dari_jabatan_users_id,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
