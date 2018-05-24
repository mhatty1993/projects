<?php 

use yii\helpers\Html;
//$employees

$this->title = "Employees";
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create an employee.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Employee',['/employee/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>


<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Contact Number</th>
    </tr>
    <?php foreach($employee as $employees) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($employees->name, [
                '/employee/view',
                'id'=>$employees->id]); ?>
        </td>    
        <td><?= $employees->address ?></td>  
         <td><?= $employees->gender ?></td> 
          <td><?= $employees->contactnumber ?></td>    
    </tr>
    <?php endforeach; ?>
</table>
