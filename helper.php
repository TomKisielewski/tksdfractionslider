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

abstract class mod_tksdfractionsliderHelper{
	
	public static function getImages(&$params){	
	$imgsAndCaps = array(); 
	$i = 1;
	while($i < 10):
	
	if($params->get('image'.$i)){
		$step= $i;
		$sliderImage=JURI::root().$params->get('image'.$i);
		$imageAlt=$params->get('image'.$i.'alt');
		$captionOne=$params->get('image'.$i.'cap'.($i));
		$captionOneBGcolor=$params->get('image'.$i.'cap'.($i).'BackgroundColor');
		$captionOneAnimation=$params->get('image'.$i.'cap'.($i).'dataEaseIn'.($i));
		$captionOnePosX=$params->get('image'.$i.'cap'.($i).'dataPositionX'.($i));
		$captionOnePosY=$params->get('image'.$i.'cap'.($i).'dataPositionY'.($i));
		$captionOneDataIn1=$params->get('image'.$i.'cap'.($i).'dataIn'.($i));
		$captionOneDataOut1=$params->get('image'.$i.'cap'.($i).'dataOut'.($i));
		$captionTwo=$params->get('image'.$i.'cap'.($i+1));
		$captionTwoBGcolor=$params->get('image'.$i.'cap'.($i+1).'BackgroundColor');
		$captionTwoAnimation=$params->get('image'.$i.'cap'.($i+1).'dataEaseIn'.($i+1));
		$captionTwoPosX=$params->get('image'.$i.'cap'.($i+1).'dataPositionX'.($i+1));
		$captionTwoPosY=$params->get('image'.$i.'cap'.($i+1).'dataPositionY'.($i+1));
		$captionTwoDataIn2=$params->get('image'.$i.'cap'.($i+1).'dataIn'.($i+1));
		$captionTwoDataOut2=$params->get('image'.$i.'cap'.($i+1).'dataOut'.($i+1));
		$captionThree=$params->get('image'.$i.'cap'.($i+2));
		$captionThreeBGcolor=$params->get('image'.$i.'cap'.($i+2).'BackgroundColor');
		$captionThreeAnimation=$params->get('image'.$i.'cap'.($i+2).'dataEaseIn'.($i+2));
		$captionThreePosX=$params->get('image'.$i.'cap'.($i+2).'dataPositionX'.($i+2));
		$captionThreePosY=$params->get('image'.$i.'cap'.($i+2).'dataPositionY'.($i+2));
		$captionThreeDataIn3=$params->get('image'.$i.'cap'.($i+2).'dataIn'.($i+2));
		$captionThreeDataOut3=$params->get('image'.$i.'cap'.($i+2).'dataOut'.($i+2));


		$imgsAndCaps[$i]=array(
			"image"=>$sliderImage,
			"imageAlt"=>$imageAlt,
			"caption1"=>$captionOne,
			"caption1BackgroundColor"=>$captionOneBGcolor,
			"caption1Animation"=>$captionOneAnimation,
			"captionPositionX1"=>$captionOnePosX,
			"captionPositionY1"=>$captionOnePosY,
			"caption1DataIn1"=>$captionOneDataIn1,
			"caption1DataOut1"=>$captionOneDataOut1,
			"caption2"=>$captionTwo,
			"caption2BackgroundColor"=>$captionTwoBGcolor,
			"caption2Animation"=>$captionTwoAnimation,
			"captionPositionX2"=>$captionTwoPosX,
			"captionPositionY2"=>$captionTwoPosY,
			"caption2DataIn2"=>$captionTwoDataIn2,
			"caption2DataOut2"=>$captionTwoDataOut2,
			"caption3"=>$captionThree,
			"caption3BackgroundColor"=>$captionThreeBGcolor,
			"caption3Animation"=>$captionThreeAnimation,
			"captionPositionX3"=>$captionThreePosX,
			"captionPositionY3"=>$captionThreePosY,
			"caption3DataIn3"=>$captionThreeDataIn3,
			"caption3DataOut3"=>$captionThreeDataOut3,
		);          
	} 	
	$i++;		
	endwhile;		
	return $imgsAndCaps;   		
	}		

	public static function load_jquery(&$params){   
		if($params->get('load_jquery')){
			JLoader::import( 'joomla.version' );
			$version = new JVersion();
			if (version_compare( $version->RELEASE, '2.5', '<=')) {
					$doc = &JFactory::getDocument();
					$app = &JFactory::getApplication();
					$file=JURI::root(true).'/modules/mod_tksdfractionslider/assets/js/jquery-1.9.0.min.js';
					$file2=JURI::root(true).'/modules/mod_tksdfractionslider/assets/js/noconflict.js';
					$doc->addScript($file);
					$doc->addScript($file2);
			} else {
				JHtml::_('jquery.framework');
			}	
		}					
	}	
}		
