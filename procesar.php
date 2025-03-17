<?php
$numero_habitaciones_simples = null;
$numero_personas_simple = null;
$numero_suites = null;
$numero_personas_suite = null;
$nombre = '';
$correo = '';
$numero_celular = '';

if (!empty($_POST)) {
    $numero_habitaciones_simples = $_POST['numero_habitaciones_simples'];
    $numero_personas_simple = $_POST['numero_personas_simple'];
    $numero_suites = $_POST['numero_suites'];
    $numero_personas_suite = $_POST['numero_personas_suite'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero_celular = $_POST['numero_celular'];

    $VALOR_HABITACION_SIMPLE = 100000;
    $VALOR_SIUTE = $VALOR_HABITACION_SIMPLE + ($VALOR_HABITACION_SIMPLE * 0.10);

    $total_habitaciones_simples = $numero_habitaciones_simples * $VALOR_HABITACION_SIMPLE;
    $total_suites = $numero_suites * $VALOR_SIUTE;

    $total_personas_adicional_simple = 0;

    if ($numero_personas_simple > 1) {
        $total_personas_adicional_simple = ($numero_personas_simple - 1) * 30000;
    }

    $total_personas_adicional_suite = 0;

    if ($numero_personas_suite > 1) {
        $total_personas_adicional_suite = ($numero_personas_suite - 1) * 30000;
    }

    $total = $total_habitaciones_simples + $total_suites + $total_personas_adicional_simple + $total_personas_adicional_suite;
}
