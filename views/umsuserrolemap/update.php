<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UmsUserRoleMap */

$this->title = 'Update Ums User Role Map: ' . $model->ums_user_role_map_id;
$modeltitle = 'Ums User Role Map';
$rawmodelname='UmsUserRoleMap';
$this->params['breadcrumbs'][] = ['label' => 'Ums User Role Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ums_user_role_map_id, 'url' => ['view', 'id' => $model->ums_user_role_map_id]];
$this->params['breadcrumbs'][] = 'Update {modelClass}';
?>


<section role="main" class="content-body">
					<header class="page-header">
						<h2><?= Html::encode($this->title) ?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?= Yii::$app->homeUrl ?>dashboard">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span><?= Html::encode($modeltitle) ?></span></li>
								<li><span><?= Html::encode($this->title) ?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="/UMS/<?= Html::encode(strtolower($rawmodelname)) ?>" class="btn btn-primary">List of <?= Html::encode($modeltitle) ?></a>
										</div>
                                        </div>
                                        
								</div>
					<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title"><?= Html::encode($this->title) ?></h2>
							</header>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</section>
