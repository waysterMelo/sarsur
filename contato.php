<?php include "functions/db.php"; ?>
<?php
$sql = "select * from contato";
$query = mysqli_query($conn, $sql);
while($rs = mysqli_fetch_array($query)){
    $img = $rs['header_img'];
    $texto = $rs['texto'];
    $desc = $rs['descricao1'];
    $desc2 = $rs['descricao2'];
    $endereco = $rs['endereco'];
    $tel = $rs['tel'];
    $email = $rs['email'];
}
?>
<?php

$sql = "select * from top";
$query = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($query)){
    $logo = $rs['logo'];
    $telefone = $rs['telefone'];
    $endereco = $rs['endereco'];
}
?>

<!doctype html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="escritório de advocacia em belo horizonte, escritórios de advocacia em belo horizonte, advogados belo horizonte, advogado belo horizonte, advogado trabalhista bh whatsapp, advogados em belo horizonte,
        Escritorios, advogado bh, advogados online, advocacia, direito trabalhista, direito civil, civil direito, online, ">
    <title>Nogueira & Sarsur | Escritório de Advocacia em Belo Horizonte</title>
    <link rel="icon" href="/libraries/img/logo.jpg" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="libraries/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/css/font-awesome.min.css">
    <link rel="stylesheet" href="libraries/css/animate.css">
    <link rel="stylesheet" href="libraries/css/aos.css">
    <script src="libraries/js/jquery.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    <link rel="stylesheet" href="libraries/css/estilo_1.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>

<div id="fb-root"></div>
<div id="preloader">
    <div id="status"></div>
</div>

<header id="escritorio-header">
    <div class="container-fluid" id="header-escritorio" style="background-image: url('./libraries/img/<?php echo $img; ?>'); background-size: cover;height: auto; background-repeat: no-repeat; width: 100%;">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-sm-2" id="logo">
                <img src="/libraries/img/logo.jpg" title="Nogueira e Sarsur Advogados Logo" alt="logo" class="img-fluid">
            </div>
            <div class="col-md-3 col-lg-3 font-weight-light text-center my-auto" style="color: #000;">
                <span class="textobranco"><?php echo $telefone ?></span>
            </div>
            <div class="col-md-6 col-lg-5 font-weight-light text-center mx-auto my-auto border-left" style="color: #000;">
                <span class="textobranco"><?php echo nl2br($endereco);?></span>
            </div>
        </div>
        <div class="row justify-content-end">
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler mx-auto" id="buttonnav" type="button" data-toggle="collapse" data-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active mx-1">
                            <a title="Página Inicial" href="/" class="nav-link">Página Inicial</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Escritório" href="escritorio.php" class="nav-link">Escritório</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Áreas de atuação" href="services.php" class="nav-link">Áreas de atuação</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Advogados" href="./advogados/" class="nav-link">Advogados</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Trabalhe Conosco" href="works.php" class="nav-link">Trabalhe Conosco</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a title="Contato" href="contato.php" class="nav-link">Contato</a>
                        </li>
                        <li class="border-left"></li>
                        <li class="nav-item mx-1">
                            <a title="Webmail" href="https://nogueirasarsur.com.br:2096" target="_blank" class="nav-link">Webmail</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="text-capitalize text-center pb-5">
                <h1 style="color: #0c5460;" class="font-weight-bold mt-5 py-4 display-4 "><?php echo $texto;?></h1>
                <a href="index.php" class="text-white">pagina inicial</a><i class="fa fa-chevron-right mx-2" style="color: white;"></i>
                <span class="text-white text-capitalize"> nosso escritório</span>
            </div>
        </div>
    </div>
</header>


<div class="container py-5 mt-4" id="contato">
    <div class="row">
        <div class="col-lg-5">
            <h1 style="font-size: 32px; color: #305f59;"><?php echo $desc; ?></h1>
            <p class="pb-3 font-italic"><?php echo $desc2; ?></p>
            <div class="card" style="border: none;">
                <img src="./libraries/img/address.png" alt="endereco" class="img-fluid card-img-top" style="width: 13%;">
                <div class="card-body" style="margin-top: -17%; margin-left: 10%;">
                    <h4>Endereço</h4>
                    <p class="text-left">
                        <?php echo nl2br($endereco);?>
                    </p>
                </div>
            </div>
            <div class="card" style="border: none;">
                <img src="./libraries/img/phone.png" alt="endereco" class="img-fluid card-img-top" style="width: 10%;">
                <div class="card-body" style="margin-top: -14%; margin-left: 10%;">
                    <h4>Telefone</h4>
                    <p class=""><?php echo $tel; ?></p>
                </div>
            </div>
            <div class="card" style="border: none;">
                <img src="./libraries/img/email.png" alt="endereco" class="img-fluid card-img-top" style="width: 10%;">
                <div class="card-body" style="margin-top: -14%; margin-left: 10%;">
                    <h4>Email</h4>
                    <p class=""><?php echo $email; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 text-center">
            <h4 class="text-capitalize font-weight-bold">envie sua mensagem</h4>
            <form method="post" action="" enctype="multipart/form-data">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                       <div class="form-group pt-5">
                           <input type="text" class="form-control py-4" name="nome" placeholder="Digite Seu Nome Completo">
                       </div>
                       <div class="form-group">
                           <input type="text" class="form-control py-4" name="tel" placeholder="Telefone de Contato">
                       </div>
               </div>
               <div class="col-lg-6">
                   <div class="form-group pt-5">
                       <input type="text" class="form-control py-4" name="email" placeholder="Digite Seu Email">
                   </div>
                   <div class="form-group pt-2">
                       <select class="form-control" name="formacao">
                           <option>Elogios</option>
                           <option>Reclamações</option>
                           <option>Dúvidas</option>
                           <option>Informações</option>
                       </select>
                   </div>
               </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="form-group">
                     <textarea name="message" class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
                    <button type="submit" name="enviar" class="mt-4 float-left py-3 btn btn-md" style="background-color: #305f59; color: white;">Enviar Mensagem</button>
                 </div>
             </div>
         </div>
     </form>
    </div>
</div>
</div>


<section class="container-fluid" id="google_maps">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=Avenida%20do%20Contorno%2C%20n%C2%BA.%203257%20Bairro%20Santa%20Efig%C3%AAnia%2C%20Belo%20Horizonte%2FMG%20&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;height:339px;width:100%;}</style></div>
</section>

<?php

if(isset($_POST['enviar'])) {

    $name = $_POST['nome'];
    $sender_email = $_POST['email'];
    $send_to = 'contato@nogueirasarsur.com.br';
    $subject = 'CONTATO FEITO PELO SITE';
    $message = $_POST['message'];

    require_once('./phpmailer/class.phpmailer.php');
    $send_mail = new PHPMailer();
    $send_mail->From = $sender_email;
    $send_mail->FromName = $name;
    $send_mail->Subject = $subject;

    $headers .= "Sobre :". $_POST['formacao']. "\r\n" ;
    $headers .= "Telefone: ".$_POST['tel']. "\r\n" ;

    $send_mail->CharSet = "UTF-8";
    $send_mail->Body = $headers ."\r\n" . $message;
    $send_mail->AddAddress($send_to);

    $send_mail->Send();

    if ($send_mail){

        echo "<script>alert('MENSAGEM ENVIADA')</script>";
        echo "<script>window.open(ccontato_img.phpphp, '_self')</script>";
    }else{

    }

}

?>

<?php include "./includes/footer.php"; ?>
