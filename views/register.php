<?php

/** @var $model \app\models\User */

?>

<h1>Create an account</h1>

<?php $form =  \kurisushinjiro\phpmvc\form\Form::begin('', "post"); ?>

<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstname'); ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastname'); ?>
    </div>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField(); ?>

    <button class="btn btn-primary">Submit</button>
</div>

<?php \kurisushinjiro\phpmvc\form\Form::end() ?>