<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DBParamedical
 *
 * @ORM\Table(name="d_b_paramedical")
 * @ORM\Entity
 */
class DBParamedical
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDd_b_paramedical", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddBParamedical;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=200, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    public function getIddBParamedical(): ?int
    {
        return $this->iddBParamedical;
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
