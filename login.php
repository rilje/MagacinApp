<?php 

    require_once "db.php";
    $users = $pdo->query("SELECT * FROM users")->fetchAll();
    // print_r($users);
    $greska_username = "";
    $greska_password = "";
    $username = "";
    $password = "";
    $privilegije = "";


    function sredi_input($data){
        $data = stripslashes($data);
        $data =  trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    # Validacije inputa
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // echo "poslata forma";
        if(empty($_POST['username'])){
            $greska_username = "* Niste uneli username";
        }else{
            $username = sredi_input($_POST['username']);
        }if(empty($_POST['password'])){
            $greska_password = "* Niste uneli password";
        }else{
            $password = sredi_input($_POST['password']);
        }
    }

    # Provera da li korisnik postoji
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=? AND pass=?");
    $stmt->execute([$username, $password]);
    $korisnik = $stmt->fetch();
    if($korisnik){
        echo "Pronadjen";
        session_start();
        $_SESSION['privilegije'] = $korisnik['privilegije'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if($korisnik['privilegije'] == "admin"){
            header("Location:landing.php");
            die();
        }elseif($korisnik['privilegije'] == "user"){
            header("Location:user.php");
            die();
        }elseif($korisnik['privilegije'] == "editor"){
            header("Location: editor.php");
            die();
        }
        
    }else{
        // echo "Nije pronadjen";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>


<body style="background-image: url('images/bg.jpg');">
    <div class="neki" style="text-align:center;margin-top:50px; color:white;">

        <h1>DM MONT</h1>
        <h2>Centralni magacin</h2>
    </div>
    <div class="container">
        
        <div class="form" style="width:35%; margin-top:50px; border:none;" >
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <p class="form_p" style="color:white;">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control form-control" name="username">
                    <!-- <input type="text" name="username" class="login_input"> -->
                    <span class="greska"><?= $greska_username ?></span>
                    
                </p>
                <p class="form_p">
                    <label for="password" style="color:white;">Password:</label>
                    <input type="password" class="form-control form-control" name="password">
                    <!-- <input type="password" name="password" class="login_input"> -->
                    <span class="greska"><?= $greska_password ?></span>
                </p>
                <p class="form_p">
                 <button class="btn btn-light">Log in</button>
                </p>
            </form>
        </div>
    </div>
</body>
</html>