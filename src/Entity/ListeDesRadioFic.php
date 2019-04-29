<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeDesRadioFic
 *
 * @ORM\Table(name="liste_des_radio_fic")
 * @ORM\Entity
 */
class ListeDesRadioFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDliste_des_radio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlisteDesRadio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=150, nullable=true)
     */
    private $description;

    public function getIdlisteDesRadio(): ?int
    {
        return $this->idlisteDesRadio;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
