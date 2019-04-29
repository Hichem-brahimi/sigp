<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dsp
 *
 * @ORM\Table(name="dsp")
 * @ORM\Entity
 */
class Dsp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDdsp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_dsp", type="string", length=50, nullable=true)
     */
    private $codeDsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=300, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Web", type="string", length=50, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_GEO_WIL", type="integer", nullable=true)
     */
    private $codeGeoWil;

    public function getIddsp(): ?int
    {
        return $this->iddsp;
    }

    public function getCodeDsp(): ?string
    {
        return $this->codeDsp;
    }

    public function setCodeDsp(?string $codeDsp): self
    {
        $this->codeDsp = $codeDsp;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): self
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
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


}
