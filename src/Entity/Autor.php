<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autor
 *
 * @ORM\Table(name="autor", indexes={@ORM\Index(name="IDX_31075EBA58C02B4", columns={"paiid"})})
 * @ORM\Entity(repositoryClass="App\Repository\AutorRepository")
 */
class Autor
{
    /**
     * @var int
     *
     * @ORM\Column(name="autid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_autid", allocationSize=1, initialValue=1)
     */
    private $autId;

    /**
     * @var string
     *
     * @ORM\Column(name="autnombre", type="string", length=50, nullable=false)
     */
    private $autNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="autapellido", type="string", length=50, nullable=false)
     */
    private $autApellido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="autfechanac", type="date", nullable=true)
     */
    private $autFechaNac;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paiid", referencedColumnName="paiid")
     * })
     */
    private $paiId;

    public function getAutId(): ?int
    {
        return $this->autId;
    }

    public function getAutNombre(): ?string
    {
        return $this->autNombre;
    }

    public function setAutNombre(string $autNombre): self
    {
        $this->autNombre = $autNombre;

        return $this;
    }

    public function getAutApellido(): ?string
    {
        return $this->autApellido;
    }

    public function setAutApellido(string $autApellido): self
    {
        $this->autApellido = $autApellido;

        return $this;
    }

    public function getAutFechaNac(): ?\DateTimeInterface
    {
        return $this->autFechaNac;
    }

    public function setAutFechaNac(?\DateTimeInterface $autFechaNac): self
    {
        $this->autFechaNac = $autFechaNac;

        return $this;
    }

    public function getPaiId(): ?Pais
    {
        return $this->paiId;
    }

    public function setPaiId(?Pais $paiId): self
    {
        $this->paiId = $paiId;

        return $this;
    }

    

}
