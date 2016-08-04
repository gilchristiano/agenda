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
		$ab_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'a%' or s.snome LIKE 'b%' ORDER BY s.snome ASC");
		$cd_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'c%' or s.snome LIKE 'd%' ORDER BY s.snome ASC");
		$ef_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'e%' or s.snome LIKE 'f%' ORDER BY s.snome ASC");
		$gh_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'g%' or s.snome LIKE 'h%' ORDER BY s.snome ASC");
		$ij_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'i%' or s.snome LIKE 'j%' ORDER BY s.snome ASC");
		$kl_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'k%' or s.snome LIKE 'l%' ORDER BY s.snome ASC");
		$mn_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'm%' or s.snome LIKE 'n%' ORDER BY s.snome ASC");
		$op_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'o%' or s.snome LIKE 'p%' ORDER BY s.snome ASC");
		$qr_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'q%' or s.snome LIKE 'r%' ORDER BY s.snome ASC");
		$st_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 's%' or s.snome LIKE 't%' ORDER BY s.snome ASC");
		$uv_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'u%' or s.snome LIKE 'v%' ORDER BY s.snome ASC");
		$xz_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'x%' or s.snome LIKE 'z%' ORDER BY s.snome ASC");
		$wy_servidores = DB::select("select s.snome, s.sobrenome, s.idServidor from servidor s where s.snome IS NOT NULL and s.snome LIKE 'w%' or s.snome LIKE 'y%' ORDER BY s.snome ASC");
		if(view()->exists('setor.registro')) {
		return view('setor.registro')->with(array('setor'=>$setor,'ab_servidores'=>$ab_servidores,'cd_servidores'=>$cd_servidores,'ef_servidores'=>$ef_servidores,'gh_servidores'=>$gh_servidores,'ij_servidores'=>$ij_servidores,'kl_servidores'=>$kl_servidores,'mn_servidores'=>$mn_servidores,'op_servidores'=>$op_servidores,'qr_servidores'=>$qr_servidores,'st_servidores'=>$st_servidores,'uv_servidores'=>$uv_servidores,'xz_servidores'=>$xz_servidores,'wy_servidores'=>$wy_servidores));
		}
		return view('setor.cadastro');
	}
}
?>