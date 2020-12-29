<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="uq_usrcodigo", columns={"usrcodigo"})}, indexes={@ORM\Index(name="IDX_2265B05DC05C4728", columns={"tusrid"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="usrid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_usrid_seq", allocationSize=1, initialValue=1)
     */
    private $usrId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usrcodigo", type="string", length=10, nullable=true)
     */
    private $usrCodigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usrnombre", type="string", length=50, nullable=true)
     */
    private $usrNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usrapellido", type="string", length=50, nullable=true)
     */
    private $usrApellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usrpass", type="string", length=64, nullable=true)
     */
    private $usrPass;

    /**
     * @var \TipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="TipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tusrid", referencedColumnName="tusrid")
     * })
     */
    private $tusrId;

    public function getUsrId(): ?int
    {
        return $this->usrId;
    }

    public function getUsrCodigo(): ?string
    {
        return $this->usrCodigo;
    }

    public function setUsrCodigo(?string $usrCodigo): self
    {
        $this->usrCodigo = $usrCodigo;

        return $this;
    }

    public function getUsrNombre(): ?string
    {
        return $this->usrNombre;
    }

    public function setUsrNombre(?string $usrNombre): self
    {
        $this->usrNombre = $usrNombre;

        return $this;
    }

    public function getUsrApellido(): ?string
    {
        return $this->usrApellido;
    }

    public function setUsrApellido(?string $usrApellido): self
    {
        $this->usrApellido = $usrApellido;

        return $this;
    }

    public function getUsrPass(): ?string
    {
        return $this->usrPass;
    }

    public function setUsrPass(?string $usrPass): self
    {
        $this->usrPass = $usrPass;

        return $this;
    }

    public function getTusrId(): ?TipoUsuario
    {
        return $this->tusrId;
    }

    public function setTusrId(?TipoUsuario $tusrId): self
    {
        $this->tusrId = $tusrId;

        return $this;
    }


}
