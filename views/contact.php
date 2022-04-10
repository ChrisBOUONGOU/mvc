<?php

/** @var $this \kurisushinjiro\phpmvc\View */
/** @var $model \app\models\ContactForm */

$this->title = 'Contact';
?>
<h1>Contact us</h1>

<?php $form = \kurisushinjiro\phpmvc\form\Form::begin('', 'post') ?>

<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new \kurisushinjiro\phpmvc\form\TextareaField($model, 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php \kurisushinjiro\phpmvc\form\Form::end(); ?>