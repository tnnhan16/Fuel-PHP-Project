<div class="col-md-6">
    <?php if(isset($errors)) : ?>
    <div class="row">
        <font style="color: red">
            <?php foreach($errors as $item ): ?>
            <p><?php echo  $item ?></p>
            <?php endforeach ?>
        </font>
    </div>
    <?php endif ?>
    <div class="login-form">
        <form action="/admin/user/edit/<?php echo $user->id ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input class="au-input au-input--full" type="text" disabled="disable" name="username" placeholder="Username"
                    value="<?php echo $user->username; ?>">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="Email"
                    value="<?php echo $user->email; ?>">
            </div>
            <div class="form-group">
                <label>Old password</label>
                <input class="au-input au-input--full" type="password" name="old_password" placeholder="Old password">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Password confirm</label>
                <input class="au-input au-input--full" type="password" name="password_confirm"
                    placeholder="Password confirm">
            </div>
            <button class="btn btn-success" type="submit">register</button>
        </form>
    </div>
</div>
<br>
<div class="clear-fix"></div>