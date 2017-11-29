<?php

use yii\db\Migration;

/**
 * Class m171121_185745_create_table_applicants
 */
class m171121_185745_create_table_applicants extends Migration
{
    /**
     * @inheritdoc
     */
    public $table = 'applicants';
    public function safeUp()
    {
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'last_name2' => $this->string()->notNull(),
            'CURP' => $this->string()->notNull(),
            'phone_lada' => $this->integer(),
            'phone' => $this->integer(),
            'celphone_lada' => $this->integer(),
            'celphone' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ], 'ENGINE InnoDB');

    }


    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171121_185745_create_table_applicants cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171121_185745_create_table_applicants cannot be reverted.\n";

        return false;
    }
    */
}
