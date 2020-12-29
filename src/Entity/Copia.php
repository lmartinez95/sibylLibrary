<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Copia
 *
 * @ORM\Table(name="copia", indexes={@ORM\Index(name="IDX_A18EF4A543AD8677", columns={"proid"}), @ORM\Index(name="IDX_A18EF4A5B585FA55", columns={"cfgid"}), @ORM\Index(name="IDX_A18EF4A5361C4736", columns={"stpid"})})
 * @ORM\Entity
 */
class Copia
{
    /**
     * @var int
     *
     * @ORM\Column(name="cpid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="copia_cpid_seq", allocationSize=1, initialValue=1)
     */
    private $cpId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpubicacion", type="string", length=30, nullable=true)
     */
    private $cpUbicacion;

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

    /**
     * @var \EstadoProducto
     *
     * @ORM\ManyToOne(targetEntity="EstadoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stpid", referencedColumnName="stpid")
     * })
     */
    private $stpId;

    public function getCpId(): ?int
    {
        return $this->cpId;
    }

    public function getCpUbicacion(): ?string
    {
        return $this->cpUbicacion;
    }

    public function setCpUbicacion(?string $cpUbicacion): self
    {
        $this->cpUbicacion = $cpUbicacion;

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

    public function getStpId(): ?Estadoproducto
    {
        return $this->stpId;
    }

    public function setStpId(?Estadoproducto $stpId): self
    {
        $this->stpId = $stpId;

        return $this;
    }


}
