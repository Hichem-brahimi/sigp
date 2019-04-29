<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SallesAttentes
 *
 * @ORM\Table(name="salles_attentes")
 * @ORM\Entity
 */
class SallesAttentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDsalles_attentes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsallesAttentes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disination", type="string", length=200, nullable=true)
     */
    private $disination;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDfiles_attentes", type="integer", nullable=true)
     */
    private $idfilesAttentes;

    public function getIdsallesAttentes(): ?int
    {
        return $this->idsallesAttentes;
    }

    public function getDisination(): ?string
    {
        return $this->disination;
    }

    public function setDisination(?string $disination): self
    {
        $this->disination = $disination;

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


}
