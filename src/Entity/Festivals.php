<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FestivalsRepository")
 */
class Festivals
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Genre_musical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Resume;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Villes;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Artistes")
     */
    private $Artistes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;

    public function __construct()
    {
        $this->Artistes = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getGenreMusical(): ?string
    {
        return $this->Genre_musical;
    }

    public function setGenreMusical(string $Genre_musical): self
    {
        $this->Genre_musical = $Genre_musical;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setResume(string $Resume): self
    {
        $this->Resume = $Resume;

        return $this;
    }

    public function getVilles(): ?Villes
    {
        return $this->Villes;
    }

    public function setVilles(?Villes $Villes): self
    {
        $this->Villes = $Villes;

        return $this;
    }

    /**
     * @return Collection|Artistes[]
     */
    public function getArtistes(): Collection
    {
        return $this->Artistes;
    }

    public function addArtiste(Artistes $artiste): self
    {
        if (!$this->Artistes->contains($artiste)) {
            $this->Artistes[] = $artiste;
        }

        return $this;
    }

    public function removeArtiste(Artistes $artiste): self
    {
        if ($this->Artistes->contains($artiste)) {
            $this->Artistes->removeElement($artiste);
        }

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }
}
