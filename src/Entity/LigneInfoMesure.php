<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneInfoMesure
 *
 * @ORM\Table(name="ligne_info_mesure")
 * @ORM\Entity
 */
class LigneInfoMesure
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_info_mesure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneInfoMesure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_info_mesure", type="date", nullable=true)
     */
    private $dateInfoMesure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_info_mesure", type="date", nullable=true)
     */
    private $heureInfoMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur_info_mesure", type="string", length=50, nullable=true)
     */
    private $valeurInfoMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDinf_et_mesure", type="integer", nullable=true)
     */
    private $idinfEtMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDliste_info_mesure", type="integer", nullable=true)
     */
    private $idlisteInfoMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=150, nullable=true)
     */
    private $remarque;

    public function getIdligneInfoMesure(): ?int
    {
        return $this->idligneInfoMesure;
    }

    public function getDateInfoMesure(): ?\DateTimeInterface
    {
        return $this->dateInfoMesure;
    }

    public function setDateInfoMesure(?\DateTimeInterface $dateInfoMesure): self
    {
        $this->dateInfoMesure = $dateInfoMesure;

        return $this;
    }

    public function getHeureInfoMesure(): ?\DateTimeInterface
    {
        return $this->heureInfoMesure;
    }

    public function setHeureInfoMesure(?\DateTimeInterface $heureInfoMesure): self
    {
        $this->heureInfoMesure = $heureInfoMesure;

        return $this;
    }

    public function getValeurInfoMesure(): ?string
    {
        return $this->valeurInfoMesure;
    }

    public function setValeurInfoMesure(?string $valeurInfoMesure): self
    {
        $this->valeurInfoMesure = $valeurInfoMesure;

        return $this;
    }

    public function getIdinfEtMesure(): ?int
    {
        return $this->idinfEtMesure;
    }

    public function setIdinfEtMesure(?int $idinfEtMesure): self
    {
        $this->idinfEtMesure = $idinfEtMesure;

        return $this;
    }

    public function getIdlisteInfoMesure(): ?int
    {
        return $this->idlisteInfoMesure;
    }

    public function setIdlisteInfoMesure(?int $idlisteInfoMesure): self
    {
        $this->idlisteInfoMesure = $idlisteInfoMesure;

        return $this;
    }

    public function getIdcompteUtilisateur(): ?int
    {
        return $this->idcompteUtilisateur;
    }

    public function setIdcompteUtilisateur(?int $idcompteUtilisateur): self
    {
        $this->idcompteUtilisateur = $idcompteUtilisateur;

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


}
