<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraceLabo
 *
 * @ORM\Table(name="trace_labo")
 * @ORM\Entity
 */
class TraceLabo
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDtrace_login", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtraceLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activite", type="string", length=300, nullable=true)
     */
    private $activite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure", type="time", nullable=true)
     */
    private $heure;

    public function getIdtraceLogin(): ?int
    {
        return $this->idtraceLogin;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(?string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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


}
