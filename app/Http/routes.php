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
Route::get('/inicio','InstitutoController@inicio'); // Principal
Route::get('/organograma','OrganogramaController@mapa'); // Principal
Route::get('/setores/{id_in}/{id_un}','OrganogramaController@setor')->where('id_in','[0-9]+'); // Redirecionador
// Para cadastrar novo servidor em um setor específico / campus
Route::get('/setor/{id_in}/{id_un}/{id_st}','SetorController@cadastro');// Redirecionador
Route::post('/setor/adicionar','SetorController@adiciona'); // Principal
// Seçõa específica para cadastro do setor
Route::post('/setores/adicionar','ServidorController@adiciona'); // Principal
// Fim da seção cadastro de setor
Route::get('/servidores/{id_in}/{id_un}/{id_st}','OrganogramaController@servidor')->where('id_in','[0-9]+');// Redirecionador
// Seçõa específica para cadastro do servidor
Route::get('/servidores/cadastrar','ServidorController@cadastro'); // Principal
Route::post('/servidores/adicionar','ServidorController@adiciona');// Redirecionador
// Fim da seção cadastro de servidor
