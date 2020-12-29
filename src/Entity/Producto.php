<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", uniqueConstraints={@ORM\UniqueConstraint(name="uq_procodigo", columns={"procodigo"}), @ORM\UniqueConstraint(name="uq_proisbnissn", columns={"proisbnissn"})}, indexes={@ORM\Index(name="IDX_A7BB0615A4FE9F1E", columns={"tproid"}), @ORM\Index(name="IDX_A7BB0615BA2DAD3D", columns={"cproid"}), @ORM\Index(name="IDX_A7BB06158EACDA57", columns={"edtid"}), @ORM\Index(name="IDX_A7BB06152271845", columns={"langid"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @var int
     *
     * @ORM\Column(name="proid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_proid", allocationSize=1, initialValue=1)
     */
    private $proId;

    /**
     * @var int
     *
     * @ORM\Column(name="proisbnissn", type="integer", nullable=false)
     */
    private $proIsbnIssn;

    /**
     * @var string
     *
     * @ORM\Column(name="procodigo", type="string", length=10, nullable=false)
     */
    private $proCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="pronombre", type="string", length=500, nullable=false)
     */
    private $proNombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="proedicion", type="smallint", nullable=true)
     */
    private $proEdicion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronumpagina", type="integer", nullable=true)
     */
    private $proNumpagina;

    /**
     * @var string|null
     *
     * @ORM\Column(name="propubliclugar", type="string", length=50, nullable=true)
     */
    private $proPublicLugar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="propublicanio", type="integer", nullable=true)
     */
    private $proPublicAnio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="provolumen", type="smallint", nullable=true)
     */
    private $proVolumen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronumejemplar", type="smallint", nullable=true)
     */
    private $proNumEjemplar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proempastado", type="string", length=50, nullable=true)
     */
    private $proEmpastado;

    /**
     * @var int|null
     *
     * @ORM\Column(name="propeso", type="smallint", nullable=true)
     */
    private $proPeso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="procoleccion", type="string", length=50, nullable=true)
     */
    private $proColeccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodescripcion", type="string", length=3500, nullable=true)
     */
    private $proDescripcion;

    /**
     * @var \TipoProducto
     *
     * @ORM\ManyToOne(targetEntity="TipoProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tproid", referencedColumnName="tproid")
     * })
     */
    private $tproId;

    /**
     * @var \CategoriaProducto
     *
     * @ORM\ManyToOne(targetEntity="CategoriaProducto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cproid", referencedColumnName="cproid")
     * })
     */
    private $cproId;

    /**
     * @var \Editorial
     *
     * @ORM\ManyToOne(targetEntity="Editorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edtid", referencedColumnName="edtid")
     * })
     */
    private $edtId;

    /**
     * @var \Idioma
     *
     * @ORM\ManyToOne(targetEntity="Idioma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="langid", referencedColumnName="langid")
     * })
     */
    private $langId;

    public function getProId(): ?int
    {
        return $this->proId;
    }

    public function getProIsbnIssn(): ?int
    {
        return $this->proIsbnIssn;
    }

    public function setProIsbnIssn(int $proIsbnIssn): self
    {
        $this->proIsbnIssn = $proIsbnIssn;

        return $this;
    }

    public function getProCodigo(): ?string
    {
        return $this->proCodigo;
    }

    public function setProCodigo(string $proCodigo): self
    {
        $this->proCodigo = $proCodigo;

        return $this;
    }

    public function getProNombre(): ?string
    {
        return $this->proNombre;
    }

    public function setProNombre(string $proNombre): self
    {
        $this->proNombre = $proNombre;

        return $this;
    }

    public function getProEdicion(): ?int
    {
        return $this->proEdicion;
    }

    public function setProEdicion(?int $proEdicion): self
    {
        $this->proEdicion = $proEdicion;

        return $this;
    }

    public function getProNumpagina(): ?int
    {
        return $this->proNumpagina;
    }

    public function setProNumpagina(?int $proNumpagina): self
    {
        $this->proNumpagina = $proNumpagina;

        return $this;
    }

    public function getProPublicLugar(): ?string
    {
        return $this->proPublicLugar;
    }

    public function setProPublicLugar(?string $proPublicLugar): self
    {
        $this->proPublicLugar = $proPublicLugar;

        return $this;
    }

    public function getProPublicAnio(): ?int
    {
        return $this->proPublicAnio;
    }

    public function setProPublicAnio(?int $proPublicAnio): self
    {
        $this->proPublicAnio = $proPublicAnio;

        return $this;
    }

    public function getProVolumen(): ?int
    {
        return $this->proVolumen;
    }

    public function setProVolumen(?int $proVolumen): self
    {
        $this->proVolumen = $proVolumen;

        return $this;
    }

    public function getProNumEjemplar(): ?int
    {
        return $this->proNumEjemplar;
    }

    public function setProNumEjemplar(?int $proNumEjemplar): self
    {
        $this->proNumEjemplar = $proNumEjemplar;

        return $this;
    }

    public function getProEmpastado(): ?string
    {
        return $this->proEmpastado;
    }

    public function setProEmpastado(?string $proEmpastado): self
    {
        $this->proEmpastado = $proEmpastado;

        return $this;
    }

    public function getProPeso(): ?int
    {
        return $this->proPeso;
    }

    public function setProPeso(?int $proPeso): self
    {
        $this->proPeso = $proPeso;

        return $this;
    }

    public function getProColeccion(): ?string
    {
        return $this->proColeccion;
    }

    public function setProColeccion(?string $proColeccion): self
    {
        $this->proColeccion = $proColeccion;

        return $this;
    }

    public function getProDescripcion(): ?string
    {
        return $this->proDescripcion;
    }

    public function setProDescripcion(?string $proDescripcion): self
    {
        $this->proDescripcion = $proDescripcion;

        return $this;
    }

    public function getTproId(): ?TipoProducto
    {
        return $this->tproId;
    }

    public function setTproId(?TipoProducto $tproId): self
    {
        $this->tproId = $tproId;

        return $this;
    }

    public function getCproId(): ?CategoriaProducto
    {
        return $this->cproId;
    }

    public function setCproId(?CategoriaProducto $cproId): self
    {
        $this->cproId = $cproId;

        return $this;
    }

    public function getEdtId(): ?Editorial
    {
        return $this->edtId;
    }

    public function setEdtId(?Editorial $edtId): self
    {
        $this->edtId = $edtId;

        return $this;
    }

    public function getLangId(): ?Idioma
    {
        return $this->langId;
    }

    public function setLangId(?Idioma $langId): self
    {
        $this->langId = $langId;

        return $this;
    }


}
