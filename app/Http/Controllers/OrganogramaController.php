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
class OrganogramaController extends Controller{
	public function servidor($id_in,$id_un,$id_st){
		$servidor = DB::select('select ss.idsetor, s.snome, s.sobrenome, s.siape, s.lotacao, s.desc_lotacao, i.inome, i.isigla, u.unidade, st.stnome, st.stsigla, ss.idservidor, ss.funcao from servidor s, instituto i, unidade u, setor st, servidor_setor ss where ss.idservidor = s.idServidor and ss.idsetor = st.idSetor and ss.idsetor = ? and st.unidade = u.idunidade and st.unidade = ? and u.instituto = i.idinstituto and u.instituto = ? ORDER BY s.lotacao, s.snome, s.sobrenome DESC',[$id_st,$id_un,$id_in]);
			if(empty($servidor)){
				return view('error');
			}
			else {
				if(view()->exists('organograma.registro')) {
				return view('organograma.registro')->withServidor($servidor);
				}
			}
	}
	public function mapa(){
		$id = 1;
		$mapa = DB::select('SELECT i.idinstituto, i.inome, i.isigla, u.unidade, u.idunidade FROM instituto i, unidade u WHERE i.idinstituto = ? and i.idinstituto = u.instituto ORDER BY u.idunidade ASC',[$id]);
		if(view()->exists('organograma.mapa')) {
		return view('organograma.mapa')->withMapa($mapa);
		}
	}
	public function setor($id_in,$id_un){
		$setor = DB::select('select i.idinstituto, u.idunidade, i.inome, st.idSetor, st.stnome, st.stsigla from instituto i, unidade u, setor st where i.idinstituto = ? and i.idinstituto = u.instituto and u.idunidade = st.unidade and st.unidade  = u.idunidade and st.unidade = ? ORDER BY st.idSetor DESC',[$id_in,$id_un]);
		if(empty($setor)){
				return view('organograma.error');
		}
		else {
			if(view()->exists('organograma.setor')) {
			return view('organograma.setor')->withSetor($setor);
				}
			}
	}
}
?>