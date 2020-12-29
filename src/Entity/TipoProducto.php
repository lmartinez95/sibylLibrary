<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoProducto
 *
 * @ORM\Table(name="tipoproducto", uniqueConstraints={@ORM\UniqueConstraint(name="uq_tprocodigo", columns={"tprocodigo"})})
 * @ORM\Entity
 */
class TipoProducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="tproid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_tproid", allocationSize=1, initialValue=1)
     */
    private $tproId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tprocodigo", type="string", length=10, nullable=true)
     */
    private $tproCodigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tproabrev", type="string", length=15, nullable=true)
     */
    private $tproAbrev;

    /**
     * @var string
     *
     * @ORM\Column(name="tpronombre", type="string", length=30, nullable=false)
     */
    private $tproNombre;

    public function getTproId(): ?int
    {
        return $this->tproId;
    }

    public function getTproCodigo(): ?string
    {
        return $this->tproCodigo;
    }

    public function setTproCodigo(?string $tproCodigo): self
    {
        $this->tproCodigo = $tproCodigo;

        return $this;
    }

    public function getTproAbrev(): ?string
    {
        return $this->tproAbrev;
    }

    public function setTproAbrev(?string $tproAbrev): self
    {
        $this->tproAbrev = $tproAbrev;

        return $this;
    }

    public function getTproNombre(): ?string
    {
        return $this->tproNombre;
    }

    public function setTproNombre(string $tproNombre): self
    {
        $this->tproNombre = $tproNombre;

        return $this;
    }


}
