<?php
try{
	$soapclinet = new SoapClient('http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx');
}
catch(Exception $e){
	$e->getMessage();
}
?>