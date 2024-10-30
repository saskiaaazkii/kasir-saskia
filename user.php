
<div class="container">
    <div class="col-lg-12">
        <h4 align="center">User </h4>
        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header bg-success">
                        Input User
                    </div>
                    <div class="card-body">
                        <form action="proses/proses_user.php?aksi=simpan" method="POST">
                            <table class="table table-hover">
                                <tr>
                                    <td>User ID</td>
                                    <td>
                                        <input type="text" name="UserID" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>
                                        <input type="text" name="Username" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <input type="password" name="Password" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" name="Email" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>
                                        <input type="text" name="NamaLengkap" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <input type="text" name="Alamat" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>
                                        <select name="Role" class="form-control">
                                            <option value="Administrator">Administrator</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header bg-success">
                        Data User
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <td>User ID</td>
                                <td>Username</td>
                                <td>Role</td>
                                <td>Aksi</td>
                            </tr>
                            <?php 
                            require_once "function/class.user.php";
                            $user = new User();
                            $select = $user->tampil();
                            foreach ($select as $data) {
                            ?>
                            <tr>
                                <td><?php echo $data['UserID'] ?></td>
                                <td><?php echo $data['Username'] ?></td>
                                <td><?php echo $data['Role'] ?></td>
                                <td>
                            <a href="admin.php?page=edit_user&UserID=<?php echo $data['UserID'] ?>" class="btn btn-success">Edit</a> |
                            <a href="proses/proses_user.php?UserID= <?php echo $data['UserID'] ?>&aksi=hapus" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 