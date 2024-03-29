<?php
/**
 * @package TKSD Fraction slider for Joomla 3+
 * @version 1.0.0
 * @author Tomasz Kisielewski
 * @copyright (C) 2014- tkstudiodesign
 * @website http://www.tkstudiodesign.com 
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
**/

defined('_JEXEC') or die;
//add stylesheet
$doc =& JFactory::getDocument();
require_once(dirname(__FILE__).'/helper.php');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$listofimages = mod_tksdfractionsliderHelper::getImages($params);
mod_tksdfractionsliderHelper::load_jquery($params);
$doc->addStyleSheet(JURI::base(true) . '/modules/mod_tksdfractionslider/assets/css/fractionslider.css', 'text/css' );
$doc->addStyleSheet(JURI::base(true) . '/modules/mod_tksdfractionslider/assets/css/style.css', 'text/css' );
$doc->addScript(JURI::base(true) . '/modules/mod_tksdfractionslider/assets/js/jquery.fractionslider.js');
require(JModuleHelper::getLayoutPath('mod_tksdfractionslider'));
