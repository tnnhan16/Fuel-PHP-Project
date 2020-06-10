<div class="form-group">
    <div class="col-md-4 image-edit">
        <?php echo Asset::img('upload/image/'.$file->image) ?>
    </div>
</div>
<?php echo Form::open(array('class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'method'=>'post')); ?>
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
        <?php echo Form::file('upload',array('class' => 'custom-file-input')); ?>
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
    <div class="input-group col-md-3">
        <?php echo Form::submit('submit', 'Upload', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
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