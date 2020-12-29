<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia", uniqueConstraints={@ORM\UniqueConstraint(name="uq_matcodigo", columns={"matcodigo"})}, indexes={@ORM\Index(name="IDX_6DF052842E75294C", columns={"matidprin"})})
 * @ORM\Entity(repositoryClass="App\Repository\MateriaRepository")
 */
class Materia
{
    /**
     * @var int
     *
     * @ORM\Column(name="matid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_matid", allocationSize=1, initialValue=1)
     */
    private $matid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="matcodigo", type="string", length=10, nullable=true)
     */
    private $matcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="matnombre", type="string", length=50, nullable=false)
     */
    private $matnombre;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matidprin", referencedColumnName="matid")
     * })
     */
    private $matidprin;

    public function getMatid(): ?int
    {
        return $this->matid;
    }

    public function getMatcodigo(): ?string
    {
        return $this->matcodigo;
    }

    public function setMatcodigo(?string $matcodigo): self
    {
        $this->matcodigo = $matcodigo;

        return $this;
    }

    public function getMatnombre(): ?string
    {
        return $this->matnombre;
    }

    public function setMatnombre(string $matnombre): self
    {
        $this->matnombre = $matnombre;

        return $this;
    }

    public function getMatidprin(): ?self
    {
        return $this->matidprin;
    }

    public function setMatidprin(?self $matidprin): self
    {
        $this->matidprin = $matidprin;

        return $this;
    }


}
