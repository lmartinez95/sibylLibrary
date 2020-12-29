<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saldo
 *
 * @ORM\Table(name="saldo", indexes={@ORM\Index(name="IDX_669B1D4A43AD8677", columns={"proid"}), @ORM\Index(name="IDX_669B1D4AB585FA55", columns={"cfgid"})})
 * @ORM\Entity
 */
class Saldo
{
    /**
     * @var int
     *
     * @ORM\Column(name="sldid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="saldo_sldid_seq", allocationSize=1, initialValue=1)
     */
    private $sldId;

    /**
     * @var int
     *
     * @ORM\Column(name="sldtotal", type="integer", nullable=false)
     */
    private $sldTotal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sldreserva", type="integer", nullable=false)
     */
    private $sldReserva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sldprestamo", type="integer", nullable=false)
     */
    private $sldPrestamo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sldsaldo", type="integer", nullable=true)
     */
    private $sldSaldo = '0';

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proid", referencedColumnName="proid")
     * })
     */
    private $proId;

    /**
     * @var \Configuracion
     *
     * @ORM\ManyToOne(targetEntity="Configuracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cfgid", referencedColumnName="cfgid")
     * })
     */
    private $cfgId;

    public function getSldId(): ?int
    {
        return $this->sldId;
    }

    public function getSldTotal(): ?int
    {
        return $this->sldTotal;
    }

    public function setSldTotal(int $sldTotal): self
    {
        $this->sldTotal = $sldTotal;

        return $this;
    }

    public function getSldReserva(): ?int
    {
        return $this->sldReserva;
    }

    public function setSldReserva(int $sldReserva): self
    {
        $this->sldReserva = $sldReserva;

        return $this;
    }

    public function getSldPrestamo(): ?int
    {
        return $this->sldPrestamo;
    }

    public function setSldPrestamo(int $sldPrestamo): self
    {
        $this->sldPrestamo = $sldPrestamo;

        return $this;
    }

    public function getSldSaldo(): ?int
    {
        return $this->sldSaldo;
    }

    public function setSldSaldo(?int $sldSaldo): self
    {
        $this->sldSaldo = $sldSaldo;

        return $this;
    }

    public function getProId(): ?Producto
    {
        return $this->proId;
    }

    public function setProId(?Producto $proId): self
    {
        $this->proId = $proId;

        return $this;
    }

    public function getCfgId(): ?Configuracion
    {
        return $this->cfgId;
    }

    public function setCfgId(?Configuracion $cfgId): self
    {
        $this->cfgId = $cfgId;

        return $this;
    }


}
