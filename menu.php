<?php

require 'config.php';
session_start();
ob_start();

if(!isset($_SESSION['id_lock'])){

    $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-size: 13px'  >Necessário entrar em sua conta primeiro";
    header("Location: index.php");
}


// $sql = $pdo->prepare("SELECT * FROM carteiro WHERE id = :id");
// $sql->bindValue(":id", $_SESSION["id_lock"]);
// $sql->execute();

// if($sql->rowCount() > 0 ){


//     $lista = [];
//     $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

//     // foreach($lista as $row_msg){

//     //     $nome = $row_msg['nome'];
//     //     $msg = $row_msg['mensagem'];

//     // }


// }

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens</title>
    <link rel="icon" type="image/png" href="anonymous_ico.png"/>

<style>

*{
    margin: 0;
    padding: 0;
    word-wrap: break-word;
}
html{
    min-height: 100vh;
    background-image: linear-gradient(65deg,rgb(24, 2, 53),rgb(6, 197, 255));

}

.topo{
    width: 100%;
    height: 100px;
    background-image: linear-gradient(45deg, rgb(48, 0, 104),blue);
    top: 0;
    position: sticky;
    display: flex;
    justify-content: center;
    align-items: center;
}
h2{
    color: rgb(210, 210, 210);
}
.link{
    width: 70%;
    text-align: center;
    
}
.sair{
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.sair a{
    text-decoration: none;
    color: black;
    padding: 10px;
    background-color: white;
    font-size: 20px;
    border-radius: 15px;
    width: 75px;
    text-align: center  ;
    transition: 0.25s;
}
.sair a:hover{
    color: white;
    background-color: black;
}

a{

    text-decoration: none;
    color: white;

}



.area_cart{

width: 100%;
display: flex;
align-items: center;
justify-content: center;

margin-bottom: 100px;

}
.container_cart{
    
    width: 80%;
   
    border-radius: 10px;
    
}
.users{

    padding: 15px;
    color: white;
    background-color: black;
    border-radius: 15px;
    margin-top: 10px;
    margin-bottom: 10px;
    
}

.content_excluir{

    display: flex;
    justify-content: end;
    align-items: center;

}



.content_excluir a {
    padding: 15px;
    
    margin-top: 10px;
    background-color: red;
    border-radius: 10px;

}
.link{
    display: flex;
    justify-content: center;
    align-items: center;
}

.clipboard{

margin-left: 20px;
display: flex;
justify-content: center;
align-items: center;

}

.clipboard input{

    padding: 10px;
    border-radius: 15px;
}

.clipboard button{

    padding: 10px;
    background-color: black;
    margin-left: 5px;
    border: none;
    border-radius: 15px;
    color: white;

}
.clipboard button{

cursor: pointer;

}
</style>
</head>
<body>
    <div class="topo">
        <div class="link">
            <div class="link_content">


                <h2>Envie seu link para amigos:</h2>
                <div class="clipboard">

                    <input type="text" id="link" value="https://secretmeplusss.000webhostapp.com/send.php?id=<?=$_SESSION['id_lock']?>" readonly> 
                    <button onclick="copiarTexto()">copiar</button>

                </div>

            </div>
        </div>
        <div class="sair">

            <a href="sair.php">Sair</a>

        </div>
        
    </div>
   
   
    <div class="area_cart">

    

        <div class="container_cart">
            
            <!-- <div class="content_excluir"> 
                <a href="excluir.php?id=<?=$_SESSION['id_lock']?>">Excluir Mensagens</a>
            </div> -->

        <?php
        
        $sql = $pdo->prepare("SELECT * FROM carteiro WHERE id_user = :id");
        $sql->bindValue(":id", $_SESSION["id_lock"]);
        $sql->execute();
        
        if($sql->rowCount() > 0 ){
            
            echo("<div class='content_excluir'> 
                        <a href='excluir.php?id=".$_SESSION['id_lock']."'>Excluir Mensagens</a>
                    </div>");
        
            $lista = [];
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        
            foreach($lista as $rows){
    
                echo("<div class='users'>
    
                        <h1>".$rows['nome']."</h1>
                        <br>
                        <p>".$rows['mensagem']."   </p>
    
                    </div>");
    
            }

        }
        else{

            $lista = array(
                "chave1" => 1
                );

        }
        
        
            

            


        ?>

        </div>



    </div>


   

    
    
</body>
<script src="js/clipboard.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/custom.js"></script>

<?php
// ao usuário realizar o login recebe um alerta de login realizado
if(isset($_SESSION['login'])){

    echo("<script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Logado com Sucesso!'
    })</script>");

    unset($_SESSION['login']);

}


?>
</html>