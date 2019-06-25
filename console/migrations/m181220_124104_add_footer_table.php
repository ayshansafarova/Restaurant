<?php

use yii\db\Migration;

/**
 * Class m181220_124104_add_footer_table
 */
class m181220_124104_add_footer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('footer', [
            'id' => $this->primaryKey(),
            'footer_content' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181220_124104_add_footer_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181220_124104_add_footer_table cannot be reverted.\n";

        return false;
    }
    */
}
