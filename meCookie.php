<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <article>
        <?php
        $userEmail=isset($_POST['user_email'])?$_POST['user_email']:null;
        $userPassword=isset($_POST['user_password'])?$_POST['user_password']:null;
        $linkum=isset($_POST['linkum'])?$_POST['linkum']:null;
        $linkdois=isset($_POST['linkdois'])?$_POST['linkdois']:null;
        
         if (isset($_POST['userLogIn'])){
                session_start();
                $_SESSION['user']=$userEmail;
                $_SESSION['linkum']=$linkum;
                $_SESSION['linkdois']=$linkdois;
                header('Location: ./meSite.php');
        }
        else{
            echo"You haven't created a session yet!";
        }
        ?>
    </article>
    </section>
</body>
</html>