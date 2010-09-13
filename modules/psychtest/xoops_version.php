<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 xoops.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //

$modversion['name']		    	= 'Psychology Test Object';
$modversion['version']			= 1.12;
$modversion['releasedate'] 		= "Tue: 11 July 2010";
$modversion['status'] 			= "Stable";
$modversion['author'] 			= "Chronolabs Australia";
$modversion['credits'] 			= "Simon Roberts";
$modversion['teammembers'] 		= "Wishcraft";
$modversion['license'] 			= "GPL";
$modversion['official'] 		= 1;
$modversion['description']		= 'Psytest will generate a form object with an ink blotter with base64 JPG and prompt for what they think the blotter means.';
$modversion['help']		    	= "";
$modversion['image']			= "images/psychtest_slogo.png";
$modversion['dirname']			= 'psychtest';

$modversion['author_realname'] = "Simon Roberts";
$modversion['author_website_url'] = "http://www.chronolabs.coop";
$modversion['author_website_name'] = "Chronolabs Co-Operative";
$modversion['author_email'] = "simon@chronolabs.coop";
$modversion['demo_site_url'] = "";
$modversion['demo_site_name'] = "";
$modversion['support_site_url'] = "http://www.chronolabs.org.au/forums/psytest/";
$modversion['support_site_name'] = "x-Soap";
$modversion['submit_bug'] = "http://www.chronolabs.org.au/forums/psytest/";
$modversion['submit_feature'] = "http://www.chronolabs.org.au/psytest/";
$modversion['usenet_group'] = "sci.chronolabs";
$modversion['maillist_announcements'] = "";
$modversion['maillist_bugs'] = "";
$modversion['maillist_features'] = "";

// Admin things
$modversion['hasAdmin']		= 0;

// Search
$modversion['hasSearch'] = 0;

// Menu
$modversion['hasMain'] = 0;

// Smarty
$modversion['use_smarty'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'blobs';
$modversion['config'][$i]['title'] = '_XS_BLOBS';
$modversion['config'][$i]['description'] = '_XS_BLOBS_DESC';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 49;


$i++;
$modversion['config'][$i]['name'] = 'width';
$modversion['config'][$i]['title'] = '_XS_WIDTH';
$modversion['config'][$i]['description'] = '_XS_WIDTH_DESC';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 650;

$i++;
$modversion['config'][$i]['name'] = 'height';
$modversion['config'][$i]['title'] = '_XS_HEIGHT';
$modversion['config'][$i]['description'] = '_XS_HEIGHT_DESC';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 450;

$i++;
$modversion['config'][$i]['name'] = 'base_trans';
$modversion['config'][$i]['title'] = '_XS_BASETRANSPARENCY';
$modversion['config'][$i]['description'] = '_XS_BASETRANSPARENCY_DESC';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 35;

$i++;
$modversion['config'][$i]['name'] = 'upper_trans';
$modversion['config'][$i]['title'] = '_XS_UPPERTRANSPARENCY';
$modversion['config'][$i]['description'] = '_XS_UPPERTRANSPARENCY_DESC';
$modversion['config'][$i]['formtype'] = 'text';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 90;

?>
