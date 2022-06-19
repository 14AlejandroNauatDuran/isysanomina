<?php

require_once __DIR__ . '/../includes/app.php';


use Controllers\AdminController;
use Controllers\DepartamentoController;
/** use Controllers\DescargaController;*/
/** use Controllers\EmpleadoController;*/
use Controllers\IncidenciaController;
use Controllers\LoginController;
use Controllers\Produc_incenController;
use Controllers\ProduccionController;
use Controllers\PuestoController;
use Controllers\SalariosController;
use Controllers\SemanaController;
use Controllers\TipoempleadoController;
use Controllers\TurnosController;

use MVC\Router;

$router = new Router();

//iniciar sesion
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//recuperar password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

//crear cuenta
$router->get('/crear-cuenta', [LoginController::class, 'crear']);
$router->post('/crear-cuenta', [LoginController::class, 'crear']);

//confirmar
$router->get('/confirmar-cuenta',[LoginController::class, 'confirmar']); 
$router->get('/mensaje',[LoginController::class, 'mensaje']); 

//area privada
//rute|tipo GET|direccion URI localhost:3000/admin |nombre de controlador| tipo clase | con el metodo index
$router->get('/admin', [AdminController::class, 'index']);

//entrar a deprtamento
$router->get('/admin-departamento', [DepartamentoController::class, 'index']);
$router->get('/admin-departamento/crear', [DepartamentoController::class, 'crear']);
$router->post('/admin-departamento/crear', [DepartamentoController::class, 'crear']);
$router->get('/admin-departamento/actualizar', [DepartamentoController::class, 'actualizar']);
$router->post('/admin-departamento/actualizar', [DepartamentoController::class, 'actualizar']);
$router->post('/admin-departamento/eliminar', [DepartamentoController::class, 'eliminar']);

//entrar a turnos
$router->get('/admin-turnos', [TurnosController::class, 'index']);
$router->get('/admin-turnos/crear', [TurnosController::class, 'crear']);
$router->post('/admin-turnos/crear', [TurnosController::class, 'crear']);
$router->get('/admin-turnos/actualizar', [TurnosController::class, 'actualizar']);
$router->post('/admin-turnos/actualizar', [TurnosController::class, 'actualizar']);
$router->post('/admin-turnos/eliminar', [TurnosController::class, 'eliminar']);

//entrar a puesto
$router->get('/admin-puesto', [PuestoController::class, 'index']);
$router->get('/admin-puesto/crear', [PuestoController::class, 'crear']);
$router->post('/admin-puesto/crear', [PuestoController::class, 'crear']);
$router->get('/admin-puesto/actualizar', [PuestoController::class, 'actualizar']);
$router->post('/admin-puesto/actualizar', [PuestoController::class, 'actualizar']);
$router->post('/admin-puesto/eliminar', [PuestoController::class, 'eliminar']);

//entrar a tipo de empleado
$router->get('/admin-tipoEmpleado', [TipoempleadoController::class, 'index']);
$router->get('/admin-tipoEmpleado/crear', [TipoempleadoController::class, 'crear']);
$router->post('/admin-tipoEmpleado/crear', [TipoempleadoController::class, 'crear']);
$router->get('/admin-tipoEmpleado/actualizar', [TipoempleadoController::class, 'actualizar']);
$router->post('/admin-tipoEmpleado/actualizar', [TipoempleadoController::class, 'actualizar']);
$router->post('/admin-tipoEmpleado/eliminar', [TipoempleadoController::class, 'eliminar']);

//incentivo
$router->get('/admin-incentivo', [Produc_incenController::class, 'index']);
$router->get('/admin-incentivo/crear', [Produc_incenController::class, 'creartipoincentivo']);
$router->post('/admin-incentivo/crear', [Produc_incenController::class, 'creartipoincentivo']);
$router->get('/admin-incentivo/actualizar', [Produc_incenController::class, 'actualizartipoincentivo']);
$router->post('/admin-incentivo/actualizar', [Produc_incenController::class, 'actualizartipoincentivo']);
$router->post('/admin-incentivo/eliminar', [Produc_incenController::class, 'eliminartipoincentivo']);

//cernidas
$router->get('/admin-incentivo-A_pll_mc_e_css/crear', [Produc_incenController::class, 'crearA_pll_mc_e_css']);
$router->post('/admin-incentivo-A_pll_mc_e_css/crear', [Produc_incenController::class, 'crearA_pll_mc_e_css']);
$router->get('/admin-incentivo-A_pll_mc_e_css/actualizar', [Produc_incenController::class, 'actualizarA_pll_mc_e_css']);
$router->post('/admin-incentivo-A_pll_mc_e_css/actualizar', [Produc_incenController::class, 'actualizarA_pll_mc_e_css']);
$router->post('/admin-incentivo-A_pll_mc_e_css/eliminar', [Produc_incenController::class, 'eliminarA_pll_mc_e_css']);

$router->get('/admin-incentivo-Tlm_c/crear', [Produc_incenController::class, 'crearTlm_c']);
$router->post('/admin-incentivo-Tlm_c/crear', [Produc_incenController::class, 'crearTlm_c']);
$router->get('/admin-incentivo-Tlm_c/actualizar', [Produc_incenController::class, 'actualizarTlm_c']);
$router->post('/admin-incentivo-Tlm_c/actualizar', [Produc_incenController::class, 'actualizarTlm_c']);
$router->post('/admin-incentivo-Tlm_c/eliminar', [Produc_incenController::class, 'eliminarTlm_c']);

$router->get('/admin-incentivo-Otx_atc/crear', [Produc_incenController::class, 'crearOtx_atc']);
$router->post('/admin-incentivo-Otx_atc/crear', [Produc_incenController::class, 'crearOtx_atc']);
$router->get('/admin-incentivo-Otx_atc/actualizar', [Produc_incenController::class, 'actualizarOtx_atc']);
$router->post('/admin-incentivo-Otx_atc/actualizar', [Produc_incenController::class, 'actualizarOtx_atc']);
$router->post('/admin-incentivo-Otx_atc/eliminar', [Produc_incenController::class, 'eliminarOtx_atc']);

$router->get('/admin-incentivo-S_mt_e_cer/crear', [Produc_incenController::class, 'crearS_mt_e_cer']);
$router->post('/admin-incentivo-S_mt_e_cer/crear', [Produc_incenController::class, 'crearS_mt_e_cer']);
$router->get('/admin-incentivo-S_mt_e_cer/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_cer']);
$router->post('/admin-incentivo-S_mt_e_cer/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_cer']);
$router->post('/admin-incentivo-S_mt_e_cer/eliminar', [Produc_incenController::class, 'eliminarS_mt_e_cer']);

$router->get('/admin-incentivo-Amatto_s_mt_e_cer/crear', [Produc_incenController::class, 'crearAmatto_s_mt_e_cer']);
$router->post('/admin-incentivo-Amatto_s_mt_e_cer/crear', [Produc_incenController::class, 'crearAmatto_s_mt_e_cer']);
$router->get('/admin-incentivo-Amatto_s_mt_e_cer/actualizar', [Produc_incenController::class, 'actualizarAmatto_s_mt_e_cer']);
$router->post('/admin-incentivo-Amatto_s_mt_e_cer/actualizar', [Produc_incenController::class, 'actualizarAmatto_s_mt_e_cer']);
$router->post('/admin-incentivo-Amatto_s_mt_e_cer/eliminar', [Produc_incenController::class, 'eliminarAmatto_s_mt_e_cer']);

$router->get('/admin-incentivo-C_p_ap_cer/crear', [Produc_incenController::class, 'crearC_p_ap_cer']);
$router->post('/admin-incentivo-C_p_ap_cer/crear', [Produc_incenController::class, 'crearC_p_ap_cer']);
$router->get('/admin-incentivo-C_p_ap_cer/actualizar', [Produc_incenController::class, 'actualizarC_p_ap_cer']);
$router->post('/admin-incentivo-C_p_ap_cer/actualizar', [Produc_incenController::class, 'actualizarC_p_ap_cer']);
$router->post('/admin-incentivo-C_p_ap_cer/eliminar', [Produc_incenController::class, 'eliminarC_p_ap_cer']);

$router->get('/admin-incentivo-E_a/crear', [Produc_incenController::class, 'crearE_a']);
$router->post('/admin-incentivo-E_a/crear', [Produc_incenController::class, 'crearE_a']);
$router->get('/admin-incentivo-E_a/actualizar', [Produc_incenController::class, 'actualizarE_a']);
$router->post('/admin-incentivo-E_a/actualizar', [Produc_incenController::class, 'actualizarE_a']);
$router->post('/admin-incentivo-E_a/eliminar', [Produc_incenController::class, 'eliminarE_a']);

$router->get('/admin-incentivo-At_cer/crear', [Produc_incenController::class, 'crearAt_cer']);
$router->post('/admin-incentivo-At_cer/crear', [Produc_incenController::class, 'crearAt_cer']);
$router->get('/admin-incentivo-At_cer/actualizar', [Produc_incenController::class, 'actualizarAt_cer']);
$router->post('/admin-incentivo-At_cer/actualizar', [Produc_incenController::class, 'actualizarAt_cer']);
$router->post('/admin-incentivo-At_cer/eliminar', [Produc_incenController::class, 'eliminarAt_cer']);

$router->get('/admin-incentivo-Alb_cer/crear', [Produc_incenController::class, 'crearAlb_cer']);
$router->post('/admin-incentivo-Alb_cer/crear', [Produc_incenController::class, 'crearAlb_cer']);
$router->get('/admin-incentivo-Alb_cer/actualizar', [Produc_incenController::class, 'actualizarAlb_cer']);
$router->post('/admin-incentivo-Alb_cer/actualizar', [Produc_incenController::class, 'actualizarAlb_cer']);
$router->post('/admin-incentivo-Alb_cer/eliminar', [Produc_incenController::class, 'eliminarAlb_cer']);

$router->get('/admin-incentivo-Tm_ts_cer/crear', [Produc_incenController::class, 'crearTm_ts_cer']);
$router->post('/admin-incentivo-Tm_ts_cer/crear', [Produc_incenController::class, 'crearTm_ts_cer']);
$router->get('/admin-incentivo-Tm_ts_cer/actualizar', [Produc_incenController::class, 'actualizarTm_ts_cer']);
$router->post('/admin-incentivo-Tm_ts_cer/actualizar', [Produc_incenController::class, 'actualizarTm_ts_cer']);
$router->post('/admin-incentivo-Tm_ts_cer/eliminar', [Produc_incenController::class, 'eliminarTm_ts_cer']);

$router->get('/admin-incentivo-M_e_ll_l_cer/crear', [Produc_incenController::class, 'crearM_e_ll_l_cer']);
$router->post('/admin-incentivo-M_e_ll_l_cer/crear', [Produc_incenController::class, 'crearM_e_ll_l_cer']);
$router->get('/admin-incentivo-M_e_ll_l_cer/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_cer']);
$router->post('/admin-incentivo-M_e_ll_l_cer/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_cer']);
$router->post('/admin-incentivo-M_e_ll_l_cer/eliminar', [Produc_incenController::class, 'eliminarM_e_ll_l_cer']);

$router->get('/admin-incentivo-At_au_cer/crear', [Produc_incenController::class, 'crearAt_au_cer']);
$router->post('/admin-incentivo-At_au_cer/crear', [Produc_incenController::class, 'crearAt_au_cer']);
$router->get('/admin-incentivo-At_au_cer/actualizar', [Produc_incenController::class, 'actualizarAt_au_cer']);
$router->post('/admin-incentivo-At_au_cer/actualizar', [Produc_incenController::class, 'actualizarAt_au_cer']);
$router->post('/admin-incentivo-At_au_cer/eliminar', [Produc_incenController::class, 'eliminarAt_au_cer']);

$router->get('/admin-incentivo-Tl_cer/crear', [Produc_incenController::class, 'crearTl_cer']);
$router->post('/admin-incentivo-Tl_cer/crear', [Produc_incenController::class, 'crearTl_cer']);
$router->get('/admin-incentivo-Tl_cer/actualizar', [Produc_incenController::class, 'actualizarTl_cer']);
$router->post('/admin-incentivo-Tl_cer/actualizar', [Produc_incenController::class, 'actualizarTl_cer']);
$router->post('/admin-incentivo-Tl_cer/eliminar', [Produc_incenController::class, 'eliminarTl_cer']);

$router->get('/admin-incentivo-M_b_cer/crear', [Produc_incenController::class, 'crearM_b_cer']);
$router->post('/admin-incentivo-M_b_cer/crear', [Produc_incenController::class, 'crearM_b_cer']);
$router->get('/admin-incentivo-M_b_cer/actualizar', [Produc_incenController::class, 'actualizarM_b_cer']);
$router->post('/admin-incentivo-M_b_cer/actualizar', [Produc_incenController::class, 'actualizarM_b_cer']);
$router->post('/admin-incentivo-M_b_cer/eliminar', [Produc_incenController::class, 'eliminarM_b_cer']);

/**DIRECTAS */
$router->get('/admin-incentivo-Cs_mc_a_pll_e_s/crear', [Produc_incenController::class, 'crearCs_mc_a_pll_e_s']);
$router->post('/admin-incentivo-Cs_mc_a_pll_e_s/crear', [Produc_incenController::class, 'crearCs_mc_a_pll_e_s']);
$router->get('/admin-incentivo-Cs_mc_a_pll_e_s/actualizar', [Produc_incenController::class, 'actualizarCs_mc_a_pll_e_s']);
$router->post('/admin-incentivo-Cs_mc_a_pll_e_s/actualizar', [Produc_incenController::class, 'actualizarCs_mc_a_pll_e_s']);
$router->post('/admin-incentivo-Cs_mc_a_pll_e_s/eliminar', [Produc_incenController::class, 'eliminarCs_mc_a_pll_e_s']);

$router->get('/admin-incentivo-S_mt_e_dir/crear', [Produc_incenController::class, 'crearS_mt_e_dir']);
$router->post('/admin-incentivo-S_mt_e_dir/crear', [Produc_incenController::class, 'crearS_mt_e_dir']);
$router->get('/admin-incentivo-S_mt_e_dir/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_dir']);
$router->post('/admin-incentivo-S_mt_e_dir/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_dir']);
$router->post('/admin-incentivo-S_mt_e_dir/eliminar', [Produc_incenController::class, 'eliminarS_mt_e_dir']);

$router->get('/admin-incentivo-Amatto_s_mt_e_dir/crear', [Produc_incenController::class, 'crearAmatto_s_mt_e_dir']);
$router->post('/admin-incentivo-Amatto_s_mt_e_dir/crear', [Produc_incenController::class, 'crearAmatto_s_mt_e_dir']);
$router->get('/admin-incentivo-Amatto_s_mt_e_dir/actualizar', [Produc_incenController::class, 'actualizarAmatto_s_mt_e_dir']);
$router->post('/admin-incentivo-Amatto_s_mt_e_dir/actualizar', [Produc_incenController::class, 'actualizarAmatto_s_mt_e_dir']);
$router->post('/admin-incentivo-Amatto_s_mt_e_dir/eliminar', [Produc_incenController::class, 'eliminarAmatto_s_mt_e_dir']);

$router->get('/admin-incentivo-P_ap_dir/crear', [Produc_incenController::class, 'crearP_ap_dir']);
$router->post('/admin-incentivo-P_ap_dir/crear', [Produc_incenController::class, 'crearP_ap_dir']);
$router->get('/admin-incentivo-P_ap_dir/actualizar', [Produc_incenController::class, 'actualizarP_ap_dir']);
$router->post('/admin-incentivo-P_ap_dir/actualizar', [Produc_incenController::class, 'actualizarP_ap_dir']);
$router->post('/admin-incentivo-P_ap_dir/eliminar', [Produc_incenController::class, 'eliminarP_ap_dir']);

$router->get('/admin-incentivo-At_dir/crear', [Produc_incenController::class, 'crearAt_dir']);
$router->post('/admin-incentivo-At_dir/crear', [Produc_incenController::class, 'crearAt_dir']);
$router->get('/admin-incentivo-At_dir/actualizar', [Produc_incenController::class, 'actualizarAt_dir']);
$router->post('/admin-incentivo-At_dir/actualizar', [Produc_incenController::class, 'actualizarAt_dir']);
$router->post('/admin-incentivo-At_dir/eliminar', [Produc_incenController::class, 'eliminarAt_dir']);

$router->get('/admin-incentivo-M_e_ll_l_dir/crear', [Produc_incenController::class, 'crearM_e_ll_l_dir']);
$router->post('/admin-incentivo-M_e_ll_l_dir/crear', [Produc_incenController::class, 'crearM_e_ll_l_dir']);
$router->get('/admin-incentivo-M_e_ll_l_dir/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_dir']);
$router->post('/admin-incentivo-M_e_ll_l_dir/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_dir']);
$router->post('/admin-incentivo-M_e_ll_l_dir/eliminar', [Produc_incenController::class, 'eliminarM_e_ll_l_dir']);

$router->get('/admin-incentivo-At_au_dir/crear', [Produc_incenController::class, 'crearAt_au_dir']);
$router->post('/admin-incentivo-At_au_dir/crear', [Produc_incenController::class, 'crearAt_au_dir']);
$router->get('/admin-incentivo-At_au_dir/actualizar', [Produc_incenController::class, 'actualizarAt_au_dir']);
$router->post('/admin-incentivo-At_au_dir/actualizar', [Produc_incenController::class, 'actualizarAt_au_dir']);
$router->post('/admin-incentivo-At_au_dir/eliminar', [Produc_incenController::class, 'eliminarAt_au_dir']);

$router->get('/admin-incentivo-M_b_dir/crear', [Produc_incenController::class, 'crearM_b_dir']);
$router->post('/admin-incentivo-M_b_dir/crear', [Produc_incenController::class, 'crearM_b_dir']);
$router->get('/admin-incentivo-M_b_dir/actualizar', [Produc_incenController::class, 'actualizarM_b_dir']);
$router->post('/admin-incentivo-M_b_dir/actualizar', [Produc_incenController::class, 'actualizarM_b_dir']);
$router->post('/admin-incentivo-M_b_dir/eliminar', [Produc_incenController::class, 'eliminarM_b_dir']);

/**VIAJES */
$router->get('/admin-incentivo-Lav/crear', [Produc_incenController::class, 'crearLav']);
$router->post('/admin-incentivo-Lav/crear', [Produc_incenController::class, 'crearLav']);
$router->get('/admin-incentivo-Lav/actualizar', [Produc_incenController::class, 'actualizarLav']);
$router->post('/admin-incentivo-Lav/actualizar', [Produc_incenController::class, 'actualizarLav']);
$router->post('/admin-incentivo-Lav/eliminar', [Produc_incenController::class, 'eliminarLav']);

$router->get('/admin-incentivo-A_lav/crear', [Produc_incenController::class, 'crearA_lav']);
$router->post('/admin-incentivo-A_lav/crear', [Produc_incenController::class, 'crearA_lav']);
$router->get('/admin-incentivo-A_lav/actualizar', [Produc_incenController::class, 'actualizarA_lav']);
$router->post('/admin-incentivo-A_lav/actualizar', [Produc_incenController::class, 'actualizarA_lav']);
$router->post('/admin-incentivo-A_lav/eliminar', [Produc_incenController::class, 'eliminarA_lav']);

$router->get('/admin-incentivo-Omp/crear', [Produc_incenController::class, 'crearOmp']);
$router->post('/admin-incentivo-Omp/crear', [Produc_incenController::class, 'crearOmp']);
$router->get('/admin-incentivo-Omp/actualizar', [Produc_incenController::class, 'actualizarOmp']);
$router->post('/admin-incentivo-Omp/actualizar', [Produc_incenController::class, 'actualizarOmp']);
$router->post('/admin-incentivo-Omp/eliminar', [Produc_incenController::class, 'eliminarOmp']);

$router->get('/admin-incentivo-Ot/crear', [Produc_incenController::class, 'crearOt']);
$router->post('/admin-incentivo-Ot/crear', [Produc_incenController::class, 'crearOt']);
$router->get('/admin-incentivo-Ot/actualizar', [Produc_incenController::class, 'actualizarOt']);
$router->post('/admin-incentivo-Ot/actualizar', [Produc_incenController::class, 'actualizarOt']);
$router->post('/admin-incentivo-Ot/eliminar', [Produc_incenController::class, 'eliminarOt']);

$router->get('/admin-incentivo-Tc/crear', [Produc_incenController::class, 'crearTc']);
$router->post('/admin-incentivo-Tc/crear', [Produc_incenController::class, 'crearTc']);
$router->get('/admin-incentivo-Tc/actualizar', [Produc_incenController::class, 'actualizarTc']);
$router->post('/admin-incentivo-Tc/actualizar', [Produc_incenController::class, 'actualizarTc']);
$router->post('/admin-incentivo-Tc/eliminar', [Produc_incenController::class, 'eliminarTc']);

$router->get('/admin-incentivo-T_campo/crear', [Produc_incenController::class, 'crearT_campo']);
$router->post('/admin-incentivo-T_campo/crear', [Produc_incenController::class, 'crearT_campo']);
$router->get('/admin-incentivo-T_campo/actualizar', [Produc_incenController::class, 'actualizarT_campo']);
$router->post('/admin-incentivo-T_campo/actualizar', [Produc_incenController::class, 'actualizarT_campo']);
$router->post('/admin-incentivo-T_campo/eliminar', [Produc_incenController::class, 'eliminarT_campo']);

$router->get('/admin-incentivo-Otx_aco/crear', [Produc_incenController::class, 'crearOtx_aco']);
$router->post('/admin-incentivo-Otx_aco/crear', [Produc_incenController::class, 'crearOtx_aco']);
$router->get('/admin-incentivo-Otx_aco/actualizar', [Produc_incenController::class, 'actualizarOtx_aco']);
$router->post('/admin-incentivo-Otx_aco/actualizar', [Produc_incenController::class, 'actualizarOtx_aco']);
$router->post('/admin-incentivo-Otx_aco/eliminar', [Produc_incenController::class, 'eliminarOtx_aco']);

$router->get('/admin-incentivo-Amsv/crear', [Produc_incenController::class, 'crearAmsv']);
$router->post('/admin-incentivo-Amsv/crear', [Produc_incenController::class, 'crearAmsv']);
$router->get('/admin-incentivo-Amsv/actualizar', [Produc_incenController::class, 'actualizarAmsv']);
$router->post('/admin-incentivo-Amsv/actualizar', [Produc_incenController::class, 'actualizarAmsv']);
$router->post('/admin-incentivo-Amsv/eliminar', [Produc_incenController::class, 'eliminarAmsv']);

$router->get('/admin-incentivo-Cs/crear', [Produc_incenController::class, 'crearCs']);
$router->post('/admin-incentivo-Cs/crear', [Produc_incenController::class, 'crearCs']);
$router->get('/admin-incentivo-Cs/actualizar', [Produc_incenController::class, 'actualizarCs']);
$router->post('/admin-incentivo-Cs/actualizar', [Produc_incenController::class, 'actualizarCs']);
$router->post('/admin-incentivo-Cs/eliminar', [Produc_incenController::class, 'eliminarCs']);

$router->get('/admin-incentivo-S_mt_e_via/crear', [Produc_incenController::class, 'crearS_mt_e_via']);
$router->post('/admin-incentivo-S_mt_e_via/crear', [Produc_incenController::class, 'crearS_mt_e_via']);
$router->get('/admin-incentivo-S_mt_e_via/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_via']);
$router->post('/admin-incentivo-S_mt_e_via/actualizar', [Produc_incenController::class, 'actualizarS_mt_e_via']);
$router->post('/admin-incentivo-S_mt_e_via/eliminar', [Produc_incenController::class, 'eliminarS_mt_e_via']);

$router->get('/admin-incentivo-C_p_ap_via/crear', [Produc_incenController::class, 'crearC_p_ap_via']);
$router->post('/admin-incentivo-C_p_ap_via/crear', [Produc_incenController::class, 'crearC_p_ap_via']);
$router->get('/admin-incentivo-C_p_ap_via/actualizar', [Produc_incenController::class, 'actualizarC_p_ap_via']);
$router->post('/admin-incentivo-C_p_ap_via/actualizar', [Produc_incenController::class, 'actualizarC_p_ap_via']);
$router->post('/admin-incentivo-C_p_ap_via/eliminar', [Produc_incenController::class, 'eliminarC_p_ap_via']);

$router->get('/admin-incentivo-E_a_via/crear', [Produc_incenController::class, 'crearE_a_via']);
$router->post('/admin-incentivo-E_a_via/crear', [Produc_incenController::class, 'crearE_a_via']);
$router->get('/admin-incentivo-E_a_via/actualizar', [Produc_incenController::class, 'actualizarE_a_via']);
$router->post('/admin-incentivo-E_a_via/actualizar', [Produc_incenController::class, 'actualizarE_a_via']);
$router->post('/admin-incentivo-E_a_via/eliminar', [Produc_incenController::class, 'eliminarE_a_via']);

$router->get('/admin-incentivo-At_via/crear', [Produc_incenController::class, 'crearAt_via']);
$router->post('/admin-incentivo-At_via/crear', [Produc_incenController::class, 'crearAt_via']);
$router->get('/admin-incentivo-At_via/actualizar', [Produc_incenController::class, 'actualizarAt_via']);
$router->post('/admin-incentivo-At_via/actualizar', [Produc_incenController::class, 'actualizarAt_via']);
$router->post('/admin-incentivo-At_via/eliminar', [Produc_incenController::class, 'eliminarAt_via']);

$router->get('/admin-incentivo-Tm_3_pcos/crear', [Produc_incenController::class, 'crearTm_3_pcos']);
$router->post('/admin-incentivo-Tm_3_pcos/crear', [Produc_incenController::class, 'crearTm_3_pcos']);
$router->get('/admin-incentivo-Tm_3_pcos/actualizar', [Produc_incenController::class, 'actualizarTm_3_pcos']);
$router->post('/admin-incentivo-Tm_3_pcos/actualizar', [Produc_incenController::class, 'actualizarTm_3_pcos']);
$router->post('/admin-incentivo-Tm_3_pcos/eliminar', [Produc_incenController::class, 'eliminarTm_3_pcos']);

$router->get('/admin-incentivo-M_e_ll_l_vie/crear', [Produc_incenController::class, 'crearM_e_ll_l_vie']);
$router->post('/admin-incentivo-M_e_ll_l_vie/crear', [Produc_incenController::class, 'crearM_e_ll_l_vie']);
$router->get('/admin-incentivo-M_e_ll_l_vie/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_vie']);
$router->post('/admin-incentivo-M_e_ll_l_vie/actualizar', [Produc_incenController::class, 'actualizarM_e_ll_l_vie']);
$router->post('/admin-incentivo-M_e_ll_l_vie/eliminar', [Produc_incenController::class, 'eliminarM_e_ll_l_vie']);

$router->get('/admin-incentivo-At_au_via/crear', [Produc_incenController::class, 'crearAt_au_via']);
$router->post('/admin-incentivo-At_au_via/crear', [Produc_incenController::class, 'crearAt_au_via']);
$router->get('/admin-incentivo-At_au_via/actualizar', [Produc_incenController::class, 'actualizarAt_au_via']);
$router->post('/admin-incentivo-At_au_via/actualizar', [Produc_incenController::class, 'actualizarAt_au_via']);
$router->post('/admin-incentivo-At_au_via/eliminar', [Produc_incenController::class, 'eliminarAt_au_via']);

$router->get('/admin-incentivo-M_b_via/crear', [Produc_incenController::class, 'crearM_b_via']);
$router->post('/admin-incentivo-M_b_via/crear', [Produc_incenController::class, 'crearM_b_via']);
$router->get('/admin-incentivo-M_b_via/actualizar', [Produc_incenController::class, 'actualizarM_b_via']);
$router->post('/admin-incentivo-M_b_via/actualizar', [Produc_incenController::class, 'actualizarM_b_via']);
$router->post('/admin-incentivo-M_b_via/eliminar', [Produc_incenController::class, 'eliminarM_b_via']);

//incidencia
$router->get('/admin-incidencia', [IncidenciaController::class, 'index']);
$router->get('/admin-incidencia/crear', [IncidenciaController::class, 'crear']);
$router->post('/admin-incidencia/crear', [IncidenciaController::class, 'crear']);
$router->get('/admin-incidencia/actualizar', [IncidenciaController::class, 'actualizar']);
$router->post('/admin-incidencia/actualizar', [IncidenciaController::class, 'actualizar']);
$router->post('/admin-incidencia/eliminar', [IncidenciaController::class, 'eliminar']);

//produccion
$router->get('/admin-produccion', [ProduccionController::class, 'index']);
$router->get('/admin-produccion/crear', [ProduccionController::class, 'crear']);
$router->post('/admin-produccion/crear', [ProduccionController::class, 'crear']);
$router->get('/admin-produccion/actualizar', [ProduccionController::class, 'actualizar']);
$router->post('/admin-produccion/actualizar', [ProduccionController::class, 'actualizar']);
$router->post('/admin-produccion/eliminar', [ProduccionController::class, 'eliminar']);

//salarios
$router->get('/admin-salarios', [SalariosController::class, 'index']);
$router->get('/admin-salarios/crear', [SalariosController::class, 'crear']);
$router->post('/admin-salarios/crear', [SalariosController::class, 'crear']);
$router->get('/admin-salarios/actualizar', [SalariosController::class, 'actualizar']);
$router->post('/admin-salarios/actualizar', [SalariosController::class, 'actualizar']);
$router->post('/admin-salarios/eliminar', [SalariosController::class, 'eliminar']);

//semana
$router->get('/admin-semana', [SemanaController::class, 'index']);
$router->get('/admin-semana/crear', [SemanaController::class, 'crear']);
$router->post('/admin-semana/crear', [SemanaController::class, 'crear']);
$router->get('/admin-semana/actualizar', [SemanaController::class, 'actualizar']);
$router->post('/admin-semana/actualizar', [SemanaController::class, 'actualizar']);
$router->post('/admin-semana/eliminar', [SemanaController::class, 'eliminar']);


//comprueba y valida las rutas, que existan y les asigna las funciones del controlador

$router->comprobarRutas();
?>
