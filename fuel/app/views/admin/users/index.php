<div class="row">
    <div class="form-group">
         <a class="btn btn-success" href="/admin/user/add" title="add"><i class="fa fa-plus"></i> Add user</a>
    </div>
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php 
         foreach($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="/admin/user/edit/<?php echo $user['id']; ?>" title="edit"><i
                            class="fa fa-pencil-square-o"></i></a>
                    <a href="/admin/user/delete/<?php echo $user['id']; ?>" title="delete"><i
                            class="fa fa-times-circle"></i></a>
                </td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
    <?php echo Pagination::instance('mypagination')->render(); ?>

</div>