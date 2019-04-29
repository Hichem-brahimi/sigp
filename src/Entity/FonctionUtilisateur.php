<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FonctionUtilisateur
 *
 * @ORM\Table(name="fonction_utilisateur")
 * @ORM\Entity
 */
class FonctionUtilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDfonction_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfonctionUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_fonction", type="string", length=50, nullable=true)
     */
    private $codeFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_fonction", type="string", length=200, nullable=true)
     */
    private $libFonction;

    public function getIdfonctionUtilisateur(): ?int
    {
        return $this->idfonctionUtilisateur;
    }

    public function getCodeFonction(): ?string
    {
        return $this->codeFonction;
    }

    public function setCodeFonction(?string $codeFonction): self
    {
        $this->codeFonction = $codeFonction;

        return $this;
    }

    public function getLibFonction(): ?string
    {
        return $this->libFonction;
    }

    public function setLibFonction(?string $libFonction): self
    {
        $this->libFonction = $libFonction;

        return $this;
    }


}
