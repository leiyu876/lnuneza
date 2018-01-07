<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<title>AdminLTE 2 | Log in</title>
	  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	  	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/dist/css/AdminLTE.min.css">
	  	<link rel="stylesheet" href="<?= Yii::app()->request->baseUrl; ?>/plugins/iCheck/square/blue.css">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
		  	<div class="login-logo">
			    <a href="<?= Yii::app()->request->baseUrl; ?>"><b>Nuneza</b>LEO</a>
		  	</div>	  
		  	<div class="login-box-body">
		    	<p class="login-box-msg">Sign in to start your session</p>		    	
		    	<?
		    		$form = $this->beginWidget('CActiveForm', array(
						'id'					 => 'login-form',
						'enableClientValidation' => true,
						'clientOptions'			 => array(
							'validateOnSubmit' => true,
						),
					)); 
				?>					
					<?= $form->errorSummary($model, '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Failed!</h4>', null, array('class' => 'alert alert-danger alert-dismissible')); ?>
					<div class="form-group has-feedback">
			        	<?= $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
			        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			      	</div>
			      	<div class="form-group has-feedback">				        
				        <?= $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
			        	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			      	</div>			      	
			      	<div class="row">
			        	<div class="col-xs-8">
			        	</div>
			        	<div class="col-xs-4">			          		
			          		<?= CHtml::submitButton('Sign In', array('class' => 'btn btn-primary btn-block btn-flat')); ?>
			        	</div>		        
			      	</div>
				<? $this->endWidget(); ?>                
		  	</div>
		</div>
		<script src="<?= Yii::app()->request->baseUrl; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="<?= Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= Yii::app()->request->baseUrl; ?>/plugins/iCheck/icheck.min.js"></script>
		<script>
		 	$(function () {
		    	$('input').iCheck({
			      	checkboxClass: 'icheckbox_square-blue',
			      	radioClass: 'iradio_square-blue',
			      	increaseArea: '20%' // optional
		    	});
		  	});
		</script>
	</body>
</html>
