<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoProducto
 *
 * @ORM\Table(name="estadoproducto")
 * @ORM\Entity
 */
class EstadoProducto
{
    /**
     * @var int
     *
     * @ORM\Column(name="stpid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estadoproducto_stpid_seq", allocationSize=1, initialValue=1)
     */
    private $stpId;

    /**
     * @var string
     *
     * @ORM\Column(name="stpestado", type="string", length=30, nullable=false)
     */
    private $stpEstado;

    public function getStpId(): ?int
    {
        return $this->stpId;
    }

    public function getStpEstado(): ?string
    {
        return $this->stpEstado;
    }

    public function setStpEstado(string $stpEstado): self
    {
        $this->stpEstado = $stpEstado;

        return $this;
    }


}
