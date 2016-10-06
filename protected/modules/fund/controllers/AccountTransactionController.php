<?php

class AccountTransactionController extends Controller
{   
    public function actions()
    {
       return array(
        'index' => 'application.modules.fund.controllers.accounttransaction.index',
        'create' => 'application.modules.fund.controllers.accounttransaction.create',
        'update' => 'application.modules.fund.controllers.accounttransaction.update',
       );
    }

    public function lists()
    {
    	$result = array();
    	$bal    = 0;
    	
    	$lists = AccountTransaction::model()->findAll(array(
            'order' => 'date'
        ));
		
    	foreach ($lists as $k => $v) {
    		
    		$bal = $k == 0 ? ($v->is_in ? $v->amount : $bal - $v->amount) : ($v->is_in ? $bal + $v->amount : $bal - $v->amount); 
    		
    		$result[] = array(
    			'obj' => $v,
    			'bal' => $bal,
    		);
    	}

    	return $result;
    }

    public function _setGrowler($title, $message, $css)
    {
        $growler = array(
            'title'   => $title,
            'message' => $message,
            'css'     => $css,
        );

        Yii::app()->user->setFlash('growler', $growler);
    }

    public function getTabOrdering()
    {
    	return 1;
    }

	public function getTabName()
	{
		return 'Account Transactions';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'fund/accounttransaction/index';
	}
}