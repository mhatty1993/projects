<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180523_032011_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
            'address' => $this->string(191)->notNull(),
            'gender' => $this->string(191)->notNull(),
            'contactnumber' => $this->string(191)->notNull(),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
