<?php if(Session::get_flash('message')): ?>
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show"
    style="margin-top: 1rem !important;margin-bottom:0rem !important;">
    <span class="badge badge-pill badge-success">Success</span>
    <?php echo Session::get_flash('message'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="clearfix"></div>
<br />
<?php endif ?>
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
<table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>id</th>
            <th>image</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($upload as $item) : ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td class="text-center">
                <?php echo Asset::img('upload/image/'.$item['image']) ?>
            </td>
            <td>
                <a href="/admin/upload/edit/<?php echo $item['id']; ?>" title="edit"><i
                        class="fa fa-pencil-square-o"></i></a>
                <a href="/admin/upload/delete/<?php echo $item['id']; ?>" title="delete"><i
                        class="fa fa-times-circle"></i></a>
            </td>
        </tr>
        <?php endforeach  ?>
    </tbody>
</table>
<?php echo Pagination::instance('mypagination')->render(); ?>
<div class="clearfix"></div>
<br />