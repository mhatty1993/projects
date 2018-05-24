<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProjectAssignment */

$this->title = 'Create ProjectAssignment';
$this->params['breadcrumbs'][] = ['label' => 'ProjectAssignment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
