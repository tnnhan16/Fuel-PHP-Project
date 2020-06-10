<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">
                <form class="form-horizontal form-material" action="/admin/book/delete/<?php echo $book->id ?>" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-9">
                           <?php echo $book->title; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Author</label>
                        <div class="col-md-9">
                        <?php echo $book->author; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Price</label>
                        <div class="col-md-9">
                        <?php echo $book->price; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>