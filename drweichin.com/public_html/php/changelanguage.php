<?php
function getUrl() {
  $url  = @( $_SERVER["HTTP"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

if ($isEnglish == True){
	//if website is english add /cn at the last / to go to chinese
	$cnRoot = substr(getUrl(),0,strrpos(getUrl(), "/", -1));
	$cnSpecific = substr(getUrl(),strrpos(getUrl(),"/",-1));
	$cnSite = $cnRoot."/cn".$cnSpecific;
	echo "<a href =\"$cnSite\">";
	echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored\">";
	echo "<img src = \"images/zhongwen1.png\" height = \"100%\" width = \"100%\">";
	echo "</button>";
	echo "</a>";
} elseif ($isEnglish == False){ 
	//if website is chinese remove /cn to return to english
	$enRoot = substr(getUrl(),0,strrpos(getUrl(),"/cn/",-1));
	$enSpecific = substr(getUrl(),strrpos(getUrl(),"/cn/")+3);
	$enSite = $enRoot.$enSpecific;
	echo "<a href =\"$enSite\">";
	echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored\">";
	
	echo "<img src = \"images/zhongwen1.png\" height = \"100%\" width = \"100%\">";
	
	echo "</button>";
	echo "</a>";
}
?>
