<?php

class User extends CActiveRecord
{
	public function tableName()
	{
		return 'setup.user';
	}

	public function rules()
	{
		return array(			
			array('username, account_description, email_personal, record_status', 'required'),
			array('password_expire', 'required', 'on' => 'update'),
			array('email_personal', 'email'),
			array('email_personal, username', 'unique'),
            array('record_status', 'default', 'value' => 'A'),	            
		);
	}

	public function attributeLabels()
	{
		return array(
			'username'            => 'Username',
			'account_description' => 'Full Name',
			'email_personal'      => 'Email Address',
			'record_status'       => 'Status',
		);
	}

	public function getStatusOptions()
    {
        return array(
            'A' => 'Active',
            'I' => 'InActive',
        );
    }

    public function beforeSave() {

	    if ($this->isNewRecord) {

	    	$this->password = CPasswordHelper::hashPassword('password');

	    	$time  = strtotime(Date('Y-m-d'));
			$final = date("Y-m-d", strtotime("+3 months", $time));

	    	$this->password_expire = $final;

	    } else {

	    	$this->password_expire = date('Y-m-d', strtotime($this->password_expire));
	    	
	    }
	        
	    return parent::beforeSave();
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}

