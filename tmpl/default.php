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

?>
<div class="slider">
  <div class="fraction-slider">
  <div class="fs_loader"></div>
  	<?php
  	foreach($listofimages as $key => $value){?>
        <div class="slide" data-in="fade">
       <?php if(isset($listofimages[$key]["caption1"])){?>
        <p class="teaser small" style="background-color:<?php echo $listofimages[$key]["caption1BackgroundColor"];?>; width:20% !important;" data-position="<?php echo $listofimages[$key]["captionPositionX1"];?> ,<?php echo $listofimages[$key]["captionPositionY1"];?>" data-in="<?php echo $listofimages[$key]["caption1DataIn1"]; ?>" data-out="<?php echo $listofimages[$key]["caption1DataOut1"]; ?>" data-step="1" data-ease-in="<?php echo $listofimages[$key]["caption1Animation"];?>" data-delay="500"><?php echo $listofimages[$key]["caption1"]; ?> </p><?php } ?>   
        <?php if(isset($listofimages[$key]["caption2"])){?>
        <p class="teaser small" style="background-color:<?php echo $listofimages[$key]["caption2BackgroundColor"];?>; width:23% !important;"data-position="<?php echo $listofimages[$key]["captionPositionX2"];?> ,<?php echo $listofimages[$key]["captionPositionY2"];?>" data-in="<?php echo $listofimages[$key]["caption2DataIn2"]; ?>" data-out="<?php echo $listofimages[$key]["caption2DataOut2"]; ?>" data-step="2"  data-ease-in="<?php echo $listofimages[$key]["caption2Animation"];?>" data-delay="1500" ><?php echo $listofimages[$key]["caption2"]; ?></p><?php } ?>      
        <?php if(isset($listofimages[$key]["caption3"])){?>
        <p class="teaser small" style="background-color:<?php echo $listofimages[$key]["caption3BackgroundColor"];?>; width:25% !important;"data-position="<?php echo $listofimages[$key]["captionPositionX3"];?> ,<?php echo $listofimages[$key]["captionPositionY3"];?>" data-in="<?php echo $listofimages[$key]["caption3DataIn3"]; ?>" data-out="<?php echo $listofimages[$key]["caption3DataOut3"]; ?>" data-step="2" data-ease-in="<?php echo $listofimages[$key]["caption3Animation"];?>" data-delay="2500"><?php echo $listofimages[$key]["caption3"]; ?></p><?php } ?>              
        <img class="tkimg" data-fixed src="<?php echo $listofimages[$key]["image"];?>" width="100%" height="100%" alt="<?php echo $listofimages[$key]["imageAlt"];?>"></img>     
        </div>
  		<?php
      }
  	?> 
 
  </div> 
</div>

<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
  jQuery('.slider').fractionSlider({
    <?php if($params->get('fullWidth') == 0){?> 'fullWidth': false, <?php } else if ($params->get('fullWidth') == 1){ ?> 'fullWidth': true, <?php } ?>
    <?php if($params->get('controls') == 0){?> 'controls': false, <?php } else if ($params->get('controls') == 1){ ?> 'controls': true, <?php } ?>
    <?php if($params->get('responsive') == 0){?> 'responsive': false, <?php } else if ($params->get('responsive') == 1){ ?> 'responsive': true, <?php } ?>
    <?php if($params->get('pauseOnHover') == 0){?> 'pauseOnHover': false, <?php } else if ($params->get('pauseOnHover') == 1){ ?> 'pauseOnHover': true, <?php } ?>
    <?php if($params->get('backgroundAnimation') == 0){?> 'backgroundAnimation': false, <?php } else if ($params->get('backgroundAnimation') == 1){ ?> 'backgroundAnimation': true, <?php } ?>
    <?php if($params->get('increase') == 0){?> 'increase': false, <?php } else if ($params->get('increase') == 1){ ?> 'increase': true, <?php } ?>
    <?php if($params->get('pager') == 0){?> 'pager': false, <?php } else if ($params->get('pager') == 1){ ?> 'pager': true, <?php } ?>
    'dimensions':"<?php echo $params->get('dimension1')?> ,<?php echo $params->get('dimension2')?>",
    'slideTransitionSpeed':<?php echo $params->get('slideTransitionSpeed')?>,
         
		
    
	});
  
  

  });
</script>
