<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BilanActiviteSoin
 *
 * @ORM\Table(name="bilan_activite_soin")
 * @ORM\Entity
 */
class BilanActiviteSoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDbilan_activite_soin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbilanActiviteSoin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDconsultation_soins", type="integer", nullable=true)
     */
    private $idconsultationSoins;

    public function getIdbilanActiviteSoin(): ?int
    {
        return $this->idbilanActiviteSoin;
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
