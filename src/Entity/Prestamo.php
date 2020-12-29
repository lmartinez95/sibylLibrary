<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table(name="prestamo", indexes={@ORM\Index(name="IDX_F4D874F2270F5E41", columns={"usrid"}), @ORM\Index(name="IDX_F4D874F243AD8677", columns={"proid"}), @ORM\Index(name="IDX_F4D874F2B585FA55", columns={"cfgid"})})
 * @ORM\Entity
 */
class Prestamo
{
    /**
     * @var int
     *
     * @ORM\Column(name="prstid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="prestamo_prstid_seq", allocationSize=1, initialValue=1)
     */
    private $prstId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prstfechapres", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $prstFechaPrestamo = 'now()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prstfechaprevdev", type="datetime", nullable=true)
     */
    private $prstFechaPrevDev;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prstfechadev", type="datetime", nullable=true)
     */
    private $prstFechaDev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prstmora", type="decimal", precision=4, scale=4, nullable=true, options={"default"="0.0"})
     */
    private $prstMora = '0.0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="prstdev", type="boolean", nullable=true)
     */
    private $prstDev = false;

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

    public function getPrstId(): ?int
    {
        return $this->prstId;
    }

    public function getPrstFechaPrestamo(): ?\DateTimeInterface
    {
        return $this->prstFechaPrestamo;
    }

    public function setPrstFechaPrestamo(?\DateTimeInterface $prstFechaPrestamo): self
    {
        $this->prstFechaPrestamo = $prstFechaPrestamo;

        return $this;
    }

    public function getPrstFechaPrevDev(): ?\DateTimeInterface
    {
        return $this->prstFechaPrevDev;
    }

    public function setPrstFechaPrevDev(?\DateTimeInterface $prstFechaPrevDev): self
    {
        $this->prstFechaPrevDev = $prstFechaPrevDev;

        return $this;
    }

    public function getPrstFechaDev(): ?\DateTimeInterface
    {
        return $this->prstFechaDev;
    }

    public function setPrstFechaDev(?\DateTimeInterface $prstFechaDev): self
    {
        $this->prstFechaDev = $prstFechaDev;

        return $this;
    }

    public function getPrstMora(): ?string
    {
        return $this->prstMora;
    }

    public function setPrstMora(?string $prstMora): self
    {
        $this->prstMora = $prstMora;

        return $this;
    }

    public function getPrstDev(): ?bool
    {
        return $this->prstDev;
    }

    public function setPrstDev(?bool $prstDev): self
    {
        $this->prstDev = $prstDev;

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
