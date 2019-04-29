<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExaminRadioFic
 *
 * @ORM\Table(name="examin_radio_fic")
 * @ORM\Entity
 */
class ExaminRadioFic
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IDpatient_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpatientRadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_Medecin", type="integer", nullable=true)
     */
    private $codeMedecin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_Patient", type="bigint", nullable=true)
     */
    private $codePatient = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="resultats", type="string", length=550, nullable=true)
     */
    private $resultats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_patient", type="string", length=50, nullable=true)
     */
    private $nomPatient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_patient", type="integer", nullable=true)
     */
    private $agePatient = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_Medecin", type="string", length=50, nullable=true)
     */
    private $nomMedecin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date_Arrivee", type="string", length=50, nullable=true)
     */
    private $dateArrivee;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rst_ok", type="boolean", nullable=true)
     */
    private $rstOk = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_manip", type="string", length=150, nullable=true)
     */
    private $nomManip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=true)
     */
    private $idticket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDdossier_medical", type="integer", nullable=true)
     */
    private $iddossierMedical;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

    public function getIdconsultation(): ?int
    {
        return $this->idconsultation;
    }

    public function setIdconsultation(?int $idconsultation): self
    {
        $this->idconsultation = $idconsultation;

        return $this;
    }

    public function getIdpatientRadio(): ?int
    {
        return $this->idpatientRadio;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCodeMedecin(): ?int
    {
        return $this->codeMedecin;
    }

    public function setCodeMedecin(?int $codeMedecin): self
    {
        $this->codeMedecin = $codeMedecin;

        return $this;
    }

    public function getCodePatient(): ?int
    {
        return $this->codePatient;
    }

    public function setCodePatient(?int $codePatient): self
    {
        $this->codePatient = $codePatient;

        return $this;
    }

    public function getResultats(): ?string
    {
        return $this->resultats;
    }

    public function setResultats(?string $resultats): self
    {
        $this->resultats = $resultats;

        return $this;
    }

    public function getNomPatient(): ?string
    {
        return $this->nomPatient;
    }

    public function setNomPatient(?string $nomPatient): self
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    public function getAgePatient(): ?int
    {
        return $this->agePatient;
    }

    public function setAgePatient(?int $agePatient): self
    {
        $this->agePatient = $agePatient;

        return $this;
    }

    public function getNomMedecin(): ?string
    {
        return $this->nomMedecin;
    }

    public function setNomMedecin(?string $nomMedecin): self
    {
        $this->nomMedecin = $nomMedecin;

        return $this;
    }

    public function getDateArrivee(): ?string
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(?string $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getRstOk(): ?bool
    {
        return $this->rstOk;
    }

    public function setRstOk(?bool $rstOk): self
    {
        $this->rstOk = $rstOk;

        return $this;
    }

    public function getNomManip(): ?string
    {
        return $this->nomManip;
    }

    public function setNomManip(?string $nomManip): self
    {
        $this->nomManip = $nomManip;

        return $this;
    }

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function setIdticket(?int $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }

    public function getIddossierMedical(): ?int
    {
        return $this->iddossierMedical;
    }

    public function setIddossierMedical(?int $iddossierMedical): self
    {
        $this->iddossierMedical = $iddossierMedical;

        return $this;
    }

    public function getIdcompteUtilisateur(): ?int
    {
        return $this->idcompteUtilisateur;
    }

    public function setIdcompteUtilisateur(?int $idcompteUtilisateur): self
    {
        $this->idcompteUtilisateur = $idcompteUtilisateur;

        return $this;
    }


}
