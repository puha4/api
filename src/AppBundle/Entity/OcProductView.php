<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductView
 *
 * @ORM\Table(name="oc_product_view", uniqueConstraints={@ORM\UniqueConstraint(name="product_id", columns={"product_id"})})
 * @ORM\Entity
 */
class OcProductView
{
    /**
     * @var integer
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;



    /**
     * Set viewed
     *
     * @param integer $viewed
     *
     * @return OcProductView
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return integer
     */
    public function getViewed()
    {
        return $this->viewed;
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
}
