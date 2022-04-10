<?php

/** @var $model \app\models\User */
?>
<h1>Login</h1>
<?php $form =  \kurisushinjiro\phpmvc\form\Form::begin('', "post"); ?>

<div class="row">

    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <button class="btn btn-primary">Submit</button>
</div>

<?php \kurisushinjiro\phpmvc\form\Form::end() ?>