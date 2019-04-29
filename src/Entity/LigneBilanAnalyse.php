<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneBilanAnalyse
 *
 * @ORM\Table(name="ligne_bilan_analyse")
 * @ORM\Entity
 */
class LigneBilanAnalyse
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDligne_bilan_analyse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idligneBilanAnalyse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur_examin_analyse", type="string", length=100, nullable=true)
     */
    private $valeurExaminAnalyse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_examin_analyse", type="date", nullable=true)
     */
    private $dateExaminAnalyse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_examin_analyse", type="time", nullable=true)
     */
    private $heureExaminAnalyse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=200, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDbilan_analyse", type="integer", nullable=true)
     */
    private $idbilanAnalyse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDAnalyse_medicale", type="integer", nullable=true)
     */
    private $idanalyseMedicale;

    public function getIdligneBilanAnalyse(): ?int
    {
        return $this->idligneBilanAnalyse;
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

    public function getValeurExaminAnalyse(): ?string
    {
        return $this->valeurExaminAnalyse;
    }

    public function setValeurExaminAnalyse(?string $valeurExaminAnalyse): self
    {
        $this->valeurExaminAnalyse = $valeurExaminAnalyse;

        return $this;
    }

    public function getDateExaminAnalyse(): ?\DateTimeInterface
    {
        return $this->dateExaminAnalyse;
    }

    public function setDateExaminAnalyse(?\DateTimeInterface $dateExaminAnalyse): self
    {
        $this->dateExaminAnalyse = $dateExaminAnalyse;

        return $this;
    }

    public function getHeureExaminAnalyse(): ?\DateTimeInterface
    {
        return $this->heureExaminAnalyse;
    }

    public function setHeureExaminAnalyse(?\DateTimeInterface $heureExaminAnalyse): self
    {
        $this->heureExaminAnalyse = $heureExaminAnalyse;

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

    public function getIdbilanAnalyse(): ?int
    {
        return $this->idbilanAnalyse;
    }

    public function setIdbilanAnalyse(?int $idbilanAnalyse): self
    {
        $this->idbilanAnalyse = $idbilanAnalyse;

        return $this;
    }

    public function getIdanalyseMedicale(): ?int
    {
        return $this->idanalyseMedicale;
    }

    public function setIdanalyseMedicale(?int $idanalyseMedicale): self
    {
        $this->idanalyseMedicale = $idanalyseMedicale;

        return $this;
    }


}
