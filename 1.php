<?php
//单个频道通用php正则模板
$url="https://rmtapi.cbg.cn/list/84871/1.html?pagesize=20";
$qian=file_get_contents($url);
preg_match('/"android_url":"(.*?)"/i',str_replace("\/","/",$qian),$hou);
header("location:".$hou[1]);
?>