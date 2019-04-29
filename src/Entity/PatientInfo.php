<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatientInfo
 *
 * @ORM\Table(name="patient_info")
 * @ORM\Entity
 */
class PatientInfo
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Fonction_", type="string", length=50, nullable=true)
     */
    private $fonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mobile", type="string", length=50, nullable=true)
     */
    private $mobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom_Pere", type="string", length=50, nullable=true)
     */
    private $prenomPere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prenom_Mere", type="string", length=50, nullable=true)
     */
    private $nomPrenomMere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Marie", type="string", length=50, nullable=true)
     */
    private $nomMarie;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Mariage_Age", type="boolean", nullable=true)
     */
    private $mariageAge = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Monarchie_Age", type="boolean", nullable=true)
     */
    private $monarchieAge = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Menopose_Age", type="boolean", nullable=true)
     */
    private $menoposeAge = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Complet", type="string", length=100, nullable=true)
     */
    private $nomComplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfan_de_pere", type="string", length=50, nullable=true)
     */
    private $enfanDePere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enfant_de_mere", type="string", length=50, nullable=true)
     */
    private $enfantDeMere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maladie_chronique", type="string", length=50, nullable=true)
     */
    private $maladieChronique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mere_age", type="integer", nullable=true)
     */
    private $mereAge = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mere_gs", type="smallint", nullable=true)
     */
    private $mereGs = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mere_profession", type="string", length=50, nullable=true)
     */
    private $mereProfession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pere_age", type="integer", nullable=true)
     */
    private $pereAge = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="pere_gs", type="smallint", nullable=true)
     */
    private $pereGs = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pere_profession", type="string", length=50, nullable=true)
     */
    private $pereProfession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_socio", type="string", length=50, nullable=true)
     */
    private $conditionSocio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_enfant_dc", type="integer", nullable=true)
     */
    private $nbrEnfantDc = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_enfant_vivant", type="integer", nullable=true)
     */
    private $nbrEnfantVivant = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nbr_nai_prema", type="integer", nullable=true)
     */
    private $nbrNaiPrema = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Type_accouchement", type="smallint", nullable=true)
     */
    private $typeAccouchement = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cesariene", type="smallint", nullable=true)
     */
    private $cesariene = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reanimation", type="smallint", nullable=true)
     */
    private $reanimation = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cri_imediat", type="smallint", nullable=true)
     */
    private $criImediat = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="apgar", type="integer", nullable=true)
     */
    private $apgar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbr_grossesse", type="integer", nullable=true)
     */
    private $nbrGrossesse = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nbr_avortement", type="integer", nullable=true)
     */
    private $nbrAvortement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="allergie", type="string", length=250, nullable=true)
     */
    private $allergie;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="BCG", type="boolean", nullable=true)
     */
    private $bcg = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VIDT", type="boolean", nullable=true)
     */
    private $vidt = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="PMI", type="integer", nullable=true)
     */
    private $pmi = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VAR", type="boolean", nullable=true)
     */
    private $var = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Mere", type="string", length=50, nullable=true)
     */
    private $nomMere;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DTCP", type="boolean", nullable=true)
     */
    private $dtcp = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VAV", type="boolean", nullable=true)
     */
    private $vav = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="anticidants_familiaux", type="string", length=150, nullable=true)
     */
    private $anticidantsFamiliaux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anticidants_parso", type="string", length=150, nullable=true)
     */
    private $anticidantsParso;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPatient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpatient;

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPrenomPere(): ?string
    {
        return $this->prenomPere;
    }

    public function setPrenomPere(?string $prenomPere): self
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    public function getNomPrenomMere(): ?string
    {
        return $this->nomPrenomMere;
    }

    public function setNomPrenomMere(?string $nomPrenomMere): self
    {
        $this->nomPrenomMere = $nomPrenomMere;

        return $this;
    }

    public function getNomMarie(): ?string
    {
        return $this->nomMarie;
    }

    public function setNomMarie(?string $nomMarie): self
    {
        $this->nomMarie = $nomMarie;

        return $this;
    }

    public function getMariageAge(): ?bool
    {
        return $this->mariageAge;
    }

    public function setMariageAge(?bool $mariageAge): self
    {
        $this->mariageAge = $mariageAge;

        return $this;
    }

    public function getMonarchieAge(): ?bool
    {
        return $this->monarchieAge;
    }

    public function setMonarchieAge(?bool $monarchieAge): self
    {
        $this->monarchieAge = $monarchieAge;

        return $this;
    }

    public function getMenoposeAge(): ?bool
    {
        return $this->menoposeAge;
    }

    public function setMenoposeAge(?bool $menoposeAge): self
    {
        $this->menoposeAge = $menoposeAge;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(?string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getEnfanDePere(): ?string
    {
        return $this->enfanDePere;
    }

    public function setEnfanDePere(?string $enfanDePere): self
    {
        $this->enfanDePere = $enfanDePere;

        return $this;
    }

    public function getEnfantDeMere(): ?string
    {
        return $this->enfantDeMere;
    }

    public function setEnfantDeMere(?string $enfantDeMere): self
    {
        $this->enfantDeMere = $enfantDeMere;

        return $this;
    }

    public function getMaladieChronique(): ?string
    {
        return $this->maladieChronique;
    }

    public function setMaladieChronique(?string $maladieChronique): self
    {
        $this->maladieChronique = $maladieChronique;

        return $this;
    }

    public function getMereAge(): ?int
    {
        return $this->mereAge;
    }

    public function setMereAge(?int $mereAge): self
    {
        $this->mereAge = $mereAge;

        return $this;
    }

    public function getMereGs(): ?int
    {
        return $this->mereGs;
    }

    public function setMereGs(?int $mereGs): self
    {
        $this->mereGs = $mereGs;

        return $this;
    }

    public function getMereProfession(): ?string
    {
        return $this->mereProfession;
    }

    public function setMereProfession(?string $mereProfession): self
    {
        $this->mereProfession = $mereProfession;

        return $this;
    }

    public function getPereAge(): ?int
    {
        return $this->pereAge;
    }

    public function setPereAge(?int $pereAge): self
    {
        $this->pereAge = $pereAge;

        return $this;
    }

    public function getPereGs(): ?int
    {
        return $this->pereGs;
    }

    public function setPereGs(?int $pereGs): self
    {
        $this->pereGs = $pereGs;

        return $this;
    }

    public function getPereProfession(): ?string
    {
        return $this->pereProfession;
    }

    public function setPereProfession(?string $pereProfession): self
    {
        $this->pereProfession = $pereProfession;

        return $this;
    }

    public function getConditionSocio(): ?string
    {
        return $this->conditionSocio;
    }

    public function setConditionSocio(?string $conditionSocio): self
    {
        $this->conditionSocio = $conditionSocio;

        return $this;
    }

    public function getNbrEnfantDc(): ?int
    {
        return $this->nbrEnfantDc;
    }

    public function setNbrEnfantDc(?int $nbrEnfantDc): self
    {
        $this->nbrEnfantDc = $nbrEnfantDc;

        return $this;
    }

    public function getNbrEnfantVivant(): ?int
    {
        return $this->nbrEnfantVivant;
    }

    public function setNbrEnfantVivant(?int $nbrEnfantVivant): self
    {
        $this->nbrEnfantVivant = $nbrEnfantVivant;

        return $this;
    }

    public function getNbrNaiPrema(): ?int
    {
        return $this->nbrNaiPrema;
    }

    public function setNbrNaiPrema(?int $nbrNaiPrema): self
    {
        $this->nbrNaiPrema = $nbrNaiPrema;

        return $this;
    }

    public function getTypeAccouchement(): ?int
    {
        return $this->typeAccouchement;
    }

    public function setTypeAccouchement(?int $typeAccouchement): self
    {
        $this->typeAccouchement = $typeAccouchement;

        return $this;
    }

    public function getCesariene(): ?int
    {
        return $this->cesariene;
    }

    public function setCesariene(?int $cesariene): self
    {
        $this->cesariene = $cesariene;

        return $this;
    }

    public function getReanimation(): ?int
    {
        return $this->reanimation;
    }

    public function setReanimation(?int $reanimation): self
    {
        $this->reanimation = $reanimation;

        return $this;
    }

    public function getCriImediat(): ?int
    {
        return $this->criImediat;
    }

    public function setCriImediat(?int $criImediat): self
    {
        $this->criImediat = $criImediat;

        return $this;
    }

    public function getApgar(): ?int
    {
        return $this->apgar;
    }

    public function setApgar(?int $apgar): self
    {
        $this->apgar = $apgar;

        return $this;
    }

    public function getNbrGrossesse(): ?int
    {
        return $this->nbrGrossesse;
    }

    public function setNbrGrossesse(?int $nbrGrossesse): self
    {
        $this->nbrGrossesse = $nbrGrossesse;

        return $this;
    }

    public function getNbrAvortement(): ?int
    {
        return $this->nbrAvortement;
    }

    public function setNbrAvortement(?int $nbrAvortement): self
    {
        $this->nbrAvortement = $nbrAvortement;

        return $this;
    }

    public function getAllergie(): ?string
    {
        return $this->allergie;
    }

    public function setAllergie(?string $allergie): self
    {
        $this->allergie = $allergie;

        return $this;
    }

    public function getBcg(): ?bool
    {
        return $this->bcg;
    }

    public function setBcg(?bool $bcg): self
    {
        $this->bcg = $bcg;

        return $this;
    }

    public function getVidt(): ?bool
    {
        return $this->vidt;
    }

    public function setVidt(?bool $vidt): self
    {
        $this->vidt = $vidt;

        return $this;
    }

    public function getPmi(): ?int
    {
        return $this->pmi;
    }

    public function setPmi(?int $pmi): self
    {
        $this->pmi = $pmi;

        return $this;
    }

    public function getVar(): ?bool
    {
        return $this->var;
    }

    public function setVar(?bool $var): self
    {
        $this->var = $var;

        return $this;
    }

    public function getNomMere(): ?string
    {
        return $this->nomMere;
    }

    public function setNomMere(?string $nomMere): self
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    public function getDtcp(): ?bool
    {
        return $this->dtcp;
    }

    public function setDtcp(?bool $dtcp): self
    {
        $this->dtcp = $dtcp;

        return $this;
    }

    public function getVav(): ?bool
    {
        return $this->vav;
    }

    public function setVav(?bool $vav): self
    {
        $this->vav = $vav;

        return $this;
    }

    public function getAnticidantsFamiliaux(): ?string
    {
        return $this->anticidantsFamiliaux;
    }

    public function setAnticidantsFamiliaux(?string $anticidantsFamiliaux): self
    {
        $this->anticidantsFamiliaux = $anticidantsFamiliaux;

        return $this;
    }

    public function getAnticidantsParso(): ?string
    {
        return $this->anticidantsParso;
    }

    public function setAnticidantsParso(?string $anticidantsParso): self
    {
        $this->anticidantsParso = $anticidantsParso;

        return $this;
    }

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }


}
