<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrientationFic
 *
 * @ORM\Table(name="orientation_fic")
 * @ORM\Entity
 */
class OrientationFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDorientation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorientation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="string", length=5000, nullable=true)
     */
    private $observation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    public function getIdorientation(): ?int
    {
        return $this->idorientation;
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
