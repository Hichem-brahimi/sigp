<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GradeUtilisateur
 *
 * @ORM\Table(name="grade_utilisateur")
 * @ORM\Entity
 */
class GradeUtilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDgrade_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgradeUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_grade", type="string", length=50, nullable=true)
     */
    private $codeGrade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_grade", type="string", length=200, nullable=true)
     */
    private $libGrade;

    public function getIdgradeUtilisateur(): ?int
    {
        return $this->idgradeUtilisateur;
    }

    public function getCodeGrade(): ?string
    {
        return $this->codeGrade;
    }

    public function setCodeGrade(?string $codeGrade): self
    {
        $this->codeGrade = $codeGrade;

        return $this;
    }

    public function getLibGrade(): ?string
    {
        return $this->libGrade;
    }

    public function setLibGrade(?string $libGrade): self
    {
        $this->libGrade = $libGrade;

        return $this;
    }


}
