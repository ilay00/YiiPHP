<?php

use yii\db\Migration;

/**
 * Class m200126_171320_tasks
 */
class m200126_171320_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks', [
            'id' => $this-> primaryKey(),
            'title' => $this->string()-> notNull(),
            'description' => $this-> string(),
            'creator_id' => $this-> integer(),
            'responsible_id' => $this-> integer(),
            'deadline' => $this-> date(),
            'status_id' => $this-> integer(),
            'create_time' => $this-> integer(),
            'update_time'=>$this-> integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200126_171320_tasks cannot be reverted.\n";

        return false;
    }
    */
}
