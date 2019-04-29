<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneBASoin
 *
 * @ORM\Table(name="ligne_b_a_soin")
 * @ORM\Entity
 */
class LigneBASoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_b_a_soin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneBASoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarquue", type="string", length=100, nullable=true)
     */
    private $remarquue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDbilan_activite_soin", type="integer", nullable=true)
     */
    private $idbilanActiviteSoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDsoins", type="integer", nullable=true)
     */
    private $idsoins;

    public function getIdligneBASoin(): ?int
    {
        return $this->idligneBASoin;
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

    public function getRemarquue(): ?string
    {
        return $this->remarquue;
    }

    public function setRemarquue(?string $remarquue): self
    {
        $this->remarquue = $remarquue;

        return $this;
    }

    public function getIdbilanActiviteSoin(): ?int
    {
        return $this->idbilanActiviteSoin;
    }

    public function setIdbilanActiviteSoin(?int $idbilanActiviteSoin): self
    {
        $this->idbilanActiviteSoin = $idbilanActiviteSoin;

        return $this;
    }

    public function getIdsoins(): ?int
    {
        return $this->idsoins;
    }

    public function setIdsoins(?int $idsoins): self
    {
        $this->idsoins = $idsoins;

        return $this;
    }


}
