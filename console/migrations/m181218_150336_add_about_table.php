<?php

use yii\db\Migration;

/**
 * Class m181218_150336_add_about_table
 */
class m181218_150336_add_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'button_link' => $this->string()->notNull(),
            'button_label' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('about');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181218_150336_add_about_table cannot be reverted.\n";

        return false;
    }
    */
}
