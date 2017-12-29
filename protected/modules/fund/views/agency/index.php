<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $title ?>
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Start here -->
    <? if(Yii::app()->user->hasFlash('growler')): ?>
        <? $growler = Yii::app()->user->getFlash('growler'); ?>
        <div class="alert alert-<?= $growler['css'] ?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> <?= $growler['title'] ?></h4>
            <?= $growler['message'] ?>
        </div>
    <? endif ?>
    <div class="box">
        <div class="box-header">
            <a href="<?= Url::l('fund/agency/create'); ?>" class="btn btn-primary pull-right">Add Agency</a>
            <h3 class="box-title"> </h3>
        </div>        
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?= $model_common->getAttributeLabel('name') ?></th>
                        <th><?= $model_common->getAttributeLabel('address') ?></th>
                        <th><?= $model_common->getAttributeLabel('contact_num') ?></th>
                        <th><?= $model_common->getAttributeLabel('contact_person') ?></th>
                        <th><?= $model_common->getAttributeLabel('email') ?></th>
                        <th><?= $model_common->getAttributeLabel('website') ?></th>
                        <th><?= $model_common->getAttributeLabel('date_expiry') ?></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach($lists as $key => $obj): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $obj->name ?></td>
                            <td><?= $obj->address ?></td>
                            <td><?= $obj->contact_num ?></td>
                            <td><?= $obj->contact_person ?></td>
                            <td><?= $obj->email ?></td>
                            <td><?= $obj->website ?></td>
                            <td><?= date('M d, Y', strtotime($obj->date_expiry)) ?></td>
                            <td>
                                <a href="<?= Url::l('fund/agency/update/id/'.$obj->id) ?>" class="tooltips action-update" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            </td>
                        </tr>
                    <? endforeach ?>              
                </tbody>
            </table>
        </div>
    </div>
</section>
<? if(isset($model)): ?>
    <div class="modal" id="modal-user" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title"><?= $model->isNewRecord ? 'Create ' : 'Update ' ?>Agency</h3>
                    </div>                    
                    <? $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'add-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                            'class' => 'form-horizontal',
                        ),
                    )); ?>
                        <div class="box-body">
                            <?= $form->errorSummary($model, '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Alert!</h4>', null, array('class' => 'alert alert-danger alert-dismissible')); ?>
                            <div class="form-group">
                                <? $attribute = 'name' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->textField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'address' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->textField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'contact_num' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->textField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'contact_person' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->textField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'email' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->emailField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'website' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                        
                                    <?= $form->textField($model, $attribute, array('class' => 'form-control', 'id' => $attribute)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <? $attribute = 'date_expiry' ?>
                                <?= $form->label($model, $attribute, array('class' => 'col-sm-4 control-label', 'for' => $attribute)); ?>    
                                <div class="col-sm-8">                                                            
                                    <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input name="Agency[<?= $attribute ?>]" value="<?= isset($model->$attribute) ? date('m/d/Y', strtotime($model->$attribute)) : date('m/d/Y') ?>" type="text" class="form-control pull-right datepicker-basic">
                                    </div>
                                </div>
                            </div>     
                        </div>                        
                        <div class="box-footer">
                            <?= CHtml::submitButton('Cancel', array('data-dismiss' => 'modal', 'class' => 'btn btn-default')); ?>
                            <?= CHtml::submitButton(($model->isNewRecord ? 'Submit' : 'Update'), array('class' => 'btn btn-primary pull-right')); ?>
                        </div>                      
                    <? $this->endWidget(); ?>                        
                </div>         
            </div>
        </div>  
    </div>
<? endif ?>
<script type="text/javascript">
    function my_init()
    {
        $("#example1").DataTable();

        $(".select-search").select2();

        if ("<?= isset($model) ? true : false; ?>") {
            $('#modal-user').modal();
        }

        $('.action-delete').click(function() {
            if (!confirm('Are you sure you want to Delete this record?'))
                return false;
        });

        $('.action-reset-password').click(function() {
            if (!confirm('Are you sure you want to Reset the password of this record?'))
                return false;
        });

        if ($('#is_in').val() == 0) {
            $("#is_payable_container").show();
        } else {
            $("#is_payable_container").hide();
        }

        if ($('#is_payable').val() == 0) {
            $("#is_paid_container").hide();
        } else {
            $("#is_paid_container").show();
        }

        $('#is_in').on('change', function() {
            if ( this.value == '0') {
                $("#is_payable_container").show();
            } else {
                $("#is_payable_container").hide();
                $("#is_paid_container").hide();
            }
        });

        $('#is_payable').on('change', function() {
            if ( this.value == '1') {
                $("#is_paid_container").show();
            } else {
                $("#is_paid_container").hide();
            }
        });
    }  
</script>