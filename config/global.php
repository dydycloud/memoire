<?php 
// Adaptez bien sûr le DSN à votre cas
define('CFG_DB_DSN', 'mysql://bemonkey_root:epicure97@localhost/bemonkey_lire2');

define('LIB_DIR',  dirname(__FILE__).'/../lib/');
define('CFG_DIR',  dirname(__FILE__).'/');
define('WEB_DIR',  dirname(__FILE__).'/../web/');
define('HTML_DIR', dirname(__FILE__).'/../web//views/');

require_once(LIB_DIR.'vendor/doctrine/Doctrine.php');
spl_autoload_register(array('Doctrine_Core', 'autoload'));
spl_autoload_register(array('Doctrine_Core', 'modelsAutoload'));

$manager = Doctrine_Manager::getInstance();
$conn = Doctrine_Manager::connection(CFG_DB_DSN);

$manager->setAttribute(Doctrine_Core::ATTR_VALIDATE,               
						Doctrine_Core::VALIDATE_ALL);

$manager->setAttribute(Doctrine_Core::ATTR_AUTO_ACCESSOR_OVERRIDE, true);

$manager->setAttribute(Doctrine_Core::ATTR_AUTOLOAD_TABLE_CLASSES, true);

$manager->setAttribute(Doctrine_Core::ATTR_MODEL_LOADING,          
						Doctrine_Core::MODEL_LOADING_CONSERVATIVE);

Doctrine_Core::loadModels(LIB_DIR.'models/');

