<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoinsFic
 *
 * @ORM\Table(name="soins_fic")
 * @ORM\Entity
 */
class SoinsFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDsoins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsoins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cODE_soin", type="string", length=50, nullable=true)
     */
    private $codeSoin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lIB_soin", type="string", length=50, nullable=true)
     */
    private $libSoin;

    public function getIdsoins(): ?int
    {
        return $this->idsoins;
    }

    public function getCodeSoin(): ?string
    {
        return $this->codeSoin;
    }

    public function setCodeSoin(?string $codeSoin): self
    {
        $this->codeSoin = $codeSoin;

        return $this;
    }

    public function getLibSoin(): ?string
    {
        return $this->libSoin;
    }

    public function setLibSoin(?string $libSoin): self
    {
        $this->libSoin = $libSoin;

        return $this;
    }


}
