<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToValue
 *
 * @ORM\Table(name="oc_product_to_value")
 * @ORM\Entity
 */
class OcProductToValue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="value_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $valueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optionId;



    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToValue
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set valueId
     *
     * @param integer $valueId
     *
     * @return OcProductToValue
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;

        return $this;
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

    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcProductToValue
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
}
