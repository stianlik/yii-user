<?php
$this->breadcrumbs=array(
	UserModule::t('Admin')=>array('/admin'),
	UserModule::t('Brukere')=>array('/admin/user/admin'),
	'Administrere brukere'=>array('admin'),
	(UserModule::t('Update') . ' ' . $model->id),
);
$this->menu=array(
    array('label'=>UserModule::t('Create User'), 'url'=>array('create')),
    array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?php echo  UserModule::t('Update User')." ".$model->id; ?></h1>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>