<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | 404 Page not found</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
    <body class="hold-transition login-page">
        <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>
            <br/>
            <div class="error-content">
                <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="<?= Yii::app()->request->baseUrl; ?>">return to dashboard</a>.
                </p>
            </div>            
        </div>
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/fastclick/fastclick.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/dist/js/app.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/dist/js/demo.js"></script>
    </body>
</html>
