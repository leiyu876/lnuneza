<ul class="sidebar-menu">    
    <?php

        $this->widget('zii.widgets.CMenu', array(
                'items' => $this->items,
                'htmlOptions'        => array('class' => 'sidebar-menu'),
                'submenuHtmlOptions' => array('class' => 'treeview-menu'),
                'encodeLabel'        => false,
                'activeCssClass'     => 'active'
            )
        );
    ?>        
</ul> 
