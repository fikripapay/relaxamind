<?php
    if (isset($_GET['user'])){
        $user = $_GET['user'];

        $query = "SELECT * FROM tbl_user WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param ("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $username = $row['username'];
                $password = $row['password'];
            }
        }

    }
?>

<div>
    <h1 class="h3 mb-4 text-gray-800 text-center">EDIT DATA ADMIN</h1>
</div>
<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Masukan Data</h6>
    </div>
    <div class="card-body">
        <form action="index.php?page=admin" method="post" enctype="multipart/form-data">                     
    
                
                <div class="form-group">
                    <input type="hidden" id="username" name="username" value="<?php echo $username ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" value="<?php echo $username ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" name="password" minlength="8" pattern="^[a-zA-Z0-9!@#$%^&*()-_=+{};:,.<>?]+$">
                </div>

            <button type="submit" name="update" class="btn btn-primary">Submit</button>
            <a href="index.php?page=admin" class="btn btn-danger">
                <span class="text">Kembali</span>
            </a>
        </form>
    </div>
</div>