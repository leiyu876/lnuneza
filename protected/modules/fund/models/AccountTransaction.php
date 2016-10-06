<?php

class AccountTransaction extends CActiveRecord
{
	public function tableName()
	{
		return 'fund.account_transaction';
	}

	public function relations()
    {
        return array(
            'act_involve'=>array(self::BELONGS_TO, 'Account', 'account_involve'),
        );
    }

	public function attributeLabels()
	{
		return array(
			'id'            => 'ID',
			'owner' => 'Account Owner',
			'account_involve'      => 'Transact By',
			'amount'       => 'Amount',
			'date'       => 'Date',
			'description'       => 'Notes',
			'is_in'       => 'Transaction Type',
			'is_payable'       => 'Is Payable',
			'is_paid'       => 'Is Paid',
		);
	}

	public function rules()
	{
		return array(			
			array('date, account_involve, amount, description, is_in', 'required'),
			array('amount', 'numerical'),
			array('is_payable, is_paid', 'boolean'),
			array('owner', 'default', 'value' => 1),	
		);
	}

	public function getAccounts()
    { 
     	return CHtml::listData(Account::model()->findAll(), 'id', 'description');
    }

    public function getIsInOptions()
    {
        return array(
            0 => 'Withdraw',
            1 => 'Deposit',
        );
    }

    public function getIsPayableOptions()
    {
        return array(
            0 => 'No',
            1 => 'Yes',
        );
    }

    public function getIsPaidOptions()
    {
        return array(
            0 => 'No',
            1 => 'Yes',
        );
    }

	public static function Balance()
	{
		return self::sum_is_in(true) - self::sum_is_in(false);  
	}

	private static function sum_is_in($x)
    {
    	$x_str = $x ? 'true' : 'false';

    	$res = Yii::app()->db->createCommand('SELECT sum(amount) FROM fund.account_transaction WHERE is_in = '.$x_str)->queryScalar();

		return $res;
    }

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}