<script src="/demo/js/clearbox.js" type="text/javascript"></script> 
<a href="/demo/upload/honor/2006/1290577931.jpg" rel="clearbox" title="Caption">clearbox</a> 
<div id="myslidemenu" class="jqueryslidemenu">
<!-- <div id="mainmenu"> -->
<?php $this->widget('zii.widgets.CMenu',array(
   'items'=>array(
      array('label'=>'Home', 'url'=>array('/site/index')),
      array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
      array('label'=>'Contact', 'url'=>array('/site/contact')),
      array('label'=>'jqSlideMenuTest', 'url'=>array('#'), 
        'items'=>array(
           array('label'=>'Home', 'url'=>array('/site/index')),
           array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
           array('label'=>'Contact', 'url'=>array('/site/contact'), 
              'items'=>array(
                  array('label'=>'Home', 'url'=>array('/site/index')),
                  array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                  array('label'=>'Contact', 'url'=>array('/site/contact'),
                      'items'=>array(
                          array('label'=>'Home', 'url'=>array('/site/index')),
                          array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                          array('label'=>'Contact', 'url'=>array('/site/contact')),
                       )),
                  )),
              )),   
       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)),
     )); ?>
<br style="clear: left" />
</div><!-- mainmenu -->

