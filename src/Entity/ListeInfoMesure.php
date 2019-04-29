<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeInfoMesure
 *
 * @ORM\Table(name="liste_info_mesure")
 * @ORM\Entity
 */
class ListeInfoMesure
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDliste_info_mesure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlisteInfoMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_info_mesure", type="string", length=150, nullable=true)
     */
    private $libInfoMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unite_info_mesure", type="string", length=50, nullable=true)
     */
    private $uniteInfoMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Norme_info_mesure", type="string", length=150, nullable=true)
     */
    private $normeInfoMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcategori_info_mesure", type="integer", nullable=true)
     */
    private $idcategoriInfoMesure;

    public function getIdlisteInfoMesure(): ?int
    {
        return $this->idlisteInfoMesure;
    }

    public function getLibInfoMesure(): ?string
    {
        return $this->libInfoMesure;
    }

    public function setLibInfoMesure(?string $libInfoMesure): self
    {
        $this->libInfoMesure = $libInfoMesure;

        return $this;
    }

    public function getUniteInfoMesure(): ?string
    {
        return $this->uniteInfoMesure;
    }

    public function setUniteInfoMesure(?string $uniteInfoMesure): self
    {
        $this->uniteInfoMesure = $uniteInfoMesure;

        return $this;
    }

    public function getNormeInfoMesure(): ?string
    {
        return $this->normeInfoMesure;
    }

    public function setNormeInfoMesure(?string $normeInfoMesure): self
    {
        $this->normeInfoMesure = $normeInfoMesure;

        return $this;
    }

    public function getIdcategoriInfoMesure(): ?int
    {
        return $this->idcategoriInfoMesure;
    }

    public function setIdcategoriInfoMesure(?int $idcategoriInfoMesure): self
    {
        $this->idcategoriInfoMesure = $idcategoriInfoMesure;

        return $this;
    }


}
