<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeBilanParamedical
 *
 * @ORM\Table(name="liste_bilan_paramedical")
 * @ORM\Entity
 */
class ListeBilanParamedical
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDliste_bilan_paramedical", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlisteBilanParamedical;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lible", type="string", length=300, nullable=true)
     */
    private $lible;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    public function getIdlisteBilanParamedical(): ?int
    {
        return $this->idlisteBilanParamedical;
    }

    public function getLible(): ?string
    {
        return $this->lible;
    }

    public function setLible(?string $lible): self
    {
        $this->lible = $lible;

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
