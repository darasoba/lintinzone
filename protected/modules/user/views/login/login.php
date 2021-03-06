<div class="form">

<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'user-login-form',
		'enableAjaxValidation' => true,
		'enableClientValidation' => true,
		'focus' => array($model, 'username')
	));
?>

<h1><?php echo UserModule::t("Log in to LintinZone"); ?></h1>
	
	<!--<?php echo $form->errorSummary($model); ?>-->

	<div class="row">
		<?php echo $form->labelEx($model, 'username'); ?>
		<?php echo $form->textField($model, 'username'); ?>
		<?php echo $form->error($model, 'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password'); ?>
		<?php echo $form->passwordField($model, 'password'); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>

	<div class="row rememberMe">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
 	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Log In'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
