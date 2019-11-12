<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_keluar".
 *
 * @property int $id
 * @property string $nomor_klasifikasi
 * @property string $file_lampiran
 * @property string $perihal
 * @property int $jabatan_id
 * @property int $sifat_id
 * @property int $kategori_surat_id
 * @property string $isi_surat
 * @property string $isi_lampiran_surat
 * @property string $no_agenda
 * @property string $tanggal
 * @property int $instansi_id
 * @property int $approval_surat_keluar_id
 */
class Surat_keluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['perihal', 'isi_surat', 'isi_lampiran_surat'], 'string'],
            [['jabatan_id', 'sifat_id', 'kategori_surat_id', 'instansi_id', 'approval_surat_keluar_id'], 'required'],
            [['jabatan_id', 'sifat_id', 'kategori_surat_id', 'instansi_id', 'approval_surat_keluar_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['nomor_klasifikasi', 'file_lampiran', 'no_agenda'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor_klasifikasi' => 'Nomor Klasifikasi',
            'file_lampiran' => 'File Lampiran',
            'perihal' => 'Perihal',
            'jabatan_id' => 'Jabatan ID',
            'sifat_id' => 'Sifat ID',
            'kategori_surat_id' => 'Kategori Surat ID',
            'isi_surat' => 'Isi Surat',
            'isi_lampiran_surat' => 'Isi Lampiran Surat',
            'no_agenda' => 'No Agenda',
            'tanggal' => 'Tanggal',
            'instansi_id' => 'Instansi ID',
            'approval_surat_keluar_id' => 'Approval Surat Keluar ID',
        ];
    }
}
