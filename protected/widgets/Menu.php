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

        foreach (Yii::app()->modules as $key => $value) {

            $module = Yii::app()->getModule($key);

            $items_sub = array();
            
            foreach ($this->tabs($module) as $key => $tab_v) {
                
                $items_sub[] = array(
                    'label' => '<i class="'.$tab_v->getTabIcon().'"></i> '.$tab_v->getTabName(), 
                    'url'   =>  array('/'.$tab_v->getTabLink()),
                    'itemOptions' => array('class' => $this->isActive($tab_v->getTabLink(), true))
                );
            }

            $items[] = array(
                'label'       =>   '<i class="'.$module->getModuleIcon().'"></i> <span>'.$module->getModuleName().'</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>',
                'url'         => array('#'),                        
                'items' => $items_sub,
                'itemOptions' => array('class' => 'treeview '.$this->isActive($module->getModuleLink()))
            );
        }
        
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

    private function tabs($module) 
    {
        $path = $module->getControllerPath();
        
        Yii::import('application.modules.'.$module->id.'.controllers.*');

        $files = scandir($path);
        $tabs  = array();

        foreach($files as $f) {
            if($f == '.' OR $f == '..')    continue;
            if(!file_exists($path.'/'.$f)) continue;
            if(is_dir($path.'/'.$f))       continue;
            
            $cls = basename($f, ".php");
            $obj = new $cls(strtolower($cls));
            
            if(!is_subclass_of($obj, 'Controller')) continue;

            $id = $obj -> getTabOrdering();

            $tabs[$id] = $obj;
        }

        ksort($tabs);

        return $tabs;
    }
}