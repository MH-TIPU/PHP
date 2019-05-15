class profile{
	var $name;
	var $email


	function _construct($name, $email){
		$this->$name = $name;
		$this->$email = $email;
	}


	function getName(){
         return $this->name;
      }
      
    function setName($name){
         $this->name = $name;
      }


    function getEmail(){
         return $this->email;
      }
      
    function setEmail($email){
         $this->email = $email;
      }



}