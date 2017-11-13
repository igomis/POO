<?php
namespace JuegoRol;
require_once 'vendor/autoload.php';

if (isset($_REQUEST['boton'])) {
            $u1 = new $_REQUEST['unidad1']($_REQUEST['nom1'],new $_REQUEST['armadura1'](), new $_REQUEST['arma1']());
            $u2 = new $_REQUEST['unidad2']($_REQUEST['nom2'],new $_REQUEST['armadura2'](), new $_REQUEST['arma2']());
            do {
                $u2->ataque($u1);
                $u1->ataque($u2);
            } while (1 == 1);
        }
