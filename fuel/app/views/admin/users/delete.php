<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">

                <?php if(isset($errors)) : ?>
                <div class="row">
                    <font style="color: red">
                        <?php foreach($errors as $item ): ?>
                        <p><?php echo  $item ?></p>
                        <?php endforeach ?>
                    </font>
                </div>
                <?php endif ?>
                <form action="/admin/user/delete/<?php echo $user->id ?>" method="post">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Username</label>
                        </div>
                        <div class="col-md-9">
                            <?php echo $user->username; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Email Address</label>
                        </div>
                        <div class="col-md-9">
                            <?php echo $user->username; ?>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<br>
<div class="clear-fix"></div>