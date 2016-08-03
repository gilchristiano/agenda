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
class SetorController extends Controller{
	public function cadastro($id_in,$id_un,$id_st){
		$setor = DB::select('select i.inome, i.isigla, u.unidade, u.idunidade, st.stnome, st.stsigla from instituto i, unidade u, setor st where st.idSetor = ? and st.unidade = u.idunidade and st.unidade = ? and u.instituto = i.idinstituto and u.instituto = ? ORDER BY idSetor DESC',[$id_st,$id_un,$id_in]);
		if(view()->exists('setor.registro')) {
		return view('setor.registro')->withSetor($setor);
		}
		return view('setor.cadastro');
	}
	/*
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
	DB::insert('insert into servidor(snome,sobrenome,siape,lotacao,desc_lotacao,cargo,datanascimento,entrada,saida,observacoes,chave)values(?,?,?,?,?,?,?,?,?,?,?)',array($nome,$sobrenome,$siape,$lotacao,$desc_lotacao,$cargo, $datanascimento,$entrada,$saida,$observacoes,$chave));
		return view('setor.adicionado');
	}
	public function administra(){
		return view('setor.administra');
	}
	*/
}
?>