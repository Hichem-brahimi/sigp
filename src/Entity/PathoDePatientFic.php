<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PathoDePatientFic
 *
 * @ORM\Table(name="patho_de_patient_fic")
 * @ORM\Entity
 */
class PathoDePatientFic
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDpatho_de_patient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpathoDePatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_patho", type="string", length=50, nullable=true)
     */
    private $nomPatho;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cODE_patho", type="integer", nullable=true)
     */
    private $codePatho = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Code_reserve", type="integer", nullable=true)
     */
    private $codeReserve = '0';

    public function getIdpathoDePatient(): ?int
    {
        return $this->idpathoDePatient;
    }

    public function getNomPatho(): ?string
    {
        return $this->nomPatho;
    }

    public function setNomPatho(?string $nomPatho): self
    {
        $this->nomPatho = $nomPatho;

        return $this;
    }

    public function getCodePatho(): ?int
    {
        return $this->codePatho;
    }

    public function setCodePatho(?int $codePatho): self
    {
        $this->codePatho = $codePatho;

        return $this;
    }

    public function getCodeReserve(): ?int
    {
        return $this->codeReserve;
    }

    public function setCodeReserve(?int $codeReserve): self
    {
        $this->codeReserve = $codeReserve;

        return $this;
    }


}
