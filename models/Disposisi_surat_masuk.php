<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_surat_masuk".
 *
 * @property int $id
 * @property int $surat_masuk_id
 * @property int $jabatan_users_id
 * @property string $status
 * @property string $tanggal
 * @property string $keterangan
 * @property int $dari_jabatan_users_id
 */
class Disposisi_surat_masuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surat_masuk_id', 'jabatan_users_id', 'dari_jabatan_users_id'], 'required'],
            [['surat_masuk_id', 'jabatan_users_id', 'dari_jabatan_users_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['status'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surat_masuk_id' => 'Surat Masuk ID',
            'jabatan_users_id' => 'Jabatan Users ID',
            'status' => 'Status',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'dari_jabatan_users_id' => 'Dari Jabatan Users ID',
        ];
    }
}
