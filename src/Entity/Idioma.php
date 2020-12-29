<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Idioma
 *
 * @ORM\Table(name="idioma")
 * @ORM\Entity
 */
class Idioma
{
    /**
     * @var int
     *
     * @ORM\Column(name="langid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="langid", allocationSize=1, initialValue=1)
     */
    private $langId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langabrev", type="string", length=10, nullable=true)
     */
    private $langAbrev;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langnombre", type="string", length=50, nullable=true)
     */
    private $langNombre;

    public function getLangId(): ?int
    {
        return $this->langId;
    }

    public function getLangAbrev(): ?string
    {
        return $this->langAbrev;
    }

    public function setLangAbrev(?string $langAbrev): self
    {
        $this->langAbrev = $langAbrev;

        return $this;
    }

    public function getLangNombre(): ?string
    {
        return $this->langNombre;
    }

    public function setLangNombre(?string $langNombre): self
    {
        $this->langNombre = $langNombre;

        return $this;
    }


}
