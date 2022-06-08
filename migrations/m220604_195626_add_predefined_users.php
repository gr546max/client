<?php

use yii\db\Migration;

/**
 * Class m220604_195626_add_predefined_users
 */
class m220604_195626_add_predefined_users extends Migration
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
        echo "m220604_195626_add_predefined_users cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        foreach (
            [
                'JoeUser' => '7 wonder @ American soil',
                'AnnieManager' => 'Shiny 3 things hmm, vulnerable',
                'RobAdmin' => 'Imitate #14th symptom of apathy'
            ] as $username => $password
        ) {
            $user = new \app\models\user\UserRecord();
            $user->attributes = compact('username', 'password');
            $user->save();
        }
    }

    public function down()
    {
        $this->delete('user');
    }
}
