<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteUtilisateur
 *
 * @ORM\Table(name="compte_utilisateur")
 * @ORM\Entity
 */
class CompteUtilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompteUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="psudo", type="string", length=50, nullable=true)
     */
    private $psudo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pws_user", type="string", length=16, nullable=true)
     */
    private $pwsUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_d", type="date", nullable=true)
     */
    private $dateD;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_f", type="date", nullable=true)
     */
    private $dateF;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="etat_validite", type="boolean", nullable=true)
     */
    private $etatValidite = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Delevrer_par", type="string", length=150, nullable=true)
     */
    private $delevrerPar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=true)
     */
    private $idutilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_session", type="integer", nullable=true)
     */
    private $typeSession = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="connete_encoure", type="boolean", nullable=true)
     */
    private $conneteEncoure = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieu_conexion_coure", type="string", length=50, nullable=true)
     */
    private $lieuConexionCoure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDfiles_attentes", type="integer", nullable=true)
     */
    private $idfilesAttentes;

    public function getIdcompteUtilisateur(): ?int
    {
        return $this->idcompteUtilisateur;
    }

    public function getPsudo(): ?string
    {
        return $this->psudo;
    }

    public function setPsudo(?string $psudo): self
    {
        $this->psudo = $psudo;

        return $this;
    }

    public function getPwsUser(): ?string
    {
        return $this->pwsUser;
    }

    public function setPwsUser(?string $pwsUser): self
    {
        $this->pwsUser = $pwsUser;

        return $this;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dateD;
    }

    public function setDateD(?\DateTimeInterface $dateD): self
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->dateF;
    }

    public function setDateF(?\DateTimeInterface $dateF): self
    {
        $this->dateF = $dateF;

        return $this;
    }

    public function getEtatValidite(): ?bool
    {
        return $this->etatValidite;
    }

    public function setEtatValidite(?bool $etatValidite): self
    {
        $this->etatValidite = $etatValidite;

        return $this;
    }

    public function getDelevrerPar(): ?string
    {
        return $this->delevrerPar;
    }

    public function setDelevrerPar(?string $delevrerPar): self
    {
        $this->delevrerPar = $delevrerPar;

        return $this;
    }

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?int $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    public function getTypeSession(): ?int
    {
        return $this->typeSession;
    }

    public function setTypeSession(?int $typeSession): self
    {
        $this->typeSession = $typeSession;

        return $this;
    }

    public function getConneteEncoure(): ?bool
    {
        return $this->conneteEncoure;
    }

    public function setConneteEncoure(?bool $conneteEncoure): self
    {
        $this->conneteEncoure = $conneteEncoure;

        return $this;
    }

    public function getLieuConexionCoure(): ?string
    {
        return $this->lieuConexionCoure;
    }

    public function setLieuConexionCoure(?string $lieuConexionCoure): self
    {
        $this->lieuConexionCoure = $lieuConexionCoure;

        return $this;
    }

    public function getIdfilesAttentes(): ?int
    {
        return $this->idfilesAttentes;
    }

    public function setIdfilesAttentes(?int $idfilesAttentes): self
    {
        $this->idfilesAttentes = $idfilesAttentes;

        return $this;
    }


}
