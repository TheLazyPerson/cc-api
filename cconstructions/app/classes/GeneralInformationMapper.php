<?php

	/**
	*  Contacting Person
	*/
	class ContactingPersonMapper extends Mapper {

		public function getAllContactingPeople(){
			$sql = "SELECT * FROM contactingperson";
			$result = mysql_query($sql);

	        if (!$result){
	            die("Database Query Failed: ". mysql_error());

	        }

	        $results = [];
			// $rows = mysql_fetch_array($result);
			while ( $row = mysql_fetch_array($result)) {
				
				$results[] = new ContactingPersonEntity($row);
			} 

			return $results;
		}

		public function getContactingPersonById($id){
			$sql = "SELECT * FROM contactingperson WHERE `id`={$id}";
			$result = mysql_query($sql);

	        if (!$result){
	            die("Database Query Failed: ". mysql_error());

	        }
        
			$row = mysql_fetch_array($result);

			$results = new ContactingPersonEntity($row);
			return $results;
				
			
		}
		
		public function save(ContactingPersonEntity $contactingperson){
			
			$sql = "INSERT INTO `contactingperson`(`id`, `name`, `email`, `subject`, `phone`, `message`, `date_added`) VALUES (NULL,'{$contactingperson->getName()}','{$contactingperson->getEmail()}','{$contactingperson->getSubject()}','{$contactingperson->getPhone()}','{$contactingperson->getMessage()}',NOW())";
			
			$result = mysql_query($sql);
			return $result;
		}
	}