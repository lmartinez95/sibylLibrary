<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoAutor
 *
 * @ORM\Table(name="productoautor", indexes={@ORM\Index(name="IDX_9421224B43AD8677", columns={"proid"}), @ORM\Index(name="IDX_9421224B93894C6D", columns={"autid"})})
 * @ORM\Entity
 */
class ProductoAutor
{
    /**
     * @var int
     *
     * @ORM\Column(name="proautid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_proautid", allocationSize=1, initialValue=1)
     */
    private $proautId;

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
     * @var \Autor
     *
     * @ORM\ManyToOne(targetEntity="Autor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="autid", referencedColumnName="autid")
     * })
     */
    private $autId;

    public function getProautId(): ?int
    {
        return $this->proautId;
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

    public function getAutId(): ?Autor
    {
        return $this->autId;
    }

    public function setAutId(?Autor $autId): self
    {
        $this->autId = $autId;

        return $this;
    }


}
