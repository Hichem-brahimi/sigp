<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeExaminRadio
 *
 * @ORM\Table(name="liste_examin_radio")
 * @ORM\Entity
 */
class ListeExaminRadio
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDliste_examin_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlisteExaminRadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_e_r", type="string", length=50, nullable=true)
     */
    private $codeER;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lib_e_radio", type="string", length=350, nullable=true)
     */
    private $libERadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tarif", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $tarif = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=100, nullable=true)
     */
    private $remarque;

    public function getIdlisteExaminRadio(): ?int
    {
        return $this->idlisteExaminRadio;
    }

    public function getCodeER(): ?string
    {
        return $this->codeER;
    }

    public function setCodeER(?string $codeER): self
    {
        $this->codeER = $codeER;

        return $this;
    }

    public function getLibERadio(): ?string
    {
        return $this->libERadio;
    }

    public function setLibERadio(?string $libERadio): self
    {
        $this->libERadio = $libERadio;

        return $this;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    public function setTarif($tarif): self
    {
        $this->tarif = $tarif;

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


}
