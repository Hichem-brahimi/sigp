<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultationAnalyseFic
 *
 * @ORM\Table(name="consultation_analyse_fic")
 * @ORM\Entity
 */
class ConsultationAnalyseFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDconsultation_analyse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconsultationAnalyse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Arrivee", type="date", nullable=true)
     */
    private $dateArrivee;

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

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure_Arrivee", type="time", nullable=true)
     */
    private $heureArrivee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=300, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=true)
     */
    private $idticket;

    public function getIdconsultationAnalyse(): ?int
    {
        return $this->idconsultationAnalyse;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(?\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

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

    public function getHeureArrivee(): ?\DateTimeInterface
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(?\DateTimeInterface $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

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
