<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialiteFic
 *
 * @ORM\Table(name="specialite_fic")
 * @ORM\Entity
 */
class SpecialiteFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Specialite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeSpecialite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lib_Specialite", type="string", length=50, nullable=true)
     */
    private $libSpecialite;

    public function getCodeSpecialite(): ?int
    {
        return $this->codeSpecialite;
    }

    public function getLibSpecialite(): ?string
    {
        return $this->libSpecialite;
    }

    public function setLibSpecialite(?string $libSpecialite): self
    {
        $this->libSpecialite = $libSpecialite;

        return $this;
    }


}
