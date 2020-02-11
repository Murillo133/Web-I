<?php 


/**
 * 
 */
class Util
{
	


	/**
	*Limpia los datos de entrada
	*/
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	/**
	* 
	*/
	function are_words($words){
		return preg_match("/^[a-zA-Z ]*$/",$words);
	}


	/**
	* 
	*/
	function is_integer($number){
		try {
			$numb = (int)$number;
			if(is_integer($numb)){
				return (strlen($numb) >= 9) ? $numb: null;
			}

		} catch (Exception $e) {
			return null;

		}
		
	}

	/**
	* 
	*/
	function is_email($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
	/**
	* 
	*/
	function just_webSite($website){
		return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website);
	}

}

?>