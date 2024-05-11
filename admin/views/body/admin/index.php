<?php
require_once 'controller/admin.php';
?>

    <div >
        <h1 class="h3 mb-4 text-gray-800 text-center">DATA ADMIN</h1>
    </div>
    <?php
        if(isset($_GET['insert'])) {
    ?>
        <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data Berhasil Dimasukan Ke Database.
        </div> 
    <?php
        } 
        else if(isset($_GET['delete'])) {
    ?>
        <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Data Berhasil Dihapus Dari Database.
        </div> 
    <?php
        } 
        else if(isset($_GET['update'])) {
    ?>
        <div class="alert alert-primary" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Password Berhasil Diubah.
        </div> 
    <?php
        } 
    ?>
    <div class="card shadow mb-4"> 
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "config/database.php";
                            $no=0;
                            $sql = "SELECT * FROM tbl_user";
                            // Eksekusi query
                            $result = $conn->query($sql);
                            // Loop melalui hasil query dan tampilkan dalam tabel
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $no++;
                                    echo "<tr>";
                                    ?>
                                    <th scope='row'> <?php echo $no ?></th> 
                                    <?php
                                        echo "<td>" . $row["username"] . "</td>";
                                        echo "<td>" . $row["password"] . "</td>";
                                        echo "<td>";
                                                ?>
                                                <a href='index.php?page=edit-admin&user=<?php echo $row["username"] ?>' class='btn btn-primary' style='margin-left: 5px'>
                                                    <span class='text'>Edit</span>
                                                </a>
                                                <?php
                                            
                                    echo "</td></tr>";
                                }
                            } 
                            // Tutup koneksi database
                            $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
