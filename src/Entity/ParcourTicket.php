<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParcourTicket
 *
 * @ORM\Table(name="parcour_ticket")
 * @ORM\Entity
 */
class ParcourTicket
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDparcour_ticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparcourTicket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_etat", type="date", nullable=true)
     */
    private $dateEtat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_etat", type="time", nullable=true)
     */
    private $heureEtat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=true)
     */
    private $idticket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieu_connexion", type="string", length=50, nullable=true)
     */
    private $lieuConnexion;

    public function getIdparcourTicket(): ?int
    {
        return $this->idparcourTicket;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDateEtat(): ?\DateTimeInterface
    {
        return $this->dateEtat;
    }

    public function setDateEtat(?\DateTimeInterface $dateEtat): self
    {
        $this->dateEtat = $dateEtat;

        return $this;
    }

    public function getHeureEtat(): ?\DateTimeInterface
    {
        return $this->heureEtat;
    }

    public function setHeureEtat(?\DateTimeInterface $heureEtat): self
    {
        $this->heureEtat = $heureEtat;

        return $this;
    }

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function setIdticket(?int $idticket): self
    {
        $this->idticket = $idticket;

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

    public function getLieuConnexion(): ?string
    {
        return $this->lieuConnexion;
    }

    public function setLieuConnexion(?string $lieuConnexion): self
    {
        $this->lieuConnexion = $lieuConnexion;

        return $this;
    }


}
