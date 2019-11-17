<?php
    require_once('nuSoap/nusoap.php');
$server = new soap_server();
$server->configureWSDL('Service', 'urn:Service');
        $server->soap_defencoding = 'utf-8';
		$server->decode_utf8=false;
        //-------------------------------------------------
		$server->register('TongHaiSo',
							array('a'=>'xsd:int','b'=>'xsd:int'),
      						array('return' =>'xsd:int'),
						    'urn:Servicewsdl',
						    'urn:Servicewsdl#TongHaiSo',
						    'rpc',	
						    'literal',
						    'Tong Hai So'
							);
        
        function TongHaiSo($a,$b) {
		  return $a+$b;			
		}				
		
	//-------------------------------------------------	
        $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
        $server->service($HTTP_RAW_POST_DATA);
?>