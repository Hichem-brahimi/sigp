<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriInfoMesure
 *
 * @ORM\Table(name="categori_info_mesure")
 * @ORM\Entity
 */
class CategoriInfoMesure
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDcategori_info_mesure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategoriInfoMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_categori_info_mesure", type="string", length=200, nullable=true)
     */
    private $libCategoriInfoMesure;

    public function getIdcategoriInfoMesure(): ?int
    {
        return $this->idcategoriInfoMesure;
    }

    public function getLibCategoriInfoMesure(): ?string
    {
        return $this->libCategoriInfoMesure;
    }

    public function setLibCategoriInfoMesure(?string $libCategoriInfoMesure): self
    {
        $this->libCategoriInfoMesure = $libCategoriInfoMesure;

        return $this;
    }


}
