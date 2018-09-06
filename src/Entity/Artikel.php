<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtikelRepository")
 */
class Artikel
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
    private $bezeichnung1;

    /**
     * @ORM\Column(type="integer")
     */
    private $wgid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bezeichnung2;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $artikelnummer;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $vpebezeichnung;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ean;

    /**
     * @ORM\Column(type="integer")
     */
    private $uwgid;

    /**
     * @ORM\Column(type="integer")
     */
    private $meid;

    /**
     * @ORM\Column(type="integer")
     */
    private $mwstid;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $listenpreis;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $ekdurch;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $mindestbestand;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $bestand;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $mindestbestellmenge;

    /**
     * @ORM\Column(type="date")
     */
    private $angelegtam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $angelegtvon;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $updateam;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $updatevon;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $bild;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBezeichnung1(): ?string
    {
        return $this->bezeichnung1;
    }

    public function setBezeichnung1(string $bezeichnung1): self
    {
        $this->bezeichnung1 = $bezeichnung1;

        return $this;
    }

    public function getWgid(): ?int
    {
        return $this->wgid;
    }

    public function setWgid(int $wgid): self
    {
        $this->wgid = $wgid;

        return $this;
    }

    public function getBezeichnung2(): ?string
    {
        return $this->bezeichnung2;
    }

    public function setBezeichnung2(?string $bezeichnung2): self
    {
        $this->bezeichnung2 = $bezeichnung2;

        return $this;
    }

    public function getArtikelnummer(): ?string
    {
        return $this->artikelnummer;
    }

    public function setArtikelnummer(?string $artikelnummer): self
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    public function getVpebezeichnung(): ?string
    {
        return $this->vpebezeichnung;
    }

    public function setVpebezeichnung(?string $vpebezeichnung): self
    {
        $this->vpebezeichnung = $vpebezeichnung;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getUwgid(): ?int
    {
        return $this->uwgid;
    }

    public function setUwgid(int $uwgid): self
    {
        $this->uwgid = $uwgid;

        return $this;
    }

    public function getMeid(): ?int
    {
        return $this->meid;
    }

    public function setMeid(int $meid): self
    {
        $this->meid = $meid;

        return $this;
    }

    public function getMwstid(): ?int
    {
        return $this->mwstid;
    }

    public function setMwstid(int $mwstid): self
    {
        $this->mwstid = $mwstid;

        return $this;
    }

    public function getListenpreis()
    {
        return $this->listenpreis;
    }

    public function setListenpreis($listenpreis): self
    {
        $this->listenpreis = $listenpreis;

        return $this;
    }

    public function getEkdurch()
    {
        return $this->ekdurch;
    }

    public function setEkdurch($ekdurch): self
    {
        $this->ekdurch = $ekdurch;

        return $this;
    }

    public function getMindestbestand()
    {
        return $this->mindestbestand;
    }

    public function setMindestbestand($mindestbestand): self
    {
        $this->mindestbestand = $mindestbestand;

        return $this;
    }

    public function getBestand()
    {
        return $this->bestand;
    }

    public function setBestand($bestand): self
    {
        $this->bestand = $bestand;

        return $this;
    }

    public function getMindestbestellmenge()
    {
        return $this->mindestbestellmenge;
    }

    public function setMindestbestellmenge($mindestbestellmenge): self
    {
        $this->mindestbestellmenge = $mindestbestellmenge;

        return $this;
    }

    public function getAngelegtam(): ?\DateTimeInterface
    {
        return $this->angelegtam;
    }

    public function setAngelegtam(\DateTimeInterface $angelegtam): self
    {
        $this->angelegtam = $angelegtam;

        return $this;
    }

    public function getAngelegtvon(): ?string
    {
        return $this->angelegtvon;
    }

    public function setAngelegtvon(string $angelegtvon): self
    {
        $this->angelegtvon = $angelegtvon;

        return $this;
    }

    public function getUpdateam(): ?\DateTimeInterface
    {
        return $this->updateam;
    }

    public function setUpdateam(?\DateTimeInterface $updateam): self
    {
        $this->updateam = $updateam;

        return $this;
    }

    public function getUpdatevon(): ?string
    {
        return $this->updatevon;
    }

    public function setUpdatevon(?string $updatevon): self
    {
        $this->updatevon = $updatevon;

        return $this;
    }

    public function getBild()
    {
        return $this->bild;
    }

    public function setBild($bild): self
    {
        $this->bild = $bild;

        return $this;
    }
}
