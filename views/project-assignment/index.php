<?php 

use yii\helpers\Html;
//$projectassignment

$this->title = "ProjectAssignment";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1
<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create project assignment.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Project Assignment',['/project-assignment/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        
        <th>Employee_Id</th>
        <th>Project_Id</th>
    </tr>
    <?php foreach($projectassignment as $projectassignments) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($projectassignments->employee_id, [
                '/project-assignment/view',
                'id'=>$projectassignments->id]); ?>
        </td>    
        <td><?= $projectassignments->project_id ?></td>     
    </tr>
    <?php endforeach; ?>
</table>
