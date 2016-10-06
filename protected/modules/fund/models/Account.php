<?php

class Account extends CActiveRecord
{
	public function tableName()
	{
		return 'fund.account';
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}