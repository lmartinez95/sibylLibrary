<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productomateria
 *
 * @ORM\Table(name="productomateria", indexes={@ORM\Index(name="IDX_39E41A4943AD8677", columns={"proid"}), @ORM\Index(name="IDX_39E41A49890261A4", columns={"matid"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductoMateriaRepository")
 */
class Productomateria
{
    /**
     * @var int
     *
     * @ORM\Column(name="promatid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_promatid", allocationSize=1, initialValue=1)
     */
    private $promatid;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proid", referencedColumnName="proid")
     * })
     */
    private $proid;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matid", referencedColumnName="matid")
     * })
     */
    private $matid;

    public function getPromatid(): ?int
    {
        return $this->promatid;
    }

    public function getProid(): ?Producto
    {
        return $this->proid;
    }

    public function setProid(?Producto $proid): self
    {
        $this->proid = $proid;

        return $this;
    }

    public function getMatid(): ?Materia
    {
        return $this->matid;
    }

    public function setMatid(?Materia $matid): self
    {
        $this->matid = $matid;

        return $this;
    }


}
