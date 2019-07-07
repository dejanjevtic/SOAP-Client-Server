<?php
try{
	$soapclient = new SoapClient('http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl');
	
	$param = array('countryCode'=>'Scotland');
	$response = $soapclient->GetHolidaysAvailable($param);
	
	var_dump($response);
	echo "<br><br><br>";
	$array = json_decode(json_encode($response), true);
	
	print_r($array);
	echo "<br><br><br>";
	
	echo $array['GetHolidaysAvailableResult']['HolidayCode']['20']['Description'];
	
	echo "<br><br><br>";
	
	foreach($array as $item) {
		echo '<pre>';
		var_dump($item);
	}
}
catch(Exception $e){
	echo $e->getMessage();
}
?>