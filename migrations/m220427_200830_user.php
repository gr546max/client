<?php

use yii\db\Migration;

/**
 * Class m220427_200830_user
 */
class m220427_200830_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220427_200830_user cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable(
            'user',
            [
                'id'=>'pk',
                'username'=>'string UNIQUE',
                'password'=>'string'
            ]
        );
    }

    public function down()
    {
        $this->dropTable('user');
    }

}
