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
     * @Assert\Length(
     *     min="3",
     *     minMessage="Your fucking username is too short bitch!. 3 characters minimum please, motherfucker!",
     *     maxMessage="15 max please! Sucker!"
     * )
     * @ORM\Column(type="string", length=15)
     */

    private $Contact;

    /**
     * @Assert\Length(
     *     min="3",
     *     minMessage="Votre username est trop court, 3 caractères minimum",
     *     max="255",
     *     maxMessage="Votre username est trop long, 255 caractères max."
     *
     * )
     * @Assert\NotBlank(message="Votre username est manquant.")
     * @ORM\Column(type="string", length=255)
     */
    private $Surname;

    /**
     * @Assert\Email(message="Votre email n'est pas valide")
     * @Assert\NotBlank(message="Vous n'avez pas indiqué votre email.")
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     *
     * @ORM\Column(type="text")
     */
    private $Comment;

    public function getId()
    {
        return $this->id;
    }

    public function getContact(): ?string
    {
        return $this->Contact;
    }

    public function setContact(string $Contact): self
    {
        $this->Contact = $Contact;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): self
    {
        $this->Surname = $Surname;

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
