<?php
    session_start();

    if(isset($_SESSION['e'])){
        echo "<p style='color:green; text-align:center;
        margin-top:50px; font-size:30px;'> WELCOME YOUR GMAIL IS :-".$_SESSION['e']." </p> 
      <p style='color:blue; text-align:center;
        margin-top:50px; font-size:30px;'>YOUR PASSWORD IS :-". $_SESSION ['p']."</p>"."<p style='color:blue; text-align:center;
        margin-top:50px; font-size:30px;'>YOUR NAME IS :-". $_SESSION ['n']."</p>";
    }else{
        echo"<script> location.href='login.php';</script>";
    }
    if(isset($_REQUEST['log-out'])){
        session_unset();
        session_destroy();
        echo"<script> location.href='login.php';</script>";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="background-color:#ffc;">
        <form action="#" method="POST">
            <div  style='text-align:center; margin-top:50px; border-radius:10px;'>
            <input type="submit" value="log-out" name="log-out"
           ></div>
</form>
    </body>
    </html>