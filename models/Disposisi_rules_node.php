<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_rules_node".
 *
 * @property int $id
 * @property int $instansi_id
 * @property int $jabatan_id
 * @property int $penerima_surat
 */
class Disposisi_rules_node extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_rules_node';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instansi_id', 'jabatan_id'], 'required'],
            [['instansi_id', 'jabatan_id', 'penerima_surat'], 'integer'],
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
            'penerima_surat' => 'Penerima Surat',
        ];
    }
}
