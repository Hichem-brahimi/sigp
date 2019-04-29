<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEtablissement
 *
 * @ORM\Table(name="type_etablissement")
 * @ORM\Entity
 */
class TypeEtablissement
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDtype_etablissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeEtablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_etablissement", type="string", length=200, nullable=true)
     */
    private $typeEtablissement;

    public function getIdtypeEtablissement(): ?int
    {
        return $this->idtypeEtablissement;
    }

    public function getTypeEtablissement(): ?string
    {
        return $this->typeEtablissement;
    }

    public function setTypeEtablissement(?string $typeEtablissement): self
    {
        $this->typeEtablissement = $typeEtablissement;

        return $this;
    }


}
