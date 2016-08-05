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
	DB::insert('insert into servidor_setor(idservidor,idsetor,entrada,saida,funcao)values(?,?,?,?,?)',array($idservidor,$idSetor,'2015-10-10','0001-01-01','Não possui'));
	return view('servidor_setor.adicionado');
	}
}
?>