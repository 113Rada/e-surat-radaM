<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appoval_rules_node".
 *
 * @property int $id
 * @property int $instansi_id
 * @property int $jabatan_id
 * @property int $bisa_menandatangani
 * @property int $bisa_atas_nama
 */
class Appoval_rules_node extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appoval_rules_node';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instansi_id', 'jabatan_id'], 'required'],
            [['instansi_id', 'jabatan_id', 'bisa_menandatangani', 'bisa_atas_nama'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'instansi_id' => 'Instansi ID',
            'jabatan_id' => 'Jabatan ID',
            'bisa_menandatangani' => 'Bisa Menandatangani',
            'bisa_atas_nama' => 'Bisa Atas Nama',
        ];
    }
}
