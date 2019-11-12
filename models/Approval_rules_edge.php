<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "approval_rules_edge".
 *
 * @property int $id
 * @property int $parent_rules_node_id
 * @property int $child_rules_node_id
 */
class Approval_rules_edge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'approval_rules_edge';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_rules_node_id', 'child_rules_node_id'], 'required'],
            [['parent_rules_node_id', 'child_rules_node_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_rules_node_id' => 'Parent Rules Node ID',
            'child_rules_node_id' => 'Child Rules Node ID',
        ];
    }
}
