<?php namespace agenda\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Santa Inês
| Sistema de Gestão de Eventos e Saídas para Capacitações
| NGTI - Núcleo de Gestão da Tecnologia da Informação (2016)
*/
	class ServidorController extends Controller{
	public function inicio(){
		return view('servidor.inicio');
	}
	public function cadastro(){
		
		$instituto = DB::select('select i.idinstituto, i.inome, i.inome, u.idunidade, u.unidade from instituto i, unidade u where i.idinstituto = u.instituto ORDER BY i.inome');
		return view('servidor.cadastro')->withInstituto($instituto);
	}
	public function adiciona(){
	$nome = Request::input('nome');
	$sobrenome  = Request::input('sobrenome');
	$siape = Request::input('siape');
	$lotacao = Request::input('lotacao');
	$desc_lotacao = Request::input('desc_lotacao');
	$cargo = Request::input('cargo');
	$datanascimento = Request::input('datanascimento');
	$entrada = Request::input('entrada');
	$saida = Request::input('saida');
	$observacoes = Request::input('observacoes');
	$chave = 0;
	DB::insert('insert into servidor(snome,sobrenome,siape,lotacao,desc_lotacao,cargo,datanascimento,entrada,saida,observacoes,chave)values(?,?,?,?,?,?,?,?,?,?,?)',array($nome,$sobrenome,$siape,$lotacao,$desc_lotacao,$cargo,$datanascimento,$entrada,$saida,$observacoes,$chave));
		return view('servidor.adicionado');
	}
}
?>