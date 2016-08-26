<?php

class Menu extends CWidget
{
	public function run()
	{
		$this->render('menu');
	}

	public function getItems()
	{
		$items = array();

		$items[] = array(
            'label'       => 'NAVIGATION', 
            'itemOptions' => array(
                'class' => 'header'
            ),
        );

        $items[] = array(
            'label'       =>   '<i class="fa fa-dashboard"></i> <span>Dashboard</span>',
            'url'         => array('/site/index'),                                                
            'itemOptions' => array('class' => 'treeview '.$this->isActive('dashboard'))
        );

        $items[] = array(
            'label'       =>   '<i class="fa fa-wifi"></i> <span>Wifi</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>',
            'url'         => array('#'),                        
            'items' => array(
                array(
                    'label' => '<i class="fa fa-circle-o"></i> Wifi Users', 
                    'url'   => array('/wifi/user/index'),                                
                    'itemOptions' => array('class' => ''.$this->isActive('wifi/user/index', true)),
                ),
                array(
                    'label' => '<i class="fa fa-circle-o"></i> Mac Address', 
                    'url'   =>  array('/wifi/mac_address/index'),
                    'itemOptions' => array('class' => ''.$this->isActive('wifi/mac_address/index', true)),
                )
            ),
            'itemOptions' => array('class' => 'treeview '.$this->isActive('wifi'))
        );

        $items[] = array(
            'label'       =>   '<i class="fa fa-gear"></i> <span>Setup</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>',
            'url'         => array('#'),
            'items' => array(
                array(
                    'label' => '<i class="fa fa-circle-o"></i> System Users', 
                    'url'   => array('/setup/user/index'),                                
                    'itemOptions' => array('class' => ''.$this->isActive('setup/user/index', true)),
                ),
                array(
                    'label' => '<i class="fa fa-circle-o"></i> Religions', 
                    'url'   =>  array('/setup/religion/index'),
                    'itemOptions' => array('class' => ''.$this->isActive('setup/religion/index', true)),
                )
            ),
            'itemOptions' => array('class' => 'treeview '.$this->isActive('setup'))
        );
		
		return $items;
	}

	private function getOtherItems()
	{
		$items = array(

		);
	}

	private function isActive($linkpath, $isSubLink = false)
	{
		if($isSubLink) {

			$pathinfo = Yii::app()->request->pathInfo;

			$str = $pathinfo == $linkpath ? 'active' : '';

		} else {

			$mod_id = '';

			if(isset(Yii::app()->controller->module->id)) {

				$mod_id = Yii::app()->controller->module->id;	
			}			

			$str = $mod_id == $linkpath ? 'active' : '';
		}

		return $str;
	}
}