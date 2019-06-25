<?php

use yii\db\Migration;

/**
 * Class m181218_184720_add_booking_table
 */
class m181218_184720_add_booking_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('booking', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'is_viewed' => $this->tinyInteger()->defaultValue(0),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('booking');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181218_184720_add_booking_table cannot be reverted.\n";

        return false;
    }
    */
}
