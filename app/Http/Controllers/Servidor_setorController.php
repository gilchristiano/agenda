<?php namespace agenda\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
/*
| Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Santa Inês
| Sistema de Gestão de Eventos e Saídas para Capacitações
| NGTI - Núcleo de Gestão da Tecnologia da Informação (2016)
*/
	class Servidor_setorController extends Controller{
	public function registra(){
	$idSetor = Request::input('idSetor');
	$idunidade  = Request::input('idunidade');
	$idservidor = Request::input('idservidor');
	$confirmar = DB::select('select s.snome, s.sobrenome, st.stnome from servidor_setor AS ss INNER JOIN  setor AS st ON ss.idservidor = ? and ss.idsetor = st.idSetor INNER JOIN servidor AS s ON ss.idservidor = s.idServidor',[$idservidor]);
	if($confirmar != NULL){ // já se encontra cadastrado
		return view('servidor_setor.alerta')->withConfirmar($confirmar);
	}
	else {
	DB::table('servidor_setor')->insert(['idservidor'=>$idservidor,'idsetor'=>$idSetor,'entrada'=>'2015-10-10','saida'=>'0001-01-01','funcao'=>'Não possui']);
	return view('servidor_setor.adicionado');
		}
	}
}
?>