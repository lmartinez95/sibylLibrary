<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editorial
 *
 * @ORM\Table(name="editorial", uniqueConstraints={@ORM\UniqueConstraint(name="uq_edtcodigo", columns={"edtcodigo"})}, indexes={@ORM\Index(name="IDX_8F71375458C02B4", columns={"paiid"})})
 * @ORM\Entity(repositoryClass="App\Repository\EditorialRepository")
 */
class Editorial
{
    /**
     * @var int
     *
     * @ORM\Column(name="edtid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_edtid", allocationSize=1, initialValue=1)
     */
    private $edtId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="edtcodigo", type="string", length=10, nullable=true)
     */
    private $edtCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="edtnombre", type="string", length=50, nullable=false)
     */
    private $edtNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="edttelefono", type="string", length=20, nullable=true)
     */
    private $edtTelefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="edtdireccion", type="string", length=1500, nullable=true)
     */
    private $edtDireccion;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paiid", referencedColumnName="paiid")
     * })
     */
    private $paiId;

    public function getEdtId(): ?int
    {
        return $this->edtId;
    }

    public function getEdtCodigo(): ?string
    {
        return $this->edtCodigo;
    }

    public function setEdtCodigo(?string $edtCodigo): self
    {
        $this->edtCodigo = $edtCodigo;

        return $this;
    }

    public function getEdtNombre(): ?string
    {
        return $this->edtNombre;
    }

    public function setEdtNombre(string $edtNombre): self
    {
        $this->edtNombre = $edtNombre;

        return $this;
    }

    public function getEdtTelefono(): ?string
    {
        return $this->edtTelefono;
    }

    public function setEdtTelefono(?string $edtTelefono): self
    {
        $this->edtTelefono = $edtTelefono;

        return $this;
    }

    public function getEdtDireccion(): ?string
    {
        return $this->edtDireccion;
    }

    public function setEdtDireccion(?string $edtDireccion): self
    {
        $this->edtDireccion = $edtDireccion;

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
