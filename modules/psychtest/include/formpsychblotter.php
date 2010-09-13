<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Form Class Elements
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/  
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      form
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: formlabel.php 3295 2009-07-01 02:26:05Z beckmi $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * A text label
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormPsychBlotter extends XoopsFormElement
{
    /**
     * Text
     *
     * @var string
     * @access private
     */
    var $_value;
    
    /**
     * Constructor
     *
     * @param string $caption Caption
     * @param string $value Text
     */
    function XoopsFormPsychBlotter($caption = '', $name = '')
    {
        $this->setCaption($caption);
        $this->setName($name);
		
		$config_handler =& xoops_gethandler('config');
		$module_handler =& xoops_gethandler('module');
		$xoModule = $module_handler->getByDirname('objects');
		$modid = $xoModule->getVar('mid');
		$xoConfig = $config_handler->getConfigList($modid, 0);
		
		if (!isset($GLOBALS['passkey']))
			$GLOBALS['passkey'] = md5(XOOPS_LICENSE_KEY.date('Ymdhi'));
		
        $this->_value = '<img id="blotterimg_'.$name.'" class="blotterimg_'.$name.'" src="'.XOOPS_URL.'/modules/psychtest/blotter.php?width='.$xoConfig['width'].'&height='.$xoConfig['height'].'&passkey='.$GLOBALS['passkey'].'" />';
    }
    
    /**
     * Get the "value" attribute
     *
     * @param bool $encode To sanitizer the text?
     * @return string
     */
    function getValue($encode = false)
    {
        return $encode ? htmlspecialchars($this->_value, ENT_QUOTES) : $this->_value;
    }
    
    /**
     * Prepare HTML for output
     *
     * @return string
     */
    function render()
    {
        return $this->getValue();
    }
}

?>