<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteUtilisateurMessageSgipdz
 *
 * @ORM\Table(name="compte_utilisateur_message_sgipdz")
 * @ORM\Entity
 */
class CompteUtilisateurMessageSgipdz
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
     * @var int
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=false)
     */
    private $idcompteUtilisateur;

    public function getIdmessageSgipdz(): ?int
    {
        return $this->idmessageSgipdz;
    }

    public function getIdcompteUtilisateur(): ?int
    {
        return $this->idcompteUtilisateur;
    }

    public function setIdcompteUtilisateur(int $idcompteUtilisateur): self
    {
        $this->idcompteUtilisateur = $idcompteUtilisateur;

        return $this;
    }


}
