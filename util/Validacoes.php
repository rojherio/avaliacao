<?php
final class Validacoes {
	//Validar CPF
	public static function validaCpf($cpf) {
		if(empty($cpf)) {
			return false;
		}
		$cpf = preg_replace('/[^0-9]/', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		if (strlen($cpf) != 11) {
			return false;
		}
		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' ||
			$cpf == '22222222222' ||
			$cpf == '33333333333' ||
			$cpf == '44444444444' ||
			$cpf == '55555555555' ||
			$cpf == '66666666666' ||
			$cpf == '77777777777' ||
			$cpf == '88888888888' ||
			$cpf == '99999999999') {
				return false;
		} else {
			for ($t = 9; $t < 11; $t++) {
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return false;
				}
			}
			return true;
		}
	}
	public static function validaEmail($mail){
		if(preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $mail)) {
			return true;
		}else{
			return false;
		}
	}
	public static function validaData( $data ) {
		$dat = explode("/",$data); // fatia a string $dat em pedados, usando / como referência
		$dia = $dat[0];
		$mes = $dat[1];
		$ano = $dat[2];
		if (checkdate($mes,$dia,$ano)){
			return true;
		} else {
			return false;
		}
	}
	public static function validaDataBanco( $data ) {
		$dat = explode("-",$data); // fatia a string $dat em pedados, usando / como referência
		$dia = $dat[2];
		$mes = $dat[1];
		$ano = $dat[0];
		if (checkdate($mes,$dia,$ano)){
			return true;
		} else {
			return false;
		}
	}
	public static function getDataBanco( $data, $hora=false ) {
		if($data == '') {
			$data = null;
		} else {
			if( strlen($data) == 10 ) { //Não tem hora
				$dt = explode('/', $data);
				if( count( $dt ) > 1 ) { //Está no formato BR com /
					$data = $dt[2] . '-' . $dt[1] . '-' . $dt[0];
				}
				$data .= $hora ? ' 00:00:00' : '';
			} else { //Tem hora
				$d = explode(' ', $data);
				$dt = explode('/', $d[0]);
				if( count( $dt ) > 1 ) { //Está no formato BR com /
					$data = $dt[2] . '-' . $dt[1] . '-' . $dt[0];
				}
				$data .= $hora ? $d[1] : '';
			}
		}
		return $data;
	}
	public static function getDataVolta( $data, $hora=false ) {
		$conta = strlen($data);
		if( $conta > 10 ) { // Tem hora
			$d = explode(' ', $data);
			$hora = $d[1];
			$dt = $d[0];
			$dt = explode('-', $dt);
			$data = $dt[2] . '/' . $dt[1] . '/' . $dt[0];
			$data .= !$hora ? ' ' . $hora : '';
		} elseif( $conta == 10 ) {
			$dt = $data;
			$dt = explode('-', $dt);
			$data = $dt[2] . '/' . $dt[1] . '/' . $dt[0];
		}
		return $data;
	}
	public static function getHora($data) {
		$dt = explode(' ', $data);
		return $dt[1];
	}
	public static function validaVazio($valor) {
		$retorno = false;
		if($valor != '') {
			$retorno = true;
		}
		return $retorno;
	}
	public static function formataValorReais($v, $reais = true) {
		$r = $reais ? 'R$ ' : '';
		return $r . number_format($v, 2, ',', '.');
	}
	public static function formataValorBanco($v) {
		$v = str_replace('.', '', $v);
		$v = str_replace(',', '.', $v);
		return $v;
	}
	public static function geraSlug($str, $replace=array(), $delimiter='-') {
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		return $clean;
	}
}
?>