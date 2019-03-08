<?php
//对get数据初始化
function _get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}
//判断验证key是否存在
if(file_exists("../key.php")==0){
$installkeyfile = fopen("../key.php", "w");
fwrite($installkeyfile, "<?php \$key = '".md5(uniqid(microtime(true),true))."'; \\\\Install key ?>");
fclose($installkeyfile);
}
//获得安装进度
$bar=_get("bar"); 
if($bar==0){
	require 'install_1.html';
}
else if($bar==1){
require '../key.php';
	if(_get("key")==$key){
		echo "key!";
	}
}

?>
