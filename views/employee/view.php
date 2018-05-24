<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
//$employees

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label'=>'Employee', 'url'=>['/employee/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>

<?php if(Yii::$app->user->isGuest): ?>
            <br><br>
            Please <?= Html::a('login',['/site/login'])?> to update 
            an employee.
        <?php else: ?>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
            

        <?php endif; ?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'address',
        'gender',
        'contactnumber'
    ]
]); 