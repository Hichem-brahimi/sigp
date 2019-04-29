<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierAdministratif
 *
 * @ORM\Table(name="dossier_administratif")
 * @ORM\Entity
 */
class DossierAdministratif
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDossier_administratif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddossierAdministratif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_ouverture", type="date", nullable=true)
     */
    private $dateOuverture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_ouverture", type="time", nullable=true)
     */
    private $heureOuverture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDPatient", type="integer", nullable=true)
     */
    private $idpatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_structure", type="string", length=50, nullable=true)
     */
    private $codeStructure;

    public function getIddossierAdministratif(): ?int
    {
        return $this->iddossierAdministratif;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(?\DateTimeInterface $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getHeureOuverture(): ?\DateTimeInterface
    {
        return $this->heureOuverture;
    }

    public function setHeureOuverture(?\DateTimeInterface $heureOuverture): self
    {
        $this->heureOuverture = $heureOuverture;

        return $this;
    }

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }

    public function setIdpatient(?int $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }

    public function getCodeStructure(): ?string
    {
        return $this->codeStructure;
    }

    public function setCodeStructure(?string $codeStructure): self
    {
        $this->codeStructure = $codeStructure;

        return $this;
    }


}
