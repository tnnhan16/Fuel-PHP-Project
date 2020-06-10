<?php echo Form::open(array('class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'method'=>'post')); ?>
<div class="form-group">
    <div class="col-md-4 image-edit">
        <?php echo Asset::img('upload/image/'.$file->image) ?>
    </div>
</div>
<?php echo Form::submit('submit', 'Delete', array('class' => 'btn btn-primary')); ?>
<?php echo Form::close(); ?>

<?php if(isset($errors)) : ?>
<font style="color: red">
    <?php foreach($errors as $item ): ?>
    <p><?php echo  $item ?></p>
    <?php endforeach ?>
</font>
<?php endif ?>
<div class="clearfix"></div>
<br />