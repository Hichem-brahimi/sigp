<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_Nais", type="date", nullable=true)
     */
    private $dateNais;

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
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Web", type="string", length=50, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="N_Carte_Ident", type="string", length=50, nullable=true)
     */
    private $nCarteIdent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDfonction_utilisateur", type="integer", nullable=true)
     */
    private $idfonctionUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDgrade_utilisateur", type="integer", nullable=true)
     */
    private $idgradeUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Specialite", type="string", length=3, nullable=true)
     */
    private $codeSpecialite;

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->dateNais;
    }

    public function setDateNais(?\DateTimeInterface $dateNais): self
    {
        $this->dateNais = $dateNais;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getNCarteIdent(): ?string
    {
        return $this->nCarteIdent;
    }

    public function setNCarteIdent(?string $nCarteIdent): self
    {
        $this->nCarteIdent = $nCarteIdent;

        return $this;
    }

    public function getIdfonctionUtilisateur(): ?int
    {
        return $this->idfonctionUtilisateur;
    }

    public function setIdfonctionUtilisateur(?int $idfonctionUtilisateur): self
    {
        $this->idfonctionUtilisateur = $idfonctionUtilisateur;

        return $this;
    }

    public function getIdgradeUtilisateur(): ?int
    {
        return $this->idgradeUtilisateur;
    }

    public function setIdgradeUtilisateur(?int $idgradeUtilisateur): self
    {
        $this->idgradeUtilisateur = $idgradeUtilisateur;

        return $this;
    }

    public function getCodeSpecialite(): ?string
    {
        return $this->codeSpecialite;
    }

    public function setCodeSpecialite(?string $codeSpecialite): self
    {
        $this->codeSpecialite = $codeSpecialite;

        return $this;
    }


}
