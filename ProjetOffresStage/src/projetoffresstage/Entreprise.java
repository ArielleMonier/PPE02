/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetoffresstage;

/**
 *
 * @author jeremy
 */
public class Entreprise {
    private int raisonSociale;
    private String adresseVilleEntreprise;
    private String adresseRueEntreprise;
    private String adresseCodePostalEntreprise;
    private String telEntreprise;
    private String secteurActivité;

    public Entreprise(int raisonSociale, String adresseVilleEntreprise, String adresseRueEntreprise, String adresseCodePostalEntreprise, String telEntreprise, String secteurActivité) {
        this.raisonSociale = raisonSociale;
        this.adresseVilleEntreprise = adresseVilleEntreprise;
        this.adresseRueEntreprise = adresseRueEntreprise;
        this.adresseCodePostalEntreprise = adresseCodePostalEntreprise;
        this.telEntreprise = telEntreprise;
        this.secteurActivité = secteurActivité;
    }

    public int getRaisonSociale() {
        return raisonSociale;
    }

    public String getAdresseVilleEntreprise() {
        return adresseVilleEntreprise;
    }

    public String getAdresseRueEntreprise() {
        return adresseRueEntreprise;
    }

    public String getAdresseCodePostalEntreprise() {
        return adresseCodePostalEntreprise;
    }

    public String getTelEntreprise() {
        return telEntreprise;
    }

    public String getSecteurActivité() {
        return secteurActivité;
    }

    public void setRaisonSociale(int raisonSociale) {
        this.raisonSociale = raisonSociale;
    }

    public void setAdresseVilleEntreprise(String adresseVilleEntreprise) {
        this.adresseVilleEntreprise = adresseVilleEntreprise;
    }

    public void setAdresseRueEntreprise(String adresseRueEntreprise) {
        this.adresseRueEntreprise = adresseRueEntreprise;
    }

    public void setAdresseCodePostalEntreprise(String adresseCodePostalEntreprise) {
        this.adresseCodePostalEntreprise = adresseCodePostalEntreprise;
    }

    public void setTelEntreprise(String telEntreprise) {
        this.telEntreprise = telEntreprise;
    }

    public void setSecteurActivité(String secteurActivité) {
        this.secteurActivité = secteurActivité;
    }
    
    
}
