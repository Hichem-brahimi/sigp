<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RdvFic
 *
 * @ORM\Table(name="rdv_fic")
 * @ORM\Entity
 */
class RdvFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDRDV", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrdv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_rdv", type="date", nullable=true)
     */
    private $dateRdv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=300, nullable=true)
     */
    private $remarque;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_rdv", type="time", nullable=true)
     */
    private $heureRdv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    public function getIdrdv(): ?int
    {
        return $this->idrdv;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->dateRdv;
    }

    public function setDateRdv(?\DateTimeInterface $dateRdv): self
    {
        $this->dateRdv = $dateRdv;

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

    public function getHeureRdv(): ?\DateTimeInterface
    {
        return $this->heureRdv;
    }

    public function setHeureRdv(?\DateTimeInterface $heureRdv): self
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    public function getIdconsultation(): ?int
    {
        return $this->idconsultation;
    }

    public function setIdconsultation(?int $idconsultation): self
    {
        $this->idconsultation = $idconsultation;

        return $this;
    }


}
