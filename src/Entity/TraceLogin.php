<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraceLogin
 *
 * @ORM\Table(name="trace_login")
 * @ORM\Entity
 */
class TraceLogin
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
     * @ORM\Column(name="Date_d_session", type="date", nullable=true)
     */
    private $dateDSession;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure_d_session", type="time", nullable=true)
     */
    private $heureDSession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lIeu_conexion", type="string", length=50, nullable=true)
     */
    private $lieuConexion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_machine", type="string", length=50, nullable=true)
     */
    private $ipMachine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_f_session", type="date", nullable=true)
     */
    private $dateFSession;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_f_session", type="time", nullable=true)
     */
    private $heureFSession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDcompte_utilisateur", type="integer", nullable=true)
     */
    private $idcompteUtilisateur;

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

    public function getDateDSession(): ?\DateTimeInterface
    {
        return $this->dateDSession;
    }

    public function setDateDSession(?\DateTimeInterface $dateDSession): self
    {
        $this->dateDSession = $dateDSession;

        return $this;
    }

    public function getHeureDSession(): ?\DateTimeInterface
    {
        return $this->heureDSession;
    }

    public function setHeureDSession(?\DateTimeInterface $heureDSession): self
    {
        $this->heureDSession = $heureDSession;

        return $this;
    }

    public function getLieuConexion(): ?string
    {
        return $this->lieuConexion;
    }

    public function setLieuConexion(?string $lieuConexion): self
    {
        $this->lieuConexion = $lieuConexion;

        return $this;
    }

    public function getIpMachine(): ?string
    {
        return $this->ipMachine;
    }

    public function setIpMachine(?string $ipMachine): self
    {
        $this->ipMachine = $ipMachine;

        return $this;
    }

    public function getDateFSession(): ?\DateTimeInterface
    {
        return $this->dateFSession;
    }

    public function setDateFSession(?\DateTimeInterface $dateFSession): self
    {
        $this->dateFSession = $dateFSession;

        return $this;
    }

    public function getHeureFSession(): ?\DateTimeInterface
    {
        return $this->heureFSession;
    }

    public function setHeureFSession(?\DateTimeInterface $heureFSession): self
    {
        $this->heureFSession = $heureFSession;

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


}
