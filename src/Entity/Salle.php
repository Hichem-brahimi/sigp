<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDsalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsalle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="string", length=200, nullable=true)
     */
    private $designation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num", type="integer", nullable=true)
     */
    private $num = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDsalles_attentes", type="integer", nullable=true)
     */
    private $idsallesAttentes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_structure", type="string", length=50, nullable=true)
     */
    private $codeStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=150, nullable=true)
     */
    private $remarque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mac_pc", type="string", length=50, nullable=true)
     */
    private $macPc;

    public function getIdsalle(): ?int
    {
        return $this->idsalle;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(?int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getIdsallesAttentes(): ?int
    {
        return $this->idsallesAttentes;
    }

    public function setIdsallesAttentes(?int $idsallesAttentes): self
    {
        $this->idsallesAttentes = $idsallesAttentes;

        return $this;
    }

    public function getCodeStructure(): ?string
    {
        return $this->codeStructure;
    }

    public function setCodeStructure(?string $codeStructure): self
    {
        $this->codeStructure = $codeStructure;

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

    public function getMacPc(): ?string
    {
        return $this->macPc;
    }

    public function setMacPc(?string $macPc): self
    {
        $this->macPc = $macPc;

        return $this;
    }


}
