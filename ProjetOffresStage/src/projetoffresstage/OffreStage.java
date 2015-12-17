package projetoffresstage;
import java.util.Date;
/**
 *
 * @author jeremy
 */
public class OffreStage {
    private String libelleOffre;
    private String descriptifOffre;
    private String domaineOffre;
    private Date dateDebutOffre;
    private String dureeOffre;
    private String cheminOffre;
    private boolean Valide;
    private Entreprise lEntreprise;

    public OffreStage(String libelleOffre, String descriptifOffre, String domaineOffre, Date dateDebutOffre, String dureeOffre, String cheminOffre, boolean Valide, Entreprise lEntreprise) {
        this.libelleOffre = libelleOffre;
        this.descriptifOffre = descriptifOffre;
        this.domaineOffre = domaineOffre;
        this.dateDebutOffre = dateDebutOffre;
        this.dureeOffre = dureeOffre;
        this.cheminOffre = cheminOffre;
        this.Valide = Valide;
        this.lEntreprise=lEntreprise;
    }

    public String getLibelleOffre() {
        return libelleOffre;
    }

    public String getDescriptifOffre() {
        return descriptifOffre;
    }

    public String getDomaineOffre() {
        return domaineOffre;
    }

    public Date getDateDebutOffre() {
        return dateDebutOffre;
    }

    public String getDureeOffre() {
        return dureeOffre;
    }

    public String getCheminOffre() {
        return cheminOffre;
    }

    public boolean isValide() {
        return Valide;
    }

    public void setLibelleOffre(String libelleOffre) {
        this.libelleOffre = libelleOffre;
    }

    public void setDescriptifOffre(String descriptifOffre) {
        this.descriptifOffre = descriptifOffre;
    }

    public void setDomaineOffre(String domaineOffre) {
        this.domaineOffre = domaineOffre;
    }

    public void setDateDebutOffre(Date dateDebutOffre) {
        this.dateDebutOffre = dateDebutOffre;
    }

    public void setDureeOffre(String dureeOffre) {
        this.dureeOffre = dureeOffre;
    }

    public void setCheminOffre(String cheminOffre) {
        this.cheminOffre = cheminOffre;
    }

    public void setValide(boolean Valide) {
        this.Valide = Valide;
    }
    
    public Entreprise getLEntreprise(){
        return lEntreprise;
    }
    
    public void setLEntreprise(){
        this.lEntreprise = lEntreprise;
    }
    
}
