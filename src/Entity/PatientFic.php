<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PatientFic
 *
 * @ORM\Table(name="patient_fic")
 * @ORM\Entity
 */
class PatientFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPatient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Patient", type="string", length=50, nullable=true)
     */
    private $codePatient = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Nais", type="date", nullable=true)
     */
    private $dateNais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieu_Nais", type="string", length=50, nullable=true)
     */
    private $lieuNais;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PRESUME", type="boolean", nullable=true)
     */
    private $presume = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Annee_Nais", type="integer", nullable=true)
     */
    private $anneeNais = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Sexe", type="smallint", nullable=true)
     */
    private $sexe = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Groupe_Sanguin", type="smallint", nullable=true)
     */
    private $groupeSanguin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NSS", type="string", length=12, nullable=true)
     */
    private $nss;

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
     * @ORM\Column(name="N_Carte_Ident", type="string", length=50, nullable=true)
     */
    private $nCarteIdent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_etat_civile", type="string", length=50, nullable=true)
     */
    private $nEtatCivile;

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }

    public function getCodePatient(): ?string
    {
        return $this->codePatient;
    }

    public function setCodePatient(?string $codePatient): self
    {
        $this->codePatient = $codePatient;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->dateNais;
    }

    public function setDateNais(?\DateTimeInterface $dateNais): self
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    public function getLieuNais(): ?string
    {
        return $this->lieuNais;
    }

    public function setLieuNais(?string $lieuNais): self
    {
        $this->lieuNais = $lieuNais;

        return $this;
    }

    public function getPresume(): ?bool
    {
        return $this->presume;
    }

    public function setPresume(?bool $presume): self
    {
        $this->presume = $presume;

        return $this;
    }

    public function getAnneeNais(): ?int
    {
        return $this->anneeNais;
    }

    public function setAnneeNais(?int $anneeNais): self
    {
        $this->anneeNais = $anneeNais;

        return $this;
    }

    public function getSexe(): ?int
    {
        return $this->sexe;
    }

    public function setSexe(?int $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getGroupeSanguin(): ?int
    {
        return $this->groupeSanguin;
    }

    public function setGroupeSanguin(?int $groupeSanguin): self
    {
        $this->groupeSanguin = $groupeSanguin;

        return $this;
    }

    public function getNss(): ?string
    {
        return $this->nss;
    }

    public function setNss(?string $nss): self
    {
        $this->nss = $nss;

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

    public function getNCarteIdent(): ?string
    {
        return $this->nCarteIdent;
    }

    public function setNCarteIdent(?string $nCarteIdent): self
    {
        $this->nCarteIdent = $nCarteIdent;

        return $this;
    }

    public function getNEtatCivile(): ?string
    {
        return $this->nEtatCivile;
    }

    public function setNEtatCivile(?string $nEtatCivile): self
    {
        $this->nEtatCivile = $nEtatCivile;

        return $this;
    }


}
