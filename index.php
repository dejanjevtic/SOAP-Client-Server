<?php
try{
	$soapclient = new SoapClient('http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl');
	
	$response = $soapclient->GetCountriesAvailable();
	
	var_dump($response);
}
catch(Exception $e){
	echo $e->getMessage();
}
?>