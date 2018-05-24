<?php 

use yii\helpers\Html;
//$project

$this->title = "Projects";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create project.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Project',['/projects/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach($projects as $project) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($project->name, [
                '/projects/view',
                'id'=>$project->id]); ?>
        </td>    
        <td><?= $project->description ?></td>  
   
    </tr>
    <?php endforeach; ?>
</table>
