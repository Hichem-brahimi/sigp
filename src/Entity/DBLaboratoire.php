<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBLaboratoire
 *
 * @ORM\Table(name="d_b_laboratoire")
 * @ORM\Entity
 */
class DBLaboratoire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDd_b_laboratoire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddBLaboratoire;

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

    public function getIddBLaboratoire(): ?int
    {
        return $this->iddBLaboratoire;
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
