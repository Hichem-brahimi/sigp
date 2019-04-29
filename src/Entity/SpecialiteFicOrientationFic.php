<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialiteFicOrientationFic
 *
 * @ORM\Table(name="specialite_fic_orientation_fic")
 * @ORM\Entity
 */
class SpecialiteFicOrientationFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDorientation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idorientation;

    /**
     * @var string
     *
     * @ORM\Column(name="Code_Specialite", type="string", length=3, nullable=false)
     */
    private $codeSpecialite;

    public function getIdorientation(): ?int
    {
        return $this->idorientation;
    }

    public function getCodeSpecialite(): ?string
    {
        return $this->codeSpecialite;
    }

    public function setCodeSpecialite(string $codeSpecialite): self
    {
        $this->codeSpecialite = $codeSpecialite;

        return $this;
    }


}
