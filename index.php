<!--
#
# DIOGENES OLIVEIRA DOS SANTOS JUNIOR
# WWW.DIOGENESJUNIOR.COM.BR
# CONTATO@DIOGENESJUNIOR.COM.BR
#
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<title>Titulo da Página 2</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#053d4e">

<!-- DESCRIÇÃO DO SITE -->
<meta name="description" content="Coloque aqui a descrição do site" />
<!-- PALAVRAS CHAVE -->
<meta name="keywords" content="coloque aqui as palavras chave separadas por virgula" />

<!-- FAVICON -->
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" media="all" />

<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">    
<!-- ICONES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


</head>
<body>
   
Editei essa porra




    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/sweetalert2.min.js"></script> 
    <script type="text/javascript">
            // COMO FAZER A CHAMADA NO FORMULÁRIO onSubmit="return ajaxSubmit(this);" 
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;
                
                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
              
                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");
                           
                return false;
            }
    </script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>
