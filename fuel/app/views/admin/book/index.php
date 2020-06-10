<div class="row">
    <div class="form-group">
         <a class="btn btn-success" href="/admin/book/add" title="add"><i class="fa fa-plus"></i> Add book</a>
    </div>
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php 
         foreach($books as $book) : ?>
            <tr>
                <td><?php echo $book['id']; ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['price']; ?></td>
                <td>
                    <a href="/admin/book/edit/<?php echo $book['id']; ?>" title="edit"><i
                            class="fa fa-pencil-square-o"></i></a>
                    <a href="/admin/book/delete/<?php echo $book['id']; ?>" title="delete"><i
                            class="fa fa-times-circle"></i></a>
                </td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
    <?php echo Pagination::instance('mypagination')->render(); ?>

</div>