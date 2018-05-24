<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project_assignment`.
 */
class m180523_043635_create_project_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project_assignment', [
            'id' => $this->primaryKey(),
            'employee_id' => $this->integer(),
            'project_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-project_assignment-employee_id'
            ,'project_assignment','employee_id');
        $this->addForeignKey(
            'fk-project_assignment-employee'
            ,'project_assignment','employee_id'
            ,'employee','id'
        );

        $this->createIndex(
            'idx-project_assignment-project_id'
            ,'project_assignment','project_id');
        $this->addForeignKey(
            'fk-project_assignment-projects'
            ,'project_assignment','project_id'
            ,'projects','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-project_assignment-employee','project_assignment');
        $this->dropForeignKey('fk-project_assignment-projects','project_assignment');
        $this->dropIndex('idx-project_assignment-employee_id','project_assignment');
        $this->dropIndex('idx-project_assignment-project_id','project_assignment');
        $this->dropTable('project_assignment');
    }
}
