<?php
/*
OHSCE_V0.1.22_B
�߿ɿ��Ե�PHPͨ�ſ�ܡ�
HTTP://WWW.OHSCE.ORG
@����:������ 393562235@QQ.COM
���߱���ȫ��Ȩ������������ȨЭ��ʹ�á�
*/
function bts_bas_valueref($arr){ 
        $refs = array(); 
        foreach($arr as $key => $value) 
        $refs[$key] = &$arr[$key]; 
        return $refs; 

    }
function bts_bas_array2bin($arr){
	$res="";
	foreach($arr as $arrp){
		$nhex=dechex(intval($arrp));
		if(strlen($nhex)<2){
			$nhex='0'.$nhex;
		}
		$res .= hex2bin($arrp);
	}
	return $res;
}
function bts_bas_array2bind($arr){
	$res="";
	foreach($arr as $arrp){
		$nhex=dechex(intval($arrp));
		if(strlen($nhex)<2){
			$nhex='0'.$nhex;
		}
		$res .= hex2bin($nhex);
	}
	return $res;
}
function bts_is_json($str){  
    if(is_null(trim(json_decode($str)))){
		return false;
	}else{
		return true;
	}
}