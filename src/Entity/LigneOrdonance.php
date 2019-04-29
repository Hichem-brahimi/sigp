<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneOrdonance
 *
 * @ORM\Table(name="ligne_ordonance")
 * @ORM\Entity
 */
class LigneOrdonance
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_ordonance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneOrdonance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="qt", type="string", length=50, nullable=true)
     */
    private $qt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="protocole_dci", type="string", length=100, nullable=true)
     */
    private $protocoleDci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dure_traitement", type="string", length=50, nullable=true)
     */
    private $dureTraitement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDOrdennance", type="integer", nullable=true)
     */
    private $idordennance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDCI", type="integer", nullable=true)
     */
    private $iddci;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=50, nullable=true)
     */
    private $remarque;

    public function getIdligneOrdonance(): ?int
    {
        return $this->idligneOrdonance;
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

    public function getQt(): ?string
    {
        return $this->qt;
    }

    public function setQt(?string $qt): self
    {
        $this->qt = $qt;

        return $this;
    }

    public function getProtocoleDci(): ?string
    {
        return $this->protocoleDci;
    }

    public function setProtocoleDci(?string $protocoleDci): self
    {
        $this->protocoleDci = $protocoleDci;

        return $this;
    }

    public function getDureTraitement(): ?string
    {
        return $this->dureTraitement;
    }

    public function setDureTraitement(?string $dureTraitement): self
    {
        $this->dureTraitement = $dureTraitement;

        return $this;
    }

    public function getIdordennance(): ?int
    {
        return $this->idordennance;
    }

    public function setIdordennance(?int $idordennance): self
    {
        $this->idordennance = $idordennance;

        return $this;
    }

    public function getIddci(): ?int
    {
        return $this->iddci;
    }

    public function setIddci(?int $iddci): self
    {
        $this->iddci = $iddci;

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
