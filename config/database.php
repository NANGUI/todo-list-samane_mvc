<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngosecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE DERNIER (GIT).
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
/**
 * Fonction permettant de configurer la connexion à la base de donnée
 */
function connexion_params(){
    return array(
                'host' => '127.0.0.1',
                'user' => 'root',
                'password' => '',
                'database_name' => 'samanemvc',
                'etat' => 'on'//metter à on pour demarrer la base
                );
}
?>