<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdennanceFic
 *
 * @ORM\Table(name="ordennance_fic")
 * @ORM\Entity
 */
class OrdennanceFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDOrdennance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idordennance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date_Consultation", type="string", length=50, nullable=true)
     */
    private $dateConsultation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_or", type="integer", nullable=true)
     */
    private $typeOr = '0';

    public function getIdordennance(): ?int
    {
        return $this->idordennance;
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

    public function getDateConsultation(): ?string
    {
        return $this->dateConsultation;
    }

    public function setDateConsultation(?string $dateConsultation): self
    {
        $this->dateConsultation = $dateConsultation;

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

    public function getTypeOr(): ?int
    {
        return $this->typeOr;
    }

    public function setTypeOr(?int $typeOr): self
    {
        $this->typeOr = $typeOr;

        return $this;
    }


}
