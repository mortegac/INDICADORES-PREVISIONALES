<?Php
include('simple_html_dom.php');

function Extrae() {
try {
	 
	$WebExterna = file_get_html('http://www.previred.com/web/previred/indicadores-previsionales');
	$i =0;    
	foreach($WebExterna->find('td') as $e){
		
		switch ($i) {
		    case 2:  $respuesta['UF'] = LimpiaString($e->innertext);
		        break;
		     case 9: $respuesta['UTM'] = LimpiaString($e->innertext);
		        break;
		     case 27: $respuesta['APV-RENTAIMP-TOPE-MES(50UF)'] = LimpiaString($e->innertext);
		        break;
		     case 29: $respuesta['APV-RENTAIMP-TOPE-ANUAL(600UF)'] = LimpiaString($e->innertext);
		        break;
		     case 39: $respuesta['SEGURO-CESANTIA_CONTRATOINDEF-EMPLEADOR'] = LimpiaString($e->innertext);
		        break;
		     case 40: $respuesta['SEGURO-CESANTIA_CONTRATOINDEF-TRABAJADOR'] = LimpiaString($e->innertext);
		        break;
		     case 45: $respuesta['SEGURO-CESANTIA_CONTRATOPLAZOFIJO-EMPLEADOR'] = LimpiaString($e->innertext);
		        break;
	    
		}

		$i++;	
	 	
	}
	return '{"indicadores": ' . json_encode($respuesta). '}';



} catch(Exception $e) {
	$respuesta['msg-error'] = $e->getMessage();
	echo '{"error": ' . json_encode($respuesta). '}';
}
}





function LimpiaString($txt) {
	try {

			$txt = (string)$txt;
	    	$txt = str_replace ("<strong>" ,"", $txt);
	    	$txt = str_replace ("</strong>" ,"", $txt);
	    	$txt = str_replace ("$ " ,"", $txt);
	    	$txt = str_replace ("." ,"", $txt);
	    	$txt = str_replace (" " ,"", $txt);
	    	$txt = str_replace ("%" ,"", $txt);
	    	$txt = str_replace ("RI" ,"", $txt);
	    	 

		return $txt;

	} catch(Exception $e) { echo ""; }
}





?>