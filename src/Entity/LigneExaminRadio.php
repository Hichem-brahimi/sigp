<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneExaminRadio
 *
 * @ORM\Table(name="ligne_examin_radio")
 * @ORM\Entity
 */
class LigneExaminRadio
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_examin_radio", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneExaminRadio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_d", type="date", nullable=true)
     */
    private $dateD;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure_d", type="date", nullable=true)
     */
    private $heureD;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=150, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDbilan_examin_radio", type="integer", nullable=true)
     */
    private $idbilanExaminRadio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDliste_examin_radio", type="integer", nullable=true)
     */
    private $idlisteExaminRadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lien_image_radio", type="string", length=300, nullable=true)
     */
    private $lienImageRadio;

    public function getIdligneExaminRadio(): ?int
    {
        return $this->idligneExaminRadio;
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

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dateD;
    }

    public function setDateD(?\DateTimeInterface $dateD): self
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getHeureD(): ?\DateTimeInterface
    {
        return $this->heureD;
    }

    public function setHeureD(?\DateTimeInterface $heureD): self
    {
        $this->heureD = $heureD;

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

    public function getIdbilanExaminRadio(): ?int
    {
        return $this->idbilanExaminRadio;
    }

    public function setIdbilanExaminRadio(?int $idbilanExaminRadio): self
    {
        $this->idbilanExaminRadio = $idbilanExaminRadio;

        return $this;
    }

    public function getIdlisteExaminRadio(): ?int
    {
        return $this->idlisteExaminRadio;
    }

    public function setIdlisteExaminRadio(?int $idlisteExaminRadio): self
    {
        $this->idlisteExaminRadio = $idlisteExaminRadio;

        return $this;
    }

    public function getLienImageRadio(): ?string
    {
        return $this->lienImageRadio;
    }

    public function setLienImageRadio(?string $lienImageRadio): self
    {
        $this->lienImageRadio = $lienImageRadio;

        return $this;
    }


}
