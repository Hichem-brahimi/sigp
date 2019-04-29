<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BilanAnalyse
 *
 * @ORM\Table(name="bilan_analyse")
 * @ORM\Entity
 */
class BilanAnalyse
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDbilan_analyse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbilanAnalyse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_bilan_analyse", type="date", nullable=true)
     */
    private $dateBilanAnalyse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDconsultation_analyse", type="integer", nullable=true)
     */
    private $idconsultationAnalyse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=300, nullable=true)
     */
    private $remarque;

    public function getIdbilanAnalyse(): ?int
    {
        return $this->idbilanAnalyse;
    }

    public function getDateBilanAnalyse(): ?\DateTimeInterface
    {
        return $this->dateBilanAnalyse;
    }

    public function setDateBilanAnalyse(?\DateTimeInterface $dateBilanAnalyse): self
    {
        $this->dateBilanAnalyse = $dateBilanAnalyse;

        return $this;
    }

    public function getIdconsultationAnalyse(): ?int
    {
        return $this->idconsultationAnalyse;
    }

    public function setIdconsultationAnalyse(?int $idconsultationAnalyse): self
    {
        $this->idconsultationAnalyse = $idconsultationAnalyse;

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


}
