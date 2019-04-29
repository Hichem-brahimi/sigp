<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diapo
 *
 * @ORM\Table(name="diapo")
 * @ORM\Entity
 */
class Diapo
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDdiapo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddiapo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="classement", type="integer", nullable=true)
     */
    private $classement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="chemin", type="string", length=150, nullable=true)
     */
    private $chemin = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dure", type="integer", nullable=true)
     */
    private $dure = '0';

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
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=true)
     */
    private $etat;

    public function getIddiapo(): ?int
    {
        return $this->iddiapo;
    }

    public function getClassement(): ?int
    {
        return $this->classement;
    }

    public function setClassement(?int $classement): self
    {
        $this->classement = $classement;

        return $this;
    }

    public function getChemin(): ?string
    {
        return $this->chemin;
    }

    public function setChemin(?string $chemin): self
    {
        $this->chemin = $chemin;

        return $this;
    }

    public function getDure(): ?int
    {
        return $this->dure;
    }

    public function setDure(?int $dure): self
    {
        $this->dure = $dure;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
