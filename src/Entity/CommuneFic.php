<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommuneFic
 *
 * @ORM\Table(name="commune_fic")
 * @ORM\Entity
 */
class CommuneFic
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODE_GEO_COM", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeGeoCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_GEO_WIL", type="integer", nullable=true)
     */
    private $codeGeoWil = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_FRANCAIS", type="string", length=150, nullable=true)
     */
    private $libFrancais;

    public function getCodeGeoCom(): ?string
    {
        return $this->codeGeoCom;
    }

    public function getCodeGeoWil(): ?int
    {
        return $this->codeGeoWil;
    }

    public function setCodeGeoWil(?int $codeGeoWil): self
    {
        $this->codeGeoWil = $codeGeoWil;

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
