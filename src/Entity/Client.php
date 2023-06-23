<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Veuillez renseigner une adresse email.")]
    #[Assert\Email(message: "Veuillez renseigner une adresse email valide.")]
    #[ORM\Column(unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = ["ROLE_USER"];

    /**
     * @var string The hashed password
     */
    #[Assert\NotBlank(message: "Veuillez renseigner un mot de passe.")]
    #[Assert\Length(min: 8, minMessage: "Le mot de passe doit contenir au moins 8 caractères.")]
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Order::class)]
    private Collection $orders;

    #[Assert\NotBlank(message: "Veuillez renseigner un prénom.")]
    #[Assert\Length(min: 2, minMessage: "Le prénom doit contenir au moins 2 caractères.")]
    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[Assert\NotBlank(message: "Veuillez renseigner un nom.")]
    #[Assert\Length(min: 2, minMessage: "Le nom doit contenir au moins 2 caractères.")]
    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[Assert\NotBlank(message: "Veuillez renseigner un numéro de téléphone.")]
    #[Assert\Length(min: 9, minMessage: "Le numéro de téléphone doit contenir au moins 9 caractères.", max: 20, maxMessage: "Le numéro de téléphone doit contenir au maximum 10 caractères.")]
    #[ORM\Column(length: 100)]
    private ?string $phone = null;

    #[Assert\NotBlank(message: "Veuillez renseigner une adresse.")]
    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[Assert\NotBlank(message: "Veuillez renseigner une ville.")]
    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[Assert\NotBlank(message: "Veuillez renseigner un code postal.")]
    #[ORM\Column(length: 255)]
    private ?string $postal = null;

    #[Assert\NotBlank(message: "Veuillez renseigner un pays.")]
    #[ORM\Column(length: 255)]
    private ?string $country = 'France';

    #[ORM\Column]
    private ?bool $caution = false;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): static
    {
        if (!$this->orders->contains($order)) {
            $this->orders->add($order);
            $order->setClient($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): static
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getClient() === $this) {
                $order->setClient(null);
            }
        }

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostal(): ?string
    {
        return $this->postal;
    }

    public function setPostal(string $postal): static
    {
        $this->postal = $postal;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function isCaution(): ?bool
    {
        return $this->caution;
    }

    public function setCaution(bool $caution): static
    {
        $this->caution = $caution;

        return $this;
    }

    public function __toString():string
    {
        return $this->firstname.''.$this->lastname;
    }
}
