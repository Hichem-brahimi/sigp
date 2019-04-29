<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageSgipdz
 *
 * @ORM\Table(name="message_sgipdz")
 * @ORM\Entity
 */
class MessageSgipdz
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDmessage_sgipdz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessageSgipdz;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_msg", type="date", nullable=true)
     */
    private $dateMsg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_msg", type="time", nullable=true)
     */
    private $heureMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet_msg", type="string", length=100, nullable=true)
     */
    private $sujetMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu_msg", type="string", length=500, nullable=true)
     */
    private $contenuMsg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="piece_joint_msg", type="string", length=200, nullable=true)
     */
    private $pieceJointMsg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat = '0';

    public function getIdmessageSgipdz(): ?int
    {
        return $this->idmessageSgipdz;
    }

    public function getDateMsg(): ?\DateTimeInterface
    {
        return $this->dateMsg;
    }

    public function setDateMsg(?\DateTimeInterface $dateMsg): self
    {
        $this->dateMsg = $dateMsg;

        return $this;
    }

    public function getHeureMsg(): ?\DateTimeInterface
    {
        return $this->heureMsg;
    }

    public function setHeureMsg(?\DateTimeInterface $heureMsg): self
    {
        $this->heureMsg = $heureMsg;

        return $this;
    }

    public function getSujetMsg(): ?string
    {
        return $this->sujetMsg;
    }

    public function setSujetMsg(?string $sujetMsg): self
    {
        $this->sujetMsg = $sujetMsg;

        return $this;
    }

    public function getContenuMsg(): ?string
    {
        return $this->contenuMsg;
    }

    public function setContenuMsg(?string $contenuMsg): self
    {
        $this->contenuMsg = $contenuMsg;

        return $this;
    }

    public function getPieceJointMsg(): ?string
    {
        return $this->pieceJointMsg;
    }

    public function setPieceJointMsg(?string $pieceJointMsg): self
    {
        $this->pieceJointMsg = $pieceJointMsg;

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

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(?int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
