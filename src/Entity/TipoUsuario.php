<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoUsuario
 *
 * @ORM\Table(name="tipousuario")
 * @ORM\Entity
 */
class TipoUsuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="tusrid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipousuario_tusrid_seq", allocationSize=1, initialValue=1)
     */
    private $tusrId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tusrabrev", type="string", length=10, nullable=true)
     */
    private $tusrAbrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tusrnombre", type="string", length=50, nullable=true)
     */
    private $tusrNombre;

    public function getTusrId(): ?int
    {
        return $this->tusrId;
    }

    public function getTusrAbrev(): ?string
    {
        return $this->tusrAbrev;
    }

    public function setTusrAbrev(?string $tusrAbrev): self
    {
        $this->tusrAbrev = $tusrAbrev;

        return $this;
    }

    public function getTusrNombre(): ?string
    {
        return $this->tusrNombre;
    }

    public function setTusrNombre(?string $tusrNombre): self
    {
        $this->tusrNombre = $tusrNombre;

        return $this;
    }


}
