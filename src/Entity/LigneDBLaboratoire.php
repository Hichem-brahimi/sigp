<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDBLaboratoire
 *
 * @ORM\Table(name="ligne_d_b_laboratoire")
 * @ORM\Entity
 */
class LigneDBLaboratoire
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_d_b_laboratoire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneDBLaboratoire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=50, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDd_b_laboratoire", type="integer", nullable=true)
     */
    private $iddBLaboratoire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDAnalyse_medicale", type="integer", nullable=true)
     */
    private $idanalyseMedicale;

    public function getIdligneDBLaboratoire(): ?int
    {
        return $this->idligneDBLaboratoire;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

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

    public function getIddBLaboratoire(): ?int
    {
        return $this->iddBLaboratoire;
    }

    public function setIddBLaboratoire(?int $iddBLaboratoire): self
    {
        $this->iddBLaboratoire = $iddBLaboratoire;

        return $this;
    }

    public function getIdanalyseMedicale(): ?int
    {
        return $this->idanalyseMedicale;
    }

    public function setIdanalyseMedicale(?int $idanalyseMedicale): self
    {
        $this->idanalyseMedicale = $idanalyseMedicale;

        return $this;
    }


}
