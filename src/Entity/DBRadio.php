<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBRadio
 *
 * @ORM\Table(name="d_b_radio")
 * @ORM\Entity
 */
class DBRadio
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDd_b_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddBRadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="string", length=350, nullable=true)
     */
    private $observation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    public function getIddBRadio(): ?int
    {
        return $this->iddBRadio;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

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
