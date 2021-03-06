<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * Assert\Length(
     *     min="3",
     *     minMessage="Le nom est trop court, 3 caractères min.",
     *     max="255",
     *     maxMessage="Le nom est trop long, 255 caractères max."
     * )
     *  @Assert\NotBlank(message="Votre nom est manquant.")
     * @ORM\Column(type="string", length=50)
     */
    private $Nom;

    /**
     * @Assert\Length(
     *     min="3",
     *     minMessage="Le prénom est trop court, 3 caractères min.",
     *     max="255",
     *     maxMessage="Le prénom est trop long, 255 caractères max."
     * )
     * @Assert\NotBlank(message="Votre prénom est manquant.")
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @Assert\Email(message="L'email n'est pas valide")
     * @Assert\NotBlank(message="Email obligatoire.")
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @Assert\NotBlank(message="Laissez un commentaire...")
     * @ORM\Column(type="text")
     */
    private $Comment;


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

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }
}
