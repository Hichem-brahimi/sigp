<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDBParamedical
 *
 * @ORM\Table(name="ligne_d_b_paramedical")
 * @ORM\Entity
 */
class LigneDBParamedical
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_d_b_paramedical", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneDBParamedical;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Motif", type="string", length=300, nullable=true)
     */
    private $motif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDd_b_paramedical", type="integer", nullable=true)
     */
    private $iddBParamedical;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDliste_bilan_paramedical", type="integer", nullable=true)
     */
    private $idlisteBilanParamedical;

    public function getIdligneDBParamedical(): ?int
    {
        return $this->idligneDBParamedical;
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

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): self
    {
        $this->motif = $motif;

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

    public function getIddBParamedical(): ?int
    {
        return $this->iddBParamedical;
    }

    public function setIddBParamedical(?int $iddBParamedical): self
    {
        $this->iddBParamedical = $iddBParamedical;

        return $this;
    }

    public function getIdlisteBilanParamedical(): ?int
    {
        return $this->idlisteBilanParamedical;
    }

    public function setIdlisteBilanParamedical(?int $idlisteBilanParamedical): self
    {
        $this->idlisteBilanParamedical = $idlisteBilanParamedical;

        return $this;
    }


}
