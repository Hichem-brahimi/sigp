<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BilanExaminRadio
 *
 * @ORM\Table(name="bilan_examin_radio")
 * @ORM\Entity
 */
class BilanExaminRadio
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDbilan_examin_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbilanExaminRadio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=300, nullable=true)
     */
    private $remarque;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDpatient_radio", type="integer", nullable=true)
     */
    private $idpatientRadio;

    public function getIdbilanExaminRadio(): ?int
    {
        return $this->idbilanExaminRadio;
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

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }

    public function getIdpatientRadio(): ?int
    {
        return $this->idpatientRadio;
    }

    public function setIdpatientRadio(?int $idpatientRadio): self
    {
        $this->idpatientRadio = $idpatientRadio;

        return $this;
    }


}
