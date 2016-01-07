<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	//Yii::app()->bootstrap->register();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
         <link rel="icon" href="<?php echo $baseUrl; ?>/img/favicon.png">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/font-awesome/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/signin.css" >

        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/flaty.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/flaty-responsive.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-page">
        <div class="login-wrapper">
            <?php echo $content; ?> 
        </div>

        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>   
    </body> 
</html>