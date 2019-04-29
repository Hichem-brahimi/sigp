<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneBRadio
 *
 * @ORM\Table(name="ligne_b_radio")
 * @ORM\Entity
 */
class LigneBRadio
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_b_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneBRadio;

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
     * @ORM\Column(name="IDd_b_radio", type="integer", nullable=true)
     */
    private $iddBRadio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDliste_des_radio", type="integer", nullable=true)
     */
    private $idlisteDesRadio;

    public function getIdligneBRadio(): ?int
    {
        return $this->idligneBRadio;
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

    public function getIddBRadio(): ?int
    {
        return $this->iddBRadio;
    }

    public function setIddBRadio(?int $iddBRadio): self
    {
        $this->iddBRadio = $iddBRadio;

        return $this;
    }

    public function getIdlisteDesRadio(): ?int
    {
        return $this->idlisteDesRadio;
    }

    public function setIdlisteDesRadio(?int $idlisteDesRadio): self
    {
        $this->idlisteDesRadio = $idlisteDesRadio;

        return $this;
    }


}
