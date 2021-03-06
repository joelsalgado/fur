<?php

use yii\db\Migration;

/**
 * Class m171109_023949_insert_seder_to_user
 */
class m171109_023949_insert_seder_to_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('USERS_BACKEND',[
                'username' => 'admin',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('12345'),
                'password_reset_token' => '',
                'email' => 'joelsalgado1302@gmail.com',
                'status' => 10,
                'created_at' => time(),
                'updated_at' => time()
            ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171109_023949_insert_seder_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171109_023949_insert_seder_to_user cannot be reverted.\n";

        return false;
    }
    */
}
