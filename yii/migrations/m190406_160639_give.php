<?php

use yii\db\Migration;

/**
 * Class m190406_160639_give
 */
class m190406_160639_give extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%give}}', [
            'id' => $this->primaryKey(),
            'surname' => $this->integer(),
            'name' => $this->String(),
            'lastname' => $this->float(),
            'phone' => $this->float(),
            'email' => $this->String(),
            'klass'=>$this->integer(),
            'orientation'=>$this->integer(),
            'status'=>$this->enum()
        ]);
        $this->createIndex('give_ibfk_1', '{{%give}}', 'orientation');
        $this->addForeignKey(
        'give_ibfk_1', '{{%give}}', 'orientation', '{{%orientation}}', 'id', 'CASCADE');
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190406_160639_give cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190406_160639_give cannot be reverted.\n";

        return false;
    }
    */
}
