<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Buka Warung</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>
<body id="bg-login">
    <div class="box-login">
        <h2>login</h2>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="login" >
        </form>
        <?php
            if(isset($_POST['submit'])){
                include 'db.php';
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin  WHERE username= '".$user."' AND password = '".MD5($pass)."'");
                if (mysqli_num_rows($cek) >0){
                    echo '<script>window.location="dashboard.php"</script>';
                }
                else {
                    echo '<script>alert("Username atau Password Anda Salah")</script>';
                }
            }
        ?>
    </div>
</body>
</html>
