<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierMedical
 *
 * @ORM\Table(name="dossier_medical")
 * @ORM\Entity
 */
class DossierMedical
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDdossier_medical", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddossierMedical;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Heure", type="time", nullable=true)
     */
    private $heure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_piece", type="date", nullable=true)
     */
    private $datePiece;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image_piece", type="blob", length=0, nullable=true)
     */
    private $imagePiece;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fichier_numerique", type="blob", length=0, nullable=true)
     */
    private $fichierNumerique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDossier_administratif", type="integer", nullable=true)
     */
    private $iddossierAdministratif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDConsultation", type="integer", nullable=true)
     */
    private $idconsultation;

    public function getIddossierMedical(): ?int
    {
        return $this->iddossierMedical;
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

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getDatePiece(): ?\DateTimeInterface
    {
        return $this->datePiece;
    }

    public function setDatePiece(?\DateTimeInterface $datePiece): self
    {
        $this->datePiece = $datePiece;

        return $this;
    }

    public function getImagePiece()
    {
        return $this->imagePiece;
    }

    public function setImagePiece($imagePiece): self
    {
        $this->imagePiece = $imagePiece;

        return $this;
    }

    public function getFichierNumerique()
    {
        return $this->fichierNumerique;
    }

    public function setFichierNumerique($fichierNumerique): self
    {
        $this->fichierNumerique = $fichierNumerique;

        return $this;
    }

    public function getIddossierAdministratif(): ?int
    {
        return $this->iddossierAdministratif;
    }

    public function setIddossierAdministratif(?int $iddossierAdministratif): self
    {
        $this->iddossierAdministratif = $iddossierAdministratif;

        return $this;
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


}
