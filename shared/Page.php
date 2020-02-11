<?php 

class Page
{
	public $pageName;
	public $path;
	public $mainPages;
	public $groupPages;
	
	function __construct()
	{
		$this->pageName = "";
		$this->path = "";
		$this->mainPages = [];
		$this->groupPages = [];
	}

	
	function addMainPage($Page){

		array_push($this->mainPages,$Page);
	}


/**
 * If the group name does not exist,
 * it will create a key with it and
 * associate an empty array that will
 * contain the associated pages.
 * @param type string $groupName 
 * @param type Object(Page) $Page 
 */
	function addGroupPage($groupName,$Page){

		if(count($this->groupPages) >= 1){

			if(array_key_exists($groupName, $this->groupPages)){

				array_push($this->groupPages["$groupName"],$Page);

			}else{

				$this->groupPages["$groupName"]=[];
				array_push($this->groupPages["$groupName"],$Page);
			}

		}else{

			$this->groupPages["$groupName"]=[];
			array_push($this->groupPages["$groupName"],$Page);
		}

	}


	function getMainPages(){

		return $this->mainPages;
	}	


	function getGroupPages(){

		return $this->groupPages;
	}

}



?>