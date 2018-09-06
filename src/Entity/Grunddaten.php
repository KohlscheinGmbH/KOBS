<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GrunddatenRepository")
 */
class Grunddaten
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $warengruppe;

    /**
     * @ORM\Column(type="float")
     */
    private $unterwarengruppe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mengeneinheit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mwst;

    /**
     * @ORM\Column(type="float")
     */
    private $psatz;

    /**
     * @ORM\Column(type="integer")
     */
    private $aktiv;

    /**
     * @ORM\Column(type="integer")
     */
    private $freigegeben;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWarengruppe(): ?int
    {
        return $this->warengruppe;
    }

    public function setWarengruppe(int $warengruppe): self
    {
        $this->warengruppe = $warengruppe;

        return $this;
    }

    public function getUnterwarengruppe(): ?float
    {
        return $this->unterwarengruppe;
    }

    public function setUnterwarengruppe(float $unterwarengruppe): self
    {
        $this->unterwarengruppe = $unterwarengruppe;

        return $this;
    }

    public function getMengeneinheit(): ?string
    {
        return $this->mengeneinheit;
    }

    public function setMengeneinheit(string $mengeneinheit): self
    {
        $this->mengeneinheit = $mengeneinheit;

        return $this;
    }

    public function getMwst(): ?string
    {
        return $this->mwst;
    }

    public function setMwst(string $mwst): self
    {
        $this->mwst = $mwst;

        return $this;
    }

    public function getPsatz(): ?float
    {
        return $this->psatz;
    }

    public function setPsatz(float $psatz): self
    {
        $this->psatz = $psatz;

        return $this;
    }

    public function getAktiv(): ?int
    {
        return $this->aktiv;
    }

    public function setAktiv(int $aktiv): self
    {
        $this->aktiv = $aktiv;

        return $this;
    }

    public function getFreigegeben(): ?int
    {
        return $this->freigegeben;
    }

    public function setFreigegeben(int $freigegeben): self
    {
        $this->freigegeben = $freigegeben;

        return $this;
    }
}
