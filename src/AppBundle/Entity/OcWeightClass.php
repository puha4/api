<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcWeightClass
 *
 * @ORM\Table(name="oc_weight_class")
 * @ORM\Entity
 */
class OcWeightClass
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=8, nullable=false)
     */
    private $value = '0.00000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="weight_class_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $weightClassId;



    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcWeightClass
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
     * Get weightClassId
     *
     * @return integer
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }
}
