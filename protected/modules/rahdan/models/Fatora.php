<?php

class Fatora extends CActiveRecord
{
	public function tableName()
	{
		return 'rahdan.fatora';
	}
	
	public function attributeLabels()
	{
		return array(
			'fatoraid'            => 'Fatora ID',
			'partno' => 'Part No.',
			'qty'      => 'QTY',
			'date'       => 'Date',
			'salesman'       => 'Salesman',
			'remarks'       => 'Remarks',
			'status'       => 'Status',
		);
	}

	public function rules()
	{
		return array(			
			array('partno, qty, date, salesman, status', 'required'),
			array('qty', 'numerical'),
		);
	}

	public function getAccounts()
    { 
    	var_dump(CHtml::listData(Fatora::model()->findAll(), 'salesman', 'date')); exit;
    	return CHtml::listData(Fatora::model()->findAll(), 'salesman', 'date');
    }

    public function getSalesmanOptions()
    {
        return array(
            'moshin' => 'Moshin',
            'salim' => 'Salim',
            'alex' => 'Alex',
            'taha' => 'Taha',
            'admin' => 'Admin',
        );
    }
    
    public function getFatoraOptions()
    {
        return array(
        	'unfinished' => 'Unfinished',
            'finished' => 'Finished',            
        );
    }

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}