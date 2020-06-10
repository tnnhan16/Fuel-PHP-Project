<style>
table tr td, table thead th{
    border: 1px solid blue;
    background-color: #ffffee;
}
</style>
<div class="row">
    <h2>こんにちは世界こんにちは世界こんにちは世界こんにちは世界</h2>
    <table>
        <thead>
            <tr>
                <th>Thông tin chung</th>
                <th>Số lượng user</th>
                <th>logo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>こんにちは世界</td>
                <td>こんにちは世界</td>
                <td>こんにちは世界</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-borderless table-striped table-earning">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php 
         foreach($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
</div>