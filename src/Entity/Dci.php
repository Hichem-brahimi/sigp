<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dci
 *
 * @ORM\Table(name="dci")
 * @ORM\Entity
 */
class Dci
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDCI", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="N_ENREG", type="string", length=255, nullable=true)
     */
    private $nEnreg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MARQUE_", type="string", length=255, nullable=true)
     */
    private $marque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FORME_", type="string", length=255, nullable=true)
     */
    private $forme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOSAGE_", type="string", length=255, nullable=true)
     */
    private $dosage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONDITIONNEMENT_", type="string", length=255, nullable=true)
     */
    private $conditionnement;

    public function getIddci(): ?int
    {
        return $this->iddci;
    }

    public function getNEnreg(): ?string
    {
        return $this->nEnreg;
    }

    public function setNEnreg(?string $nEnreg): self
    {
        $this->nEnreg = $nEnreg;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(?string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getDosage(): ?string
    {
        return $this->dosage;
    }

    public function setDosage(?string $dosage): self
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getConditionnement(): ?string
    {
        return $this->conditionnement;
    }

    public function setConditionnement(?string $conditionnement): self
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }


}
