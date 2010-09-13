<?php

	require_once $GLOBALS['xoops']->path('modules/psychtest/wideimage/WideImage.php');

	function psychtest_checkpasskey($key) {

		$minseed = strtotime(date('Y-m-d h:i'));
		$diff = intval((intval($GLOBALS['xoopsModuleConfig']['passkeyvalidfor'])/2)*60);
		for($step=($minseed-$diff);$step<($minseed+$diff);$step++)
			if ($key==md5(XOOPS_LICENSE_KEY.date('Ymdhi', $step)))
				return true;
		return false;

	}
	
	function psychtest_blotter($width, $height, $passkey) {

		$savepath = XOOPS_VAR_PATH.'/psychtest_cache';	
		xoops_load('cache');
		xoops_load('xoopslists');
		
		if (!file_exists($savepath.'/'.$passkey.'.png')) {
			return file_get_contents($savepath.'/'.$passkey.'.png');
		} else {
			
			$img = WideImage::createTrueColorImage($width, $height);
	
			$blobs = XoopsLists::getFileListAsArray(XOOPS_ROOT_PATH.'/modules/psychtest/images/blobs/');
			$cursor = array();
			foreach ($blobs as $fid => $blob) 
				if (strtolower(substr($blob, strlen($blob)-3, 3))=='png') 
					$cursor[] = $blob;		
		
			$config_handler =& xoops_gethandler('config');
			$module_handler =& xoops_gethandler('module');
			$xoModule = $module_handler->getByDirname('objects');
			$modid = $xoModule->getVar('mid');
			$xoConfig = $config_handler->getConfigList($modid, 0);
			
			srand((((float)('0' . substr(microtime(), strpos(microtime(), ' ') + 1, strlen(microtime()) - strpos(microtime(), ' ') + 1))) * mt_rand(30, 99999)));
			srand((((float)('0' . substr(microtime(), strpos(microtime(), ' ') + 1, strlen(microtime()) - strpos(microtime(), ' ') + 1))) * mt_rand(30, 99999)));
	
			for($ih=0;$ih<$xoConfig['blobs'];$ih++) {
	
				$watermark = WideImage::load(XOOPS_ROOT_PATH.'/modules/psychtest/images/blobs/'.$cursor[mt_rand(0, sizeof($cursor))]);
				$watermark = $watermark->rotate(mt_rand(1, 359));
				$watermark_width = $watermark->getWidth();
				$watermark_height = $watermark->getHeight();
				$diff_x = mt_rand(0, ($width/2)-($watermark_width/2));
				$diff_y = mt_rand(0, ($height/2)-($watermark_height/2));
				switch(mt_rand(0,3)) {
				case 0:
					$img = $img->merge($watermark, (($width/2)-($watermark_width/2))+$diff_x, ($height/2)-($watermark_height/2)+$diff_y, mt_rand($xoConfig['base_trans'], $xoConfig['upper_trans']));
					break;
				case 1:
					$img = $img->merge($watermark, (($width/2)-($watermark_width/2))-$diff_x, ($height/2)-($watermark_height/2)+$diff_y, mt_rand($xoConfig['base_trans'], $xoConfig['upper_trans']));
					break;				
				case 2:
					$img = $img->merge($watermark, (($width/2)-($watermark_width/2))+$diff_x, ($height/2)-($watermark_height/2)-$diff_y, mt_rand($xoConfig['base_trans'], $xoConfig['upper_trans']));
					break;				
				case 3:
					$img = $img->merge($watermark, (($width/2)-($watermark_width/2))-$diff_x, ($height/2)-($watermark_height/2)-$diff_y, mt_rand($xoConfig['base_trans'], $xoConfig['upper_trans']));
					break;				
				}
			}
	
			$savepath = XOOPS_VAR_PATH.'/psychtest_cache';
			
			if (!is_dir($savepath))
				foreach(explode('/', $savepath) as $folder) {
					$path .= '/' . $folder;
					mkdir($path, 0777);
				}
				
			$img->saveToFile($savepath.'/'.$passkey.'.png', 7, PNG_NO_FILTER);
			return file_get_contents($savepath.'/'.$passkey.'.png');
		}
	}
	
?>