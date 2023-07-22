<?php
session_start();
ob_start();

// echo($_SESSION['id_lock']);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="anonymous_ico.png"/>


    <style>


html{

height: 100vh;
width: 100%;
background-image: linear-gradient(65deg,rgb(2, 2, 53),rgb(6, 197, 255));
display: flex;
justify-content: center;
align-items: center;

}


.container{

    height: 350px;
    width: 350px;
    border-radius: 15px;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;

}

h1{
    color: white;
    text-align: center;
    font-size: 40px;
}

.content{

    width: 100%;
    height: 100%;

}

.titulo h1{
    color: black;
    font-size: 30px;
}

.input{

    margin-top: 30px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

}

.input input{

    border-radius: 10px;
  
    padding: 10px;

}

.btn{

    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 35px;

}

.btn input{

    padding: 15px;
    width: 150px;
    border-radius: 10px;
    border: none;
    background-image: linear-gradient(45deg, rgb(48, 0, 104),blue);
    color: white;
    transition: 0.5s;

}

.btn input:hover{

cursor: pointer;
width: 170px;


}

.area_link{
    margin-top: 10px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: start;

}

.area_link a{

    margin-left: 50px;

}

.alerta{
    text-align: center;
}
    </style>
</head>
<body>    
    <h1>🔐 Secret.me 🔐</h1>
   
        <form  method="POST" action="login_action.php" class="container">        

            <div class="content">
            <?php
                if(isset($_SESSION['msg'])){
                    echo($_SESSION['msg']);
                    unset($_SESSION['msg']);
                }

            ?>
                <div class="titulo">

                    <h1>Login</h1>

                </div>

                <div class="input">

                    <input type="email" name="email" placeholder="E-mail">

                </div>

                <div class="input">

                    <input type="password" name="senha" placeholder="Senha">

                </div>
                
                <div class="btn">

                    <input type="submit" value="Login">

                </div>


                <div class="area_link">

                    <a href="cadastrar.php">Cadastre-se</a>

                </div>
                
            </div>

        </form>
   
</body>

<script src="js/sweetalert2.js"></script>
<script src="js/custom.js"></script>
</html>