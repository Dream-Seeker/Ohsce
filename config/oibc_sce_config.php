<?php
/*
OHSCE_V0.1.23_B
�߿ɿ��Ե�PHPͨ�ſ�ܡ�
HTTP://WWW.OHSCE.ORG
@����:������ 393562235@QQ.COM
���߱���ȫ��Ȩ������������ȨЭ��ʹ�á�
���ļ���ֹ����!������ܻ��޷����У�
*/
define('OHSCE_MYIP', '127.0.0.1');//����IP��ַ
define('OHSCE_MYIP_SYSTEM', '127.0.0.1');//����IP��ַ��ϵͳ�ڣ�
define('OHSCE_PHPDIR', 'D:\php54\php.exe');//����PHP����·��
define('OHSCE_OLMD_MADDRESS',"20");//OLMD�ڴ���ʼ
define('OHSCE_OLMD_MADDRESSBACKUPS',"10");//OLMD�ڴ���ʼ������
define('OHSCE_OLMD_MADDRESSPORT',"7698");//OLMD�����˿�
define('OHSCE_OLMD_MADDRESSPORTY',"7699");//OLMD�����˿�(�����ȡ)
define('OHSCE_OLMD_MADDRESSPASS',"ohsceolmdpassword"); //OLMDд����Կ������㲻����ά������ǽ����ô������޸���
define('OHSCE_OLMD_MADDRESSPASSY',"password");//����OLMD�����ȡ��Կ������㲻����ά������ǽ����ô������޸���
$OHSCE_PLdir=OHSCE_ROOTDIR.'\PcenterRun\\';//PCENTERֱ��Ŀ¼
$OHSCE_pdefend=OHSCE_ROOTDIR.'\OHSceRun.php -r engine -m pdefend -p';
$OHSCE_pdefend_vbs=OHSCE_ROOTDIR.'\pdefend.vbs';
$OHSCE_pdefendC_vbs=OHSCE_ROOTDIR.'\pdefendC.vbs';
$OHSCE_pdefend_recalltime=5;//�������ػ������������º��м������Ҫ̫С��
//---------------WebApis
$OHSCE_webapi="on";//on-����  off-�ر� WEBAPI
$OHSCE_webapi_safe="on";//on-������֤Token off-����֤Token 
$OHSCE_webapi_token="webapitoken";//Token���ӣ������޸ġ�