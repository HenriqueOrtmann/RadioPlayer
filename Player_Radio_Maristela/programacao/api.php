<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, xRequested-With');
header('Content-Type: application/json; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');
$dia = date('D');
$semana = array(
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado',
    'Sun' => 'Domingo'
);
$resultado = $semana["$dia"];
$hora = date('H:i');

if($resultado == 'Segunda-Feira' || $resultado == 'Terca-Feira' || $resultado == 'Quarta-Feira' || $resultado == 'Quinta-Feira' || $resultado == 'Sexta-Feira'):
	if($hora >= '00:00' AND $hora <= '03:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'MADRUGADA COM JESUS', 'horario' => '00h00 à 03h00');
		echo json_encode($arr);

	elseif($hora >= '03:00' AND $hora <= '05:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'MODULAR', 'horario' => '03h00 à 05h00');
		echo json_encode($arr);

	elseif($hora >= '05:00' AND $hora <= '06:30'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'BOM DIA LITORAL', 'horario' => '05h00 à 06h30');
		echo json_encode($arr);

	elseif($hora >= '05:30' AND $hora <= '09:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'BOM DIA LITORAL', 'horario' => '05h30 à 09h00');
		echo json_encode($arr);
	
	elseif($hora >= '09:00' AND $hora <= '11:45'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'REVISTA MARISTELA', 'horario' => '09h00 à 11h45');
		echo json_encode($arr);
	
	elseif($hora >= '11:45' AND $hora <= '12:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'NOTÍCIA MARISTELA', 'horario' => '11h45 à 12h00');
		echo json_encode($arr);
	
	elseif($hora >= '12:00' AND $hora <= '13:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'FILTRO SOLAR', 'horario' => '12h00 à 13h00');
		echo json_encode($arr);
	
	elseif($hora >= '13:00' AND $hora <= '15:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TORRIKA', 'horario' => '13h00 à 15h00');
		echo json_encode($arr);
	
	elseif($hora >= '15:00' AND $hora <= '18:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'ESTÚDIO 106', 'horario' => '15h00 à 18h00');
		echo json_encode($arr);
	
	elseif($hora >= '18:00' AND $hora <= '21:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'RÁDIO FREQUÊNCIA', 'horario' => '18h00 à 21h00');
		echo json_encode($arr);
	
	elseif($hora >= '21:00' AND $hora <= '22:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'A VOZ DO BRASIL', 'horario' => '21h00 à 22h00');
		echo json_encode($arr);
	
	elseif($hora >= '22:00' AND $hora <= '23:59'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TÁ ROLADO', 'horario' => '22h00 à 23h59');
		echo json_encode($arr);
	else:
		$arr = array('code_msg' => 101, 'msg_text' => 'Hora Errado');
		echo json_encode($arr);
	endif;
	
endif;


if($resultado == 'Sábado'):
	if($hora >= '00:00' AND $hora <= '03:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TÁ ROLANDO', 'horario' => '00h00 à 03h00');
		echo json_encode($arr);

	elseif($hora >= '05:00' AND $hora <= '06:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'MOLUDAR', 'horario' => '05h00 à 06h00');
		echo json_encode($arr);

	elseif($hora >= '06:00' AND $hora <= '10:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'SHOW DA MANHÃ', 'horario' => '06h00 à 10h00');
		echo json_encode($arr);
	
	elseif($hora >= '10:00' AND $hora <= '12:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'SUPERSÓNICO', 'horario' => '10h00 à 12h00');
		echo json_encode($arr);
	
	elseif($hora >= '12:00' AND $hora <= '13:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'ESPECIAL DO DIA', 'horario' => '12h00 à 13h00');
		echo json_encode($arr);
	
	elseif($hora >= '13:00' AND $hora <= '15:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TIME DA MARISTELA', 'horario' => '13h00 à 15h00');
		echo json_encode($arr);
	
	elseif($hora >= '15:00' AND $hora <= '17:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'ESPECIAL PLAYLIST DO OUVINTE', 'horario' => '13h00 à 17h00');
		echo json_encode($arr);
	
	elseif($hora >= '17:00' AND $hora <= '19:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'FAZ TEMPO', 'horario' => '17h00 à 19h00');
		echo json_encode($arr);
	
	elseif($hora >= '19:00' AND $hora <= '21:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'AS MAIS TOCADAS NA 106,1', 'horario' => '19h00 à 21h00');
		echo json_encode($arr);
	
	elseif($hora >= '21:00' AND $hora <= '23:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'POP DJ', 'horario' => '13h00 à 15h00');
		echo json_encode($arr);
	
	elseif($hora >= '22:00' AND $hora <= '23:59'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TÁ ROLADO', 'horario' => '22h00 à 23h59');
		echo json_encode($arr);
	else:
		$arr = array('code_msg' => 101, 'msg_text' => 'Hora Errado');
		echo json_encode($arr);
	endif;
	
endif;



if($resultado == 'Domingo'):
	if($hora >= '00:00' AND $hora <= '05:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TÁ ROLADO', 'horario' => '00h00 à 05h00');
		echo json_encode($arr);

	elseif($hora >= '05:00' AND $hora <= '07:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'MODULAR', 'horario' => '05h00 à 07h00');
		echo json_encode($arr);

	elseif($hora >= '07:00' AND $hora <= '08:45'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'VOZ DO PASTOR', 'horario' => '07h00 à 08h45');
		echo json_encode($arr);

	elseif($hora >= '09:00' AND $hora <= '10:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'SANTA MISSA DOMINICAL', 'horario' => '09h00 à 10h00');
		echo json_encode($arr);
	elseif($hora >= '10:00' AND $hora <= '13:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'CHIMARREANDO COM CASCA E TUDO', 'horario' => '10h00 à 13h00');
		echo json_encode($arr);

	elseif($hora >= '13:00' AND $hora <= '15:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'DOBRAS', 'horario' => '13h00 à 15h00');
		echo json_encode($arr);

	elseif($hora >= '15:00' AND $hora <= '17:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'FILTRO SOLAR DE DOMINGO', 'horario' => '15h00 à 17h00');
		echo json_encode($arr);

	elseif($hora >= '17:00' AND $hora <= '19:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'AS MAIS TOCADA NA 106,1', 'horario' => '17h00 à 19h00');
		echo json_encode($arr);

	elseif($hora >= '19:00' AND $hora <= '21:00'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'RESUMO DA SEMANA', 'horario' => '19h00 à 21h00');
		echo json_encode($arr);
	elseif($hora >= '21:00' AND $hora <= '23:59'):
		$arr = array('code_msg' => 200, 'msg_text' => 'success', 'programacao' => 'TÁ ROLANDO', 'horario' => '21h00 à 23h59');
		echo json_encode($arr);

	else:
		$arr = array('code_msg' => 101, 'msg_text' => 'Hora Errado');
		echo json_encode($arr);
	endif;
endif;
