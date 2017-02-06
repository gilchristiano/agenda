<?php namespace agenda\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
/*
| Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Santa Inês
| Sistema de Gestão de Eventos e Saídas para Capacitações
| NGTI - Núcleo de Gestão da Tecnologia da Informação (2017)
*/
class CapacitacaoController extends Controller{
	public function relatorio(){
		return view('capacitacao.relatorio.relatorio');
	}
	public function registro(){
		$siape = Request::input('siape');
			if($siape != NULL){ // algum erro ocorreu
		$consulta = DB::select('SELECT sv.snome, sv.sobrenome, sv.siape, sv.lotacao, sv.desc_lotacao, sv.cargo, st.stnome, st.stsigla, un.unome, un.unidade, ins.inome FROM servidor sv, setor st, servidor_setor ss, unidade un, instituto ins WHERE sv.siape = ? AND sv.idServidor = ss.idservidor AND ss.idsetor = st.idSetor AND st.unidade = un.idunidade AND un.instituto =  ins.idinstituto',[$siape]);
			if(empty($consulta)){ return view('capacitacao.relatorio.error'); }
			else {return view('capacitacao.relatorio.solicitacao')->with('informacoes',$consulta);}
		}
	}
}
?>