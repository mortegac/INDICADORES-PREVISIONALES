# INDICADORES-PREVISIONALES
OBTENER INDICADORES PREVISIONALES COMO LA UF, UTM, RENTAS TOPES IMPONIBLES AFP.  Se extrae está información de página web externas que mantienen actualizados estos parametros

Para la extracción se utiliza la función PHP file_get_html() y luego se parsea con la libreria SimplehtmlDOM.

El código devuelve un JSON con los siguientes Indicadores Previsionales.

* UF
* UTM
* RENTAS TOPES IMPONIBLES
* APV - Tope Mensual (50 UF)
* APV - Tope Anual (600 UF)
* SEGURO DE CESANTIA - Contrato Plazo Indefinido - Empleador 
* SEGURO DE CESANTIA - Contrato Plazo Indefinido - Trabajador 
* SEGURO DE CESANTIA - Contrato Plazo Fijo - Empleador 


ESO POR AHORA!
