<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nuneza, Leo</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/dist/css/skins/_all-skins.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/plugins/datatables/dataTables.bootstrap.css">        
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/plugins/datepicker/datepicker3.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">        
        <div class="wrapper">
          <header class="main-header">            
            <a href="<?= Yii::app()->request->baseUrl; ?>/index2.html" class="logo">            
              <span class="logo-mini"><b>L</b>EO</span>            
              <span class="logo-lg"><b>NUNEZA</b>LEO</span>
            </a>            
            <nav class="navbar navbar-static-top">
            
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">                    
            
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="<?= Yii::app()->request->baseUrl; ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                      <span class="hidden-xs">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu">
            
                      <li class="user-header">
                        <img src="<?= Yii::app()->request->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        <p>
                          Alexander Pierce - Web Developer
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
            
                      <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="<?= Yii::app()->createAbsoluteUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>          
                </ul>
              </div>
            </nav>
          </header>
          <!-- =============================================== -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= Yii::app()->request->baseUrl; ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>                                  
                    <? $this->widget('application.widgets.Menu'); ?>
                </section>
            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1><?= $this->title ?></h1>
                    <? if(isset($this->breadcrumbs)):?>
                        <? $this->widget('zii.widgets.CBreadcrumbs', array(
                            'tagName'              => 'ol',
                            'separator'            => '',
                            'encodeLabel'          => false,
                            'links'                => $this->breadcrumbs,
                            'htmlOptions'          => array('class' => 'breadcrumb'),                                                        
                            'activeLinkTemplate'   => '<li><a href="{url}">{label}</a></li>',
                            'inactiveLinkTemplate' => '<li class="active"><span>{label}</span></li>',                           
                            'homeLink'             => '<li>'.CHtml::link('<i class="fa fa-dashboard"></i>Home', array('site/index')).'</li>',
                        )); ?>                        
                    <? endif?>                   
                </section>
         		<?= $content; ?>
          	</div>          	

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.5
                </div>
                <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>    
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/fastclick/fastclick.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/dist/js/app.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/dist/js/demo.js"></script>
        <!-- DataTables -->
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/select2/select2.full.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?= Yii::app()->request->baseUrl; ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
        <?= Import::js() ?>        
        <script src="<?= Yii::app()->request->baseUrl; ?>/custom/my_js.js"></script>                
        <script type="text/javascript">
          $('.datepicker-basic').datepicker({
            autoclose: true
          });
        </script>
    </body>
</html>
