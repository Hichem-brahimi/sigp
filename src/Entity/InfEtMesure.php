<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfEtMesure
 *
 * @ORM\Table(name="inf_et_mesure")
 * @ORM\Entity
 */
class InfEtMesure
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDinf_et_mesure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfEtMesure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDdossier_medical", type="integer", nullable=true)
     */
    private $iddossierMedical;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDconsultation_soins", type="integer", nullable=true)
     */
    private $idconsultationSoins;

    public function getIdinfEtMesure(): ?int
    {
        return $this->idinfEtMesure;
    }

    public function getIdconsultation(): ?int
    {
        return $this->idconsultation;
    }

    public function setIdconsultation(?int $idconsultation): self
    {
        $this->idconsultation = $idconsultation;

        return $this;
    }

    public function getIddossierMedical(): ?int
    {
        return $this->iddossierMedical;
    }

    public function setIddossierMedical(?int $iddossierMedical): self
    {
        $this->iddossierMedical = $iddossierMedical;

        return $this;
    }

    public function getIdconsultationSoins(): ?int
    {
        return $this->idconsultationSoins;
    }

    public function setIdconsultationSoins(?int $idconsultationSoins): self
    {
        $this->idconsultationSoins = $idconsultationSoins;

        return $this;
    }


}
