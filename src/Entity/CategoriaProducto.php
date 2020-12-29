<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaProducto
 *
 * @ORM\Table(name="categoriaproducto", uniqueConstraints={@ORM\UniqueConstraint(name="uq_cprocodigo", columns={"cprocodigo"})}, indexes={@ORM\Index(name="IDX_D19C18C6DB44B13D", columns={"cproidprin"})})
 * @ORM\Entity
 */
class CategoriaProducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cproid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_cproid", allocationSize=1, initialValue=1)
     */
    private $cproId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cprocodigo", type="string", length=10, nullable=true)
     */
    private $cproCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpronombre", type="string", length=350, nullable=false)
     */
    private $cproNombre;

    /**
     * @var \CategoriaProducto
     *
     * @ORM\ManyToOne(targetEntity="CategoriaProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cproidprin", referencedColumnName="cproid")
     * })
     */
    private $cproIdPrin;

    public function getCproId(): ?int
    {
        return $this->cproId;
    }

    public function getCproCodigo(): ?string
    {
        return $this->cproCodigo;
    }

    public function setCproCodigo(?string $cproCodigo): self
    {
        $this->cproCodigo = $cproCodigo;

        return $this;
    }

    public function getCproNombre(): ?string
    {
        return $this->cproNombre;
    }

    public function setCproNombre(string $cproNombre): self
    {
        $this->cproNombre = $cproNombre;

        return $this;
    }

    public function getCproIdPrin(): ?CategoriaProducto
    {
        return $this->cproIdPrin;
    }

    public function setCproIdPrin(?CategoriaProducto $cproIdPrin): self
    {
        $this->cproIdPrin = $cproIdPrin;

        return $this;
    }


}
