<?php

use yii\db\Migration;

/**
 * Class m220424_152401_init_services_table
 */
class m220424_152401_init_services_table extends Migration
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
        echo "m220424_152401_init_services_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable(
            'services',
            [
                'id' => 'pk',
                'name' => 'string unique',
                'hourly_rate' => 'integer',
            ]
        );
    }

    public function down()
    {
        $this->dropTable('services');
    }

}
