<?php

class Agency extends CActiveRecord
{
	public function tableName()
	{
		return 'fund.agency';
	}

	public function relations()
    {
        return array(
        );
    }

	public function attributeLabels()
	{
		return array(
			'id'            => 'ID',
			'name' => 'Name',
			'address'      => 'Address',
			'contact_num'       => 'Contact #',
			'contact_person'       => 'Contact Person',
			'email'       => 'Email Address',
			'date_expiry'       => 'Expiry Date',
			'website'       => 'Website',
		);
	}

	public function rules()
	{
		return array(			
			array('name, address', 'required'),
			array('email', 'email'),
			array('contact_num, contact_person, date_expiry, website', 'safe'),
		);
	}

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}