<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryOptionValue
 *
 * @ORM\Table(name="oc_category_option_value")
 * @ORM\Entity
 */
class OcCategoryOptionValue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="integer", nullable=true)
     */
    private $optionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="value_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $valueId;



    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcCategoryOptionValue
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId
     *
     * @return integer
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Get valueId
     *
     * @return integer
     */
    public function getValueId()
    {
        return $this->valueId;
    }
}
