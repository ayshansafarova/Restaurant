<?php

use yii\db\Migration;

/**
 * Class m181213_154338_add_contacts_table
 */
class m181213_154338_add_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'country_state' => $this->string(50)->notNull(),
            'address' => $this->string(120)->notNull(),
            'phone_number' => $this->string(30)->notNull(),
            'schedule' => $this->string(80)->notNull(),
            'email' => $this->string(30)->notNull(),
            'some_text' => $this->string(35)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contacts');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181213_154338_add_contacts_table cannot be reverted.\n";

        return false;
    }
    */
}
