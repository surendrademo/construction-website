<?php
    session_start();
    if(!isset($_SESSION['e'])){
        if(isset($_REQUEST['emails'])||isset($_REQUEST['pass'])||isset($_REQUEST['name'])){
            $e=$_REQUEST['emails'];
            $p=$_REQUEST['pass'];
            $n=$_REQUEST['name'];
            $_SESSION['e']=$e;
            $_SESSION['p']=$p;
            $_SESSION['n']=$n;
            echo"<script> location.href='personal.php'</script>";  
        }

    }
    else{
        echo"<script> location.href='personal.php'</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css6.css">
    <title>login form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4 ">
                <form action="#" method="POST" class="shadow-lg p-3">
                <div class="form-group">
                <label for="name" class="font-weight-bold pl-3 text-white">name</label>
                        <input type="text" class="form-control"
                        placeholder="name" id="name" name="name">
                    </div>
                <div class="form-group">
                    <i class="fas fa-users "></i>
                        <label for="emails" class="font-weight-bold pl-3 text-white">email</label>
                        <input type="email" class="form-control"
                        placeholder="email" id="emails" name="emails">
                        <small class="text-primary"><i>we will never share your id</i></small>
                    </div>
                    <div class="form-group" ><i class="fas fa-key"></i>
                        <label for="pass" class="font-weight-bold pl-3 text-white"      >password</label>
                        <input type="password" class="form-control"
                        placeholder="password" id="pass" name="pass">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check
                        -input" id="select" style="display:inline;">
                        <label for="select" class="form-check-label text-primary" > remember me !
                        </label>  
                    </div>
                    <button type="submit" name="login" value="login" class="btn btn-outline-success btn-block
                    btn-block font-weight-bold mt-4 shadow-sm">login</button>
          
                </form>
            </div>
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>