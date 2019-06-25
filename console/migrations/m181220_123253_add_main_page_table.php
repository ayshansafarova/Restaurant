<?php

use yii\db\Migration;

/**
 * Class m181220_123253_add_main_page_table
 */
class m181220_123253_add_main_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('main_page', [
            'id' => $this->primaryKey(),
            'main_title' => $this->string()->notNull(),
            'main_description' => $this->text()->notNull(),
            'main_button_label' => $this->string()->notNull(),
            'main_button_url' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181220_123253_add_main_page_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181220_123253_add_main_page_table cannot be reverted.\n";

        return false;
    }
    */
}
