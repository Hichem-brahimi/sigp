<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeStructure
 *
 * @ORM\Table(name="type_structure")
 * @ORM\Entity
 */
class TypeStructure
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDtype_structure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeStructure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_structure", type="string", length=200, nullable=true)
     */
    private $typeStructure;

    public function getIdtypeStructure(): ?int
    {
        return $this->idtypeStructure;
    }

    public function getTypeStructure(): ?string
    {
        return $this->typeStructure;
    }

    public function setTypeStructure(?string $typeStructure): self
    {
        $this->typeStructure = $typeStructure;

        return $this;
    }


}
