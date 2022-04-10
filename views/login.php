<?php

/** @var $model \app\models\User */
$this->title = 'Login';
?>
<h1>Login</h1>
<?php $form =  \app\core\form\Form::begin('', "post"); ?>

<div class="row">

    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <button class="btn btn-primary">Submit</button>
</div>

<?php \app\core\form\Form::end() ?>