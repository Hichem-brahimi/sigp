<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StructureFic
 *
 * @ORM\Table(name="structure_fic")
 * @ORM\Entity
 */
class StructureFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="structure_sanitaire_", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $structureSanitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Code_structure", type="string", length=50, nullable=false)
     */
    private $codeStructure;

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
     * @ORM\Column(name="IDtype_structure", type="integer", nullable=true)
     */
    private $idtypeStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Etablissement", type="string", length=50, nullable=true)
     */
    private $codeEtablissement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="structure_selectionne", type="boolean", nullable=true)
     */
    private $structureSelectionne = '0';

    public function getStructureSanitaire(): ?int
    {
        return $this->structureSanitaire;
    }

    public function getCodeStructure(): ?string
    {
        return $this->codeStructure;
    }

    public function setCodeStructure(string $codeStructure): self
    {
        $this->codeStructure = $codeStructure;

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

    public function getIdtypeStructure(): ?int
    {
        return $this->idtypeStructure;
    }

    public function setIdtypeStructure(?int $idtypeStructure): self
    {
        $this->idtypeStructure = $idtypeStructure;

        return $this;
    }

    public function getCodeEtablissement(): ?string
    {
        return $this->codeEtablissement;
    }

    public function setCodeEtablissement(?string $codeEtablissement): self
    {
        $this->codeEtablissement = $codeEtablissement;

        return $this;
    }

    public function getStructureSelectionne(): ?bool
    {
        return $this->structureSelectionne;
    }

    public function setStructureSelectionne(?bool $structureSelectionne): self
    {
        $this->structureSelectionne = $structureSelectionne;

        return $this;
    }


}
