<?php

use yii\db\Migration;

/**
 * Class m181213_163751_add_menu_table
 */
class m181213_163751_add_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'food_name' => $this->string(100)->notNull(),
            'ingredients' => $this->string(150)->notNull(),
            'image' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('menu');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181213_163751_add_menu_table cannot be reverted.\n";

        return false;
    }
    */
}
