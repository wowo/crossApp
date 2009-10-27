<?php

/**
 * CrossAppPartialView - extends sfPartialView and provides ability to use partials from another application in same project
 * 
 * @uses sfPartialView
 * @package default
 * @author Wojciech Sznapka <wojciech@sznapka.pl> 
 */
class CrossAppPartialView extends sfPartialView
{
  /**
   * overrides setDirectory to change app in a partial path
   * 
   * @param mixed $directory 
   * @access public
   * @return void
   */
  public function setDirectory($directory)
  {  
    if ($app = sfConfig::get(sprintf('mod_%s_partials_app', $this->getModuleName()))) {
      $directory = sprintf('%s/apps/%s/modules/%s/templates', sfConfig::get('sf_root_dir'), $app, $this->getModuleName());
    }  
    parent::setDirectory($directory);
  }  
}
