<?php

// example of how to use basic selector to retrieve HTML contents
include('simple

	_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://www.previred.com/web/previred/indicadores-previsionales');

// // find all link
// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';

// // find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// // find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// find all td tags with attribite align=center
// foreach($html->find('table[class="tabla"]') as $e)
//     echo $e->innertext . '<br>';
$i =0;    
foreach($html->find('td') as $e){

switch ($i) {
    case 2:  //UF
        echo "<p style='color:red;'>UF = " .$e->innertext . '</p>'; 
        break;
    case 9:  //UTM
        echo "<p style='color:red;'>UTM = " .$e->innertext . '</p>'; 
        break;
    case 13:  //RENTAS TOPES IMPONIBLES
        echo "<p style='color:red;'>RENTAS TOPES IMPONIBLES AFP = " .$e->innertext . '</p>'; 
        break; 

    case 27:  //Tope Mensual (50 UF)
        echo "<p style='color:red;'>APV - Tope Mensual (50 UF) = " .$e->innertext . '</p>'; 
        break; 

    case 29:  //Tope Anual (600 UF)
        echo "<p style='color:red;'>APV - Tope Anual (600 UF) = " .$e->innertext . '</p>'; 
        break;    

    case 39:  //SEGURO DE CESANTÍA (AFC)
        echo "<p style='color:red;'>CESANTIA - Contrato Plazo Indefinido - Empleador = " .$e->innertext . '</p>'; 
        break;    

    case 40:  //SEGURO DE CESANTÍA (AFC)
        echo "<p style='color:red;'>CESANTIA - Contrato Plazo Indefinido - Trabajador = " .$e->innertext . '</p>'; 
        break;    

    case 45:  //SEGURO DE CESANTÍA (AFC)
        echo "<p style='color:red;'>CESANTIA - Contrato Plazo Fijo - Empleador = " .$e->innertext . '</p>'; 
        break;   

   
    case 56:  //AFP CAPITAL
        echo "<p style='color:red;'>AFP CAPITAL - DEPENDIENTES -TASA AFP = " .$e->innertext . '<br>'; 
        break;      
    case 57:  //AFP CAPITAL
        echo "AFP CAPITAL - DEPENDIENTES -SIS (1) (2) = " .$e->innertext . '<br>'; 
        break;      
    case 58:  //AFP CAPITAL
        echo "AFP CAPITAL - INDEPENDIENTES -TASA AFP (3)= " .$e->innertext . '</p>'; 
        break;   

   
    case 60:  //AFP Cuprum
        echo "<p style='color:red;'>AFP Cuprum - DEPENDIENTES -TASA AFP = " .$e->innertext . '<br>'; 
        break;      
    case 61:  //AFP Cuprum
        echo "AFP Cuprum - DEPENDIENTES -SIS (1) (2) = " .$e->innertext . '<br>'; 
        break;      
    case 62:  //AFP Cuprum
        echo "AFP Cuprum - INDEPENDIENTES -TASA AFP (3)= " .$e->innertext . '</p>'; 
        break;    

    default:  
    	echo $i ."-" .$e->innertext . '<br>';  
    

}


    
// if ($i == 2){ 
// 	echo "UF = " .$e->innertext . '<br>'; 
// }else{

// 	echo $i ."-" .$e->innertext . '<br>';
// }

$i++;
}
// extract text from table
//echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
//echo $html->plaintext;

?>