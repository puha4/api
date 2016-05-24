<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLengthClass
 *
 * @ORM\Table(name="oc_length_class")
 * @ORM\Entity
 */
class OcLengthClass
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=8, nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="length_class_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lengthClassId;



    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcLengthClass
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get lengthClassId
     *
     * @return integer
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }
}
