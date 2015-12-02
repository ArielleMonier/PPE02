<?php

class Reservations extends CI_Controller {

    public function afficher($numclient = 0) {

        if ($numclient == 0) {
            show_404(); //Erreur 404
        }

        $this->load->model('Reservations_modele');

        $data['titre'] = "Mes réservations";
        $data['num'] = $numclient;
        $data['res'] = $this->Reservations_modele->get_res($numclient);


        /**
         * Chargement de la vue 
         */
        $this->load->view('templates/header', $data);
        $this->load->view('reservations/afficher', $data);
        $this->load->view('templates/footer', $data);
    }

    public function calendrier($num = 0, $annee = 0, $mois = 0) {

        /**
         * Modification des paramètres du calendrier
         */
        $pref = array(
            'start_day' => '',
            'show_next_prev' => TRUE,
            'next_prev_url' => 'http://localhost/codeigniter/index.php/reservations/calendrier/' . $num,
            'day_type' => 'long'
        );


        /**
         * Chargement de la librairie 'calendar' et du modèle 'Reservations_modele'
         */
        $this->load->library('calendar', $pref);

        $this->load->model('Reservations_modele');

        /**
         * Récupération de la date pour l'afficher dans le calendrier
         */
        $data['res'] = $this->Reservations_modele->get_res($num);

        $data['annee'] = $annee = $this->uri->segment(4);
        $data['mois'] = $mois = $this->uri->segment(5);
        
        $data['jour'] = $this->Reservations_modele->get_jours($num, $annee, $mois);



        /**
         * Appel de la vue 'calendar_templates'
         */
        $this->load->view('templates/calendar_templates', $data);
    }

}
