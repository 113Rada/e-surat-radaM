<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "approval_surat_keluar".
 *
 * @property int $id
 * @property int $surat_keluar_id
 * @property int $jabatan_users_id
 * @property string $status
 * @property string $tanggal
 * @property string $keterangan
 * @property int $dari_jabatan_users_id
 */
class Approval_surat_keluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'approval_surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surat_keluar_id', 'jabatan_users_id', 'dari_jabatan_users_id'], 'required'],
            [['surat_keluar_id', 'jabatan_users_id', 'dari_jabatan_users_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string'],
            [['status'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surat_keluar_id' => 'Surat Keluar ID',
            'jabatan_users_id' => 'Jabatan Users ID',
            'status' => 'Status',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'dari_jabatan_users_id' => 'Dari Jabatan Users ID',
        ];
    }
}
