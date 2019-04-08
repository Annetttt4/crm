<?php

use yii\db\Migration;

/**
 * Class m190406_160724_orientation
 */
class m190406_160724_orientation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%orientation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->String()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190406_160724_orientation cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190406_160724_orientation cannot be reverted.\n";

        return false;
    }
    */
}
