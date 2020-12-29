<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva", indexes={@ORM\Index(name="IDX_188D2E3B270F5E41", columns={"usrid"}), @ORM\Index(name="IDX_188D2E3B43AD8677", columns={"proid"}), @ORM\Index(name="IDX_188D2E3BB585FA55", columns={"cfgid"})})
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var int
     *
     * @ORM\Column(name="rsvid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reserva_rsvid_seq", allocationSize=1, initialValue=1)
     */
    private $rsvId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rsvfechareserva", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $rsvFechaReserva = 'now()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rsvfecharetiro", type="datetime", nullable=true)
     */
    private $rsvFechaRetiro;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usrid", referencedColumnName="usrid")
     * })
     */
    private $usrId;

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
     * @var \Configuracion
     *
     * @ORM\ManyToOne(targetEntity="Configuracion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cfgid", referencedColumnName="cfgid")
     * })
     */
    private $cfgId;

    public function getRsvId(): ?int
    {
        return $this->rsvId;
    }

    public function getRsvFechaReserva(): ?\DateTimeInterface
    {
        return $this->rsvFechaReserva;
    }

    public function setRsvFechaReserva(?\DateTimeInterface $rsvFechaReserva): self
    {
        $this->rsvFechaReserva = $rsvFechaReserva;

        return $this;
    }

    public function getRsvFechaRetiro(): ?\DateTimeInterface
    {
        return $this->rsvFechaRetiro;
    }

    public function setRsvFechaRetiro(?\DateTimeInterface $rsvFechaRetiro): self
    {
        $this->rsvFechaRetiro = $rsvFechaRetiro;

        return $this;
    }

    public function getUsrId(): ?Usuario
    {
        return $this->usrId;
    }

    public function setUsrId(?Usuario $usrId): self
    {
        $this->usrId = $usrId;

        return $this;
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

    public function getCfgId(): ?Configuracion
    {
        return $this->cfgId;
    }

    public function setCfgId(?Configuracion $cfgId): self
    {
        $this->cfgId = $cfgId;

        return $this;
    }


}
