<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



/*--------------- NOSOTROS ----------------*/
Route::get('/', function () {
    return view('index');
});

Route::get('nosotros/', function () {
    return view('nosotros');
});

/*TRASNPARENCIA*/
	Route::get('transparencia/', function () {
		return view('transparencia');
	});

	Route::get('informe-de-control-interno/', function () {
	    return view('informe-de-control-interno');
	});
	Route::get('opinion-del-auditor-interno/', function () {
	    return view('opinion-del-auditor-interno');
	});

	Route::get('resumen-ejecutivo-del-informe-de-auditoria-interna-poa/', function () {
	    return view('resumen-ejecutivo-del-informe-de-auditoria-interna-poa');
	});
	Route::get('resumen-ejecutivo-del-informe-de-auditoria-interna-almacenes/', function () {
	    return view('resumen-ejecutivo-del-informe-de-auditoria-interna-almacenes');
	});
/* ----- ----- */

Route::get('organigrama/', function () {
    return view('organigrama');
});
Route::get('organigrama1/', function () {
    return view('organigrama1');
});

Route::get('contacto/', function () {
    return view('contacto');
});

/* ------------ GOBIERNO ELECTRONICO ------------- */

Route::get('gobierno-electronico/', function () {
    return view('gobierno-electronico');
});

Route::get('simplificacion-de-tramites/', function () {
    return view('simplificacion-de-tramites');
});

Route::get('datos-libres/', function () {
    return view('datos-libres');
});
Route::get('participacion/', function () {
    return view('participacion');
});
Route::get('participacion/', function () {
    return view('participacion');
});
Route::get('seguridad/', function () {
    return view('seguridad');
});
Route::get('ctic/', function () {
    return view('ctic');
});
Route::get('iid/', function () {
    return view('iid');
});

/* ------------ PRENSA ------------- */

Route::get('prensa/', function () {
    return view('prensa');
});

