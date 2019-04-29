<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WilayaFic
 *
 * @ORM\Table(name="wilaya_fic")
 * @ORM\Entity
 */
class WilayaFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="CODE_GEO_WIL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeGeoWil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_ARABE", type="string", length=51, nullable=true)
     */
    private $libArabe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_FRANCAIS", type="string", length=150, nullable=true)
     */
    private $libFrancais;

    public function getCodeGeoWil(): ?int
    {
        return $this->codeGeoWil;
    }

    public function getLibArabe(): ?string
    {
        return $this->libArabe;
    }

    public function setLibArabe(?string $libArabe): self
    {
        $this->libArabe = $libArabe;

        return $this;
    }

    public function getLibFrancais(): ?string
    {
        return $this->libFrancais;
    }

    public function setLibFrancais(?string $libFrancais): self
    {
        $this->libFrancais = $libFrancais;

        return $this;
    }


}
