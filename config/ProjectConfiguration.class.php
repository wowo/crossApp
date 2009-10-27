<?php

require_once '/usr/share/php/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enableAllPluginsExcept(array('sfDoctrinePlugin', 'sfCompat10Plugin'));
    sfConfig::set('mod_mails_partial_view_class', 'CrossApp');
    sfConfig::set('mod_mails_partials_app', 'backend');
  }
}
