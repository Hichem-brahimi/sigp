<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BarreNews
 *
 * @ORM\Table(name="barre_news")
 * @ORM\Entity
 */
class BarreNews
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDbarre_news", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbarreNews;

    /**
     * @var int|null
     *
     * @ORM\Column(name="classement", type="integer", nullable=true)
     */
    private $classement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="string", length=200, nullable=true)
     */
    private $contenu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vitesse", type="integer", nullable=true)
     */
    private $vitesse = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=true)
     */
    private $etat = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_c", type="date", nullable=true)
     */
    private $dateC;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_f", type="date", nullable=true)
     */
    private $dateF;

    public function getIdbarreNews(): ?int
    {
        return $this->idbarreNews;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(?int $vitesse): self
    {
        $this->vitesse = $vitesse;

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

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->dateC;
    }

    public function setDateC(?\DateTimeInterface $dateC): self
    {
        $this->dateC = $dateC;

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


}
