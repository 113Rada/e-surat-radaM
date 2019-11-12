<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan_users".
 *
 * @property int $id
 * @property int $jabatan_id
 * @property int $users_id
 * @property int $golongan_id
 * @property int $instansi_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Jabatan_Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan_id', 'users_id', 'golongan_id', 'instansi_id'], 'required'],
            [['jabatan_id', 'users_id', 'golongan_id', 'instansi_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jabatan_id' => 'Jabatan ID',
            'users_id' => 'Users ID',
            'golongan_id' => 'Golongan ID',
            'instansi_id' => 'Instansi ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
