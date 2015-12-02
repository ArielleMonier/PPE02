<?php

class reservations_modele extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_res($num = 0) {
        if ($num === 0) {
            $query = $this->db->get('reservation');
            return $query->result_array();
        }

        $query = $this->db->get_where('reservation', array('idUtil' => $num));
        return $query->result_array();
    }

    public function get_jours($num, $annee, $mois) {
        $recup_jour = array();
        $query = $this->db->get_where('reservation', array('idUtil' => $num));
        while ($ligne = $query->result_array) {

            list($anneeA, $moisA, $jourA) = explode('-', $ligne['Date_Arrivee']);
            list($anneeD, $moisD, $jourD) = explode('-', $ligne['Date_Depart']);

            array_push($recup_jour, $jourA, $jourD);
            return $recup_jour;
        }
    }

}
