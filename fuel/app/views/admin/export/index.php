<div class="row">
    <div class="form-group">
        <div class="col-md-2">
            <form action="/admin/export" method="post">
                <input type="hidden" name="action" value="csv"/>
                <button type="submit" class="btn btn-success">Export csv</button>
            </form>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-2">
            <form action="/admin/export" method="post">
                <input type="hidden" name="action" value="excel"/>
                <button type="submit" class="btn btn-success">Export excel</button>
            </form>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-2">
            <form action="/admin/export" method="post">
                <input type="hidden" name="action" value="pdf"/>
                <button type="submit" class="btn btn-success">Export pdf</button>
            </form>
        </div>
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