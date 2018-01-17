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
    
    public function getFatoraOptions() {

        return array(
        	'unfinished' => 'Unfinished',
            'finished' => 'Finished',
            'return' => 'Return',            
        );
    }

    public function getFormatDate($date) {

    	$date = DateTime::createFromFormat('d/m/Y', $date);
		
		return $date->format('m/d/Y');
	}

	public function getFormatDateDisplay($date) {

		$date = DateTime::createFromFormat('Y-m-d', $date);
		
		return $date->format('d/m/Y');	
	}

	public static function model($className = __CLASS__) {

		return parent::model($className);
	}
}