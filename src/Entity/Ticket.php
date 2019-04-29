<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entre", type="date", nullable=true)
     */
    private $dateEntre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDfiles_attentes", type="integer", nullable=true)
     */
    private $idfilesAttentes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure", type="time", nullable=true)
     */
    private $heure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDossier_administratif", type="integer", nullable=true)
     */
    private $iddossierAdministratif;

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateEntre(): ?\DateTimeInterface
    {
        return $this->dateEntre;
    }

    public function setDateEntre(?\DateTimeInterface $dateEntre): self
    {
        $this->dateEntre = $dateEntre;

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

    public function getIdfilesAttentes(): ?int
    {
        return $this->idfilesAttentes;
    }

    public function setIdfilesAttentes(?int $idfilesAttentes): self
    {
        $this->idfilesAttentes = $idfilesAttentes;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getIddossierAdministratif(): ?int
    {
        return $this->iddossierAdministratif;
    }

    public function setIddossierAdministratif(?int $iddossierAdministratif): self
    {
        $this->iddossierAdministratif = $iddossierAdministratif;

        return $this;
    }


}
