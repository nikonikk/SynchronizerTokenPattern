<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
		
		
        echo " Token: $sessionIdentifier ";
		
		$myfile = fopen("Tokens.txt", "r") or die("Unable to open file!");
		list($tok,$sid) = explode(",",chop(fgets($myfile)),2); // chop() is a must because fgets() returns new line character
		fclose($myfile);
		if($tok == $token){
			if($sessionIdentifier == $sid ) {
		       return true;
			}
		}
	}
}
?>