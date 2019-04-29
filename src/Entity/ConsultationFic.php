<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultationFic
 *
 * @ORM\Table(name="consultation_fic")
 * @ORM\Entity
 */
class ConsultationFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsultation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Heure_Arrivee", type="time", nullable=false)
     */
    private $heureArrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Heure_Sortie", type="time", nullable=false)
     */
    private $heureSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="Diagnnostic", type="string", length=500, nullable=false)
     */
    private $diagnnostic;

    /**
     * @var int
     *
     * @ORM\Column(name="IDDossier_administratif", type="integer", nullable=false)
     */
    private $iddossierAdministratif;

    /**
     * @var int
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=false)
     */
    private $idcompteUtilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=false)
     */
    private $idticket;

    public function getIdconsultation(): ?int
    {
        return $this->idconsultation;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getHeureArrivee(): ?\DateTimeInterface
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(\DateTimeInterface $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getHeureSortie(): ?\DateTimeInterface
    {
        return $this->heureSortie;
    }

    public function setHeureSortie(\DateTimeInterface $heureSortie): self
    {
        $this->heureSortie = $heureSortie;

        return $this;
    }

    public function getDiagnnostic(): ?string
    {
        return $this->diagnnostic;
    }

    public function setDiagnnostic(string $diagnnostic): self
    {
        $this->diagnnostic = $diagnnostic;

        return $this;
    }

    public function getIddossierAdministratif(): ?int
    {
        return $this->iddossierAdministratif;
    }

    public function setIddossierAdministratif(int $iddossierAdministratif): self
    {
        $this->iddossierAdministratif = $iddossierAdministratif;

        return $this;
    }

    public function getIdcompteUtilisateur(): ?int
    {
        return $this->idcompteUtilisateur;
    }

    public function setIdcompteUtilisateur(int $idcompteUtilisateur): self
    {
        $this->idcompteUtilisateur = $idcompteUtilisateur;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function setIdticket(int $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }


}
