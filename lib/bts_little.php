<?php
/*
OHSCE_V0.1.25_B
�߿ɿ��Ե�PHPͨ�ſ�ܡ�
HTTP://WWW.OHSCE.ORG
@����:������ 393562235@QQ.COM
���߱���ȫ��Ȩ������������ȨЭ��ʹ�á�
���ļ���ֹ����!������ܻ��޷����У�
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
    if(is_null(json_decode($str))){
		return false;
	}else{
		return true;
	}
}
function bts_bas_data2hex($data){
	return str_split($data,2);
}
function bts_hex2hex($hex,$len='x'){
	$hlen=strlen($hex);
	if($len=="x"){
		if(($hlen%2)!=0){
			$hex='0'.$hex;
			return $hex;
		}
	}
	$hlenc=($len*2)-$hlen;
	if($hlenc>0){
		    do{
			$hex='0'.$hex;
			$hlenc=$hlenc-1;
		    }while($hlenc>0);
		}
	return $hex;
}