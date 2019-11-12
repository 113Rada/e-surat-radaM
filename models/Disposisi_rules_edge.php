<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disposisi_rules_edge".
 *
 * @property int $id
 * @property int $parent_node_id
 * @property int $child_node_id
 */
class Disposisi_rules_edge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'disposisi_rules_edge';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_node_id', 'child_node_id'], 'required'],
            [['parent_node_id', 'child_node_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_node_id' => 'Parent Node ID',
            'child_node_id' => 'Child Node ID',
        ];
    }
}
