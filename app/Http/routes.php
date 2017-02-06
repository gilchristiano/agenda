<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
| Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Santa Inês
| Sistema de Gestão de Eventos e Saídas para Capacitações
| NGTI - Núcleo de Gestão da Tecnologia da Informação (2016)
*/
Route::get('/', function(){
	return view("welcome");
});
Route::get('/inicio','OrganogramaController@inicio'); // Principal - inicio
Route::get('/organograma','OrganogramaController@mapa'); // Principal - organograma.mapa
Route::get('//setores/{id_in}/{id_un}','OrganogramaController@setor')->where('id_in','[0-9]+'); // Redirec - organograma.setor
Route::get('/setor/{id_in}/{id_un}/{id_st}','SetorController@cadastro');// Redirecionador /setor/1/2/3
Route::post('/setor/adicionar','SetorController@adiciona'); // Principal
Route::post('/setor/registrar','SetorController@registrar'); // Redirecionador adicionar para registrar
Route::post('/setor/servidor/adicionar','Servidor_setorController@registra');// Salvar um servidor em um setor específico
// Seçõa específica para cadastro do setor
Route::post('/setores/adicionar','ServidorController@adiciona'); // Principal
// Fim da seção cadastro de setor
Route::get('/servidores/{id_in}/{id_un}/{id_st}','OrganogramaController@servidor')->where('id_in','[0-9]+');// Redirecionador
// Seçõa específica para cadastro do servidor
Route::get('/servidores/iniciar','ServidorController@inicio'); // Principal
Route::get('/servidores/cadastrar','ServidorController@cadastro'); // Cadastrar
Route::post('/servidores/adicionar','ServidorController@adiciona');// Redirecionador
//Seção de Registros e Acompanhamento Capacitação
Route::get('/capacitacao/relatorio','CapacitacaoController@relatorio')->where('siape','[0-9]+');
Route::post('/capacitacao/registro','CapacitacaoController@registro');


