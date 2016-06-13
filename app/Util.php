<?php
namespace App;
class Util{
	public static function menuActive($path, $mod, $class){
        return (preg_match('/'.$mod.'/i', $path))? $class : '';
	}
	public static function recortar($cadena, $largo){
		return substr($cadena, 0, $largo); 
	}
	public static function ff($fecha, $tipo = null){
		if($fecha == "")
			return "";
		
        if( $fecha[4] == '-' ){
            $mes = $fecha[5].$fecha[6];
            $dia = $fecha[8].$fecha[9];
            $anio = $fecha[0].$fecha[1].$fecha[2].$fecha[3];
        }else{
            $mes = $fecha[0].$fecha[1];
            $dia = $fecha[3].$fecha[4];
            $anio = $fecha[6].$fecha[7].$fecha[8].$fecha[9];
        }

        $fechaTemp = @getdate(mktime(0, 0, 0, $mes, $dia, $anio));
        $diaChar = $fechaTemp["weekday"];
        $dia_semana = self::diaSemana( $fechaTemp["wday"] );
        $dia_semana = ucfirst( strtolower( $dia_semana ) );
        switch($mes){
            case '01': $mes = 'enero'; break;
            case '02': $mes = 'febrero'; break;
            case '03': $mes = 'marzo'; break;
            case '04': $mes = 'abril'; break;
            case '05': $mes = 'mayo'; break;
            case '06': $mes = 'junio'; break;
            case '07': $mes = 'julio'; break;
            case '08': $mes = 'agosto'; break;
            case '09': $mes = 'septiembre'; break;
            case '10': $mes = 'octubre'; break;
            case '11': $mes = 'noviembre'; break;
            case '12': $mes = 'diciembre'; break;
        }

        if($dia < 10)
        	$dia = substr($dia, 1,2);
        
        switch($tipo){
            case 'corto-es': $final = $dia." de ".$mes." ".$anio;
                break;
            case 'corto-en': $final = $mes." ".$dia.", ".$anio;
                break;
            case 'spiff': $final = $dia." ".$mes[0].$mes[1].$mes[2];
                break;
            case 'dia': $final = $dia." ".$mes. " ( ". self::getDiaChar($diaChar)." ) ";
                break;
            case 'diaanio': $final = $dia." ".$mes. " ( ". self::getDiaChar($diaChar)." ) " . $anio;
                break;
            case 'sis': $final = $dia." ".$mes[0].$mes[1].$mes[2]." ".$anio;
                break;
            case 'grafica': $final = self::getDiaChar($diaChar)." ".$dia." ".$mes;
                break;
            case 'completo': $final = $dia_semana . " " . $dia . " de " . $mes . " de " . $anio;
                break;

            default : $final = $dia." de ".$mes." - ".$anio;
                break;
        }
        return $final;
    }    
    public static function getDiaChar( $dia ){
        switch ($dia){
			case "Monday":
			   $dia = "Lunes";
			   break;
			case "Tuesday":
			   $dia = "Martes";
			   break;
			case "Wednesday":
			   $dia = "Miercoles";
			   break;
			case "Thursday":
			   $dia = "Jueves";
			   break;
			case "Friday":
			   $dia = "Viernes";
			   break;
			case "Saturday":
			   $dia = "Sabado";
			   break;
			case "Sunday":
			   $dia = "Domingo";
			   break;
		}        
        return $dia;
    }
    public static function diaSemana($dia, $lan = 'es', $largo = ""){
		switch ($dia) {
			case 1: $ret = "Lunes"; break;
			case 2: $ret = "Martes"; break;
			case 3: $ret = "Miercoles"; break;
			case 4: $ret = "Jueves"; break;
			case 5: $ret = "Viernes"; break;
			case 6: $ret = "Sabado"; break;
			case 0: $ret = "Domingo"; break;	
			default:
				# code...
				break;
		}
		if($largo == 'c')
			$ret = $ret[0].$ret[1].$ret[2];
		return strtoupper($ret);
	}
    public static function jsonEspecialChart($json){
        foreach ($json as $fecha => $val) {
            $fh = explode("-", $fecha);
            $mes = $fh[1] - 1;
            echo "{date: new Date(".$fh[0].", ".$mes.", ".$fh[2].", 0, 0, 0, 0), val:".$val."},";
        }
    }
}
?>