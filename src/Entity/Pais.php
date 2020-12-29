<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity
 */
class Pais
{
    /**
     * @var int
     *
     * @ORM\Column(name="paiid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sq_paiid", allocationSize=1, initialValue=1)
     */
    private $paiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paiabrev", type="string", length=10, nullable=true)
     */
    private $paiAbrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="painombre", type="string", length=50, nullable=true)
     */
    private $paiNombre;

    public function getPaiId(): ?int
    {
        return $this->paiId;
    }

    public function getPaiAbrev(): ?string
    {
        return $this->paiAbrev;
    }

    public function setPaiAbrev(?string $paiAbrev): self
    {
        $this->paiAbrev = $paiAbrev;

        return $this;
    }

    public function getPaiNombre(): ?string
    {
        return $this->paiNombre;
    }

    public function setPaiNombre(?string $paiNombre): self
    {
        $this->paiNombre = $paiNombre;

        return $this;
    }

   

}
