<?php namespace agenda\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
/*
| Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Santa Inês
| Sistema de Gestão de Eventos e Saídas para Capacitações
| NGTI - Núcleo de Gestão da Tecnologia da Informação (2016)
*/
class SetorController extends Controller{
	public function cadastro($id_in,$id_un,$id_st){
		$setor = DB::select('select i.inome, i.isigla, i.idinstituto, u.unidade, u.idunidade, st.stnome, st.stsigla, st.idSetor from instituto i, unidade u, setor st where st.idSetor = ? and st.unidade = u.idunidade and st.unidade = ? and u.instituto = i.idinstituto and u.instituto = ? ORDER BY idSetor DESC',[$id_st,$id_un,$id_in]);
		$servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s ORDER BY s.snome ASC");
		if(view()->exists('setor.registro')) {
		return view('setor.registro')->with(array('setor'=>$setor,'servidores'=>$servidores));
		}
		return view('setor.cadastro');
	}
}
?>