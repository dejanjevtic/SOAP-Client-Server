<?php

	class server{
		public function __construct(){
			
		}
		
		public function getStudentName($id_array)
		{
			return 'Dejan';
		}
	}
		$params = array('uri'=>'codev/soap/server.php');
		$server=new SoapServer(NULL, $params);
		$server->setClass('server');
		$server->handle();
?>