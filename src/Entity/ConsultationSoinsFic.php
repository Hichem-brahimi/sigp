<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultationSoinsFic
 *
 * @ORM\Table(name="consultation_soins_fic")
 * @ORM\Entity
 */
class ConsultationSoinsFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDconsultation_soins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsultationSoins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagnnostic_soin", type="string", length=1150, nullable=true)
     */
    private $diagnnosticSoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDdossier_medical", type="integer", nullable=true)
     */
    private $iddossierMedical;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entre", type="date", nullable=true)
     */
    private $dateEntre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure_Entre", type="time", nullable=true)
     */
    private $heureEntre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_sortie", type="date", nullable=true)
     */
    private $dateSortie;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure_Sortie", type="time", nullable=true)
     */
    private $heureSortie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=true)
     */
    private $idticket;

    public function getIdconsultationSoins(): ?int
    {
        return $this->idconsultationSoins;
    }

    public function getDiagnnosticSoin(): ?string
    {
        return $this->diagnnosticSoin;
    }

    public function setDiagnnosticSoin(?string $diagnnosticSoin): self
    {
        $this->diagnnosticSoin = $diagnnosticSoin;

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

    public function getIddossierMedical(): ?int
    {
        return $this->iddossierMedical;
    }

    public function setIddossierMedical(?int $iddossierMedical): self
    {
        $this->iddossierMedical = $iddossierMedical;

        return $this;
    }

    public function getDateEntre(): ?\DateTimeInterface
    {
        return $this->dateEntre;
    }

    public function setDateEntre(?\DateTimeInterface $dateEntre): self
    {
        $this->dateEntre = $dateEntre;

        return $this;
    }

    public function getHeureEntre(): ?\DateTimeInterface
    {
        return $this->heureEntre;
    }

    public function setHeureEntre(?\DateTimeInterface $heureEntre): self
    {
        $this->heureEntre = $heureEntre;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(?\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getHeureSortie(): ?\DateTimeInterface
    {
        return $this->heureSortie;
    }

    public function setHeureSortie(?\DateTimeInterface $heureSortie): self
    {
        $this->heureSortie = $heureSortie;

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


}
