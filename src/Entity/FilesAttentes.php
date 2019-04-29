<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilesAttentes
 *
 * @ORM\Table(name="files_attentes")
 * @ORM\Entity
 */
class FilesAttentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDfiles_attentes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfilesAttentes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="designation", type="string", length=200, nullable=true)
     */
    private $designation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_courant", type="integer", nullable=true)
     */
    private $numCourant = '0';

    public function getIdfilesAttentes(): ?int
    {
        return $this->idfilesAttentes;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getNumCourant(): ?int
    {
        return $this->numCourant;
    }

    public function setNumCourant(?int $numCourant): self
    {
        $this->numCourant = $numCourant;

        return $this;
    }


}
