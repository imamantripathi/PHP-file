<?php
$text="This is the 121 2443array of $ @ + _ 34 dd jekhew aaKbb PHP php web K. Next this
line lorem insnsn asekwae wae
is a part of the rest of the array with nos 874 398 17219 and special characters # #$&) ( ";
$exp=preg_match_all("/WAE/i",$text,$arr);
//$exp=preg_match_all("/WAP|web|the|of/i",$text,$arr);
//$exp=preg_match_all("/[2-6a-w]/i",$text,$arr);
//$exp=preg_match_all("/s|o|a|e|/i",$text,$arr);
//$exp=preg_match_all("/[wae]/i",$text,$arr);
//$exp=preg_match_all("/[^php]/i",$text,$arr);
//$exp=preg_match_all("/\W/i",$text,$arr);
//$exp=preg_match_all("/\w/i",$text,$arr);
//$exp=preg_match_all("/\s/i",$text,$arr);
//$exp=preg_match_all("/\S/i",$text,$arr);
//$exp=preg_match_all("/.ar/i",$text,$arr);
//$exp=preg_match_all("/ar./i",$text,$arr);
if($exp)
{
echo"Match found";
}
else
{
echo"Match not found";
}
echo"<pre>";
print_r($arr);
echo"</pre>";
//echo $arr[0][1];
?>
