<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtablissementFic
 *
 * @ORM\Table(name="etablissement_fic")
 * @ORM\Entity
 */
class EtablissementFic
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Etablissement", type="string", length=50, nullable=true)
     */
    private $etablissement;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_Etablissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEtablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=300, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel", type="string", length=50, nullable=true)
     */
    private $tel;

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
     * @ORM\Column(name="IDtype_etablissement", type="integer", nullable=true)
     */
    private $idtypeEtablissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_GEO_WIL", type="integer", nullable=true)
     */
    private $codeGeoWil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDdsp", type="integer", nullable=true)
     */
    private $iddsp;

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(?string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getCodeEtablissement(): ?int
    {
        return $this->codeEtablissement;
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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

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

    public function getIdtypeEtablissement(): ?int
    {
        return $this->idtypeEtablissement;
    }

    public function setIdtypeEtablissement(?int $idtypeEtablissement): self
    {
        $this->idtypeEtablissement = $idtypeEtablissement;

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

    public function getIddsp(): ?int
    {
        return $this->iddsp;
    }

    public function setIddsp(?int $iddsp): self
    {
        $this->iddsp = $iddsp;

        return $this;
    }


}
