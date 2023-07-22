<?php
session_start();
ob_start();


$id = filter_input(INPUT_GET,'id');

if($id == ""){

    header("Location: index.php");
}
// verificar se existe o id pega pelo input get 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar mensagem</title>
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

.area{

    width: 380px;
    height: 400px;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    

}
h1{

    color: white;
    text-align: center;
    font-size: 40px;

}

.titulo{

    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}

.titulo h1{

font-size: 30px;
color: black;

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
width: 75%;
padding: 10px;

}

.descricao{

    resize: none;
    width: 80%;
    border-radius: 15px;
    padding: 10px;

}

.btn{

width: 100%;
display: flex;
justify-content: center;
align-items: center;
margin-top: 15px;

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
    </style>

</head>
<body>
<?php
echo("<input id='id_value' type='hidden' value=".$id.">");
?>
<div class="geral">
    <h1>🔐 Secret.me 🔐</h1>
        <div class="area">
        <!-- enviar.php?id=<?=$id?> -->
            <form method="POST" id="form_msg" action="" class="content">

                <div class="titulo">

                    <h3>Envie sua mengagem anônimamente</h3>

                </div>


                <div class="input">

                    <input type="text" id="nome" name="nome" placeholder="como seu nome aparecerá">

                </div>

                <div class="input">

                    <textarea id="mensagem" placeholder="Insira sua mensagem 💬" name="descricao" class="descricao" cols="30" rows="10"></textarea>

                </div>

                <div class="btn">

                    <input type="submit" value="Enviar">

                </div>



            </form>

            
        </div>
        
</div>
    <script src="js/sweetalert2.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>