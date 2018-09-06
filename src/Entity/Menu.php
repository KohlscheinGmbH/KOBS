<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class Menu implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $usernummer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
	 * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $pwd;

    /**
     * @ORM\Column(type="string", length=255)
     */
	 
    private $anrede;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $abteilung;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aktiviert;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $logincount;
	
	public function __construct()
    {
        $this->isActive = true;
		$this->roles = array('ROLE_USER');
    }	

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsernummer(): ?int
    {
        return $this->usernummer;
    }

    public function setUsernummer(int $usernummer): self
    {
        $this->usernummer = $usernummer;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }
	
	public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->pwd;
    }

    public function setPassword(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getAnrede(): ?string
    {
        return $this->anrede;
    }

    public function setAnrede(string $anrede): self
    {
        $this->anrede = $anrede;

        return $this;
    }

    public function getAbteilung(): ?string
    {
        return $this->abteilung;
    }

    public function setAbteilung(string $abteilung): self
    {
        $this->abteilung = $abteilung;

        return $this;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(?string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAktiviert(): ?int
    {
        return $this->aktiviert;
    }

    public function setAktiviert(?int $aktiviert): self
    {
        $this->aktiviert = $aktiviert;

        return $this;
    }

    public function getLogincount(): ?int
    {
        return $this->logincount;
    }

    public function setLogincount(?int $logincount): self
    {
        $this->logincount = $logincount;

        return $this;
    }
	
	public function getValidLogin(int $usernummer, string $pwd): self
	{
		
	}
	
	public function getRoles()
	{
		return array('ROLE_USER');
	}
	
	public function eraseCredentials() {}

		/** @see \Serializable::serialize() */	
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->pwd,
            // see section on salt below
            // $this->salt,
        ));
    }
	
	    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->pwd,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }
}
