<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion
 *
 * @ORM\Table(name="configuracion", indexes={@ORM\Index(name="IDX_682CCAF158C02B4", columns={"paiid"})})
 * @ORM\Entity
 */
class Configuracion
{
    /**
     * @var int
     *
     * @ORM\Column(name="cfgid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_cfgid", allocationSize=1, initialValue=1)
     */
    private $cfgid;

    /**
     * @var string
     *
     * @ORM\Column(name="cfgnombre", type="string", length=50, nullable=false)
     */
    private $cfgnombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfgdireccion", type="string", length=250, nullable=true)
     */
    private $cfgdireccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfgtelefono1", type="string", length=10, nullable=true)
     */
    private $cfgtelefono1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfgtelefono2", type="string", length=10, nullable=true)
     */
    private $cfgtelefono2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cfgmora", type="decimal", precision=4, scale=4, nullable=true)
     */
    private $cfgmora;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cfgmaxprestamos", type="smallint", nullable=true)
     */
    private $cfgmaxprestamos;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cfgpermitreserva", type="boolean", nullable=true, options={"default"="1"})
     */
    private $cfgpermitreserva = true;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paiid", referencedColumnName="paiid")
     * })
     */
    private $paiid;

    public function getCfgid(): ?int
    {
        return $this->cfgid;
    }

    public function getCfgnombre(): ?string
    {
        return $this->cfgnombre;
    }

    public function setCfgnombre(string $cfgnombre): self
    {
        $this->cfgnombre = $cfgnombre;

        return $this;
    }

    public function getCfgdireccion(): ?string
    {
        return $this->cfgdireccion;
    }

    public function setCfgdireccion(?string $cfgdireccion): self
    {
        $this->cfgdireccion = $cfgdireccion;

        return $this;
    }

    public function getCfgtelefono1(): ?string
    {
        return $this->cfgtelefono1;
    }

    public function setCfgtelefono1(?string $cfgtelefono1): self
    {
        $this->cfgtelefono1 = $cfgtelefono1;

        return $this;
    }

    public function getCfgtelefono2(): ?string
    {
        return $this->cfgtelefono2;
    }

    public function setCfgtelefono2(?string $cfgtelefono2): self
    {
        $this->cfgtelefono2 = $cfgtelefono2;

        return $this;
    }

    public function getCfgmora(): ?string
    {
        return $this->cfgmora;
    }

    public function setCfgmora(?string $cfgmora): self
    {
        $this->cfgmora = $cfgmora;

        return $this;
    }

    public function getCfgmaxprestamos(): ?int
    {
        return $this->cfgmaxprestamos;
    }

    public function setCfgmaxprestamos(?int $cfgmaxprestamos): self
    {
        $this->cfgmaxprestamos = $cfgmaxprestamos;

        return $this;
    }

    public function getCfgpermitreserva(): ?bool
    {
        return $this->cfgpermitreserva;
    }

    public function setCfgpermitreserva(?bool $cfgpermitreserva): self
    {
        $this->cfgpermitreserva = $cfgpermitreserva;

        return $this;
    }

    public function getPaiid(): ?Pais
    {
        return $this->paiid;
    }

    public function setPaiid(?Pais $paiid): self
    {
        $this->paiid = $paiid;

        return $this;
    }


}
