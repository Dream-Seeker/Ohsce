<?php
/*
OHSCE_V0.1.24_B
�߿ɿ��Ե�PHPͨ�ſ�ܡ�
HTTP://WWW.OHSCE.ORG
@����:������ 393562235@QQ.COM
���߱���ȫ��Ȩ������������ȨЭ��ʹ�á�
���ļ���ֹ����!������ܻ��޷����У�
*/
error_reporting(E_ALL);
if(!defined('IN_OHSCE')){
define('IN_OHSCE', TRUE);
}
if(file_exists('./config/oibc_sce_config.php')){
define('OHSCE_ROOTDIR',dirname(__FILE__));
}elseif(file_exists('./Ohsce/config/oibc_sce_config.php')){
define('OHSCE_ROOTDIR','/Ohsce/'.dirname(__FILE__));
}elseif(file_exists('./OHSCE/config/oibc_sce_config.php')){
define('OHSCE_ROOTDIR','/OHSCE/'.dirname(__FILE__));
}else{
	exit('Can not find Ohsce or OHSCE!');
	sleep(30);
}
define('OIBC_VERSON','0.1.24_beta');
include(OHSCE_ROOTDIR.'/config/oibc_sce_config.php');
include(OHSCE_ROOTDIR.'/config/oibc_drive_config.php');
include(OHSCE_ROOTDIR.'/lib/bts_little.php');
include(OHSCE_ROOTDIR.'/lib/oibc_sce_fuc.php');
include(OHSCE_ROOTDIR.'/lib/oibc_sce_eng.php');
include(OHSCE_ROOTDIR.'/lib/ohsce_Channel.php');
define('OHSCE_OS',Ohsce_getos($oibc_sce_os));