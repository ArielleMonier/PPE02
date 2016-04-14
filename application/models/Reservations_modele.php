<?php

class reservations_modele extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->library('session');
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

    public function set_formulaire() {

        $data = array(
            'idUtil' => $this->input->post('id'),
            'Date_Arrivee' => $this->input->post('date_arrivee'),
            'Date_Depart' => $this->input->post('date_depart'),
            'Nb_Personnes' => $this->input->post('nbpersonnes'),
            'Pension' => $this->input->post('pension'),
            'forfaitMenage' => $this->input->post('forfait')
        );
        return $this->db->insert('reservation', $data);
    }

    public function set_create_compte() {
        $data = array(
            'Login' => $this->input->post('login'),
            'Mdp' => $this->input->post('password'),
            'Nom' => $this->input->post('nom'),
            'Prenom' => $this->input->post('prenom'),
            'Admin' => $this->input->post('admin')
        );
        return $this->db->insert('Utilisateur', $data);
    }
}
