<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="meStyles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <div id="sessaoum">
        <?php
            session_start();
            $_SESSION['user']=$_POST['usuario'];
            $_SESSION['linkum']=$_POST['linkum'];
            $_SESSION['linkdois']=$_POST['linkdois'];
            if(isset($_SESSION['user'])){
                echo"Sessão: ";
                echo $_SESSION['user'];
            }
            else
            {
                echo"Sessão não criada!";
            }                      
        ?>
       </div>
       <div id="sessaodois">
           <?php 
           echo"<a href='meLogoff.php?logoff=1'>Fazer logoff</a>";
           ?>
        </div>
    </header>
    <div id="whitediv"></div>
    <section>
    <div id="whitediv"></div>
    <article id="link1">
    <h1><b>Primeiro vídeo</b></h1>
        <iframe width="560" height="315" src="<?php echo $_SESSION['linkum']; ?>"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </article> 
    <article id="link2">
                <h1><b>Segundo vídeo</b></h1>
                <iframe width="560" height="315" src="<?php echo $_SESSION['linkdois']; ?>"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </article>  
    </section>
    <div id="whitediv"></div>
    <footer>
        <div id="fotterum">
        <p>Trabalho de PHP da aula Linguagem de ProgramaçãoII<br>
            Eliza Weber, Turma 3K
        </p>
        </div>
    </footer>
</body>
</html>
<!-- https://www.youtube.com/embed/d2mH48V1M50 -->