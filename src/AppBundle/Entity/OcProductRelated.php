<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductRelated
 *
 * @ORM\Table(name="oc_product_related")
 * @ORM\Entity
 */
class OcProductRelated
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
     * @ORM\Column(name="related_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $relatedId;



    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductRelated
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
     * Set relatedId
     *
     * @param integer $relatedId
     *
     * @return OcProductRelated
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;

        return $this;
    }

    /**
     * Get relatedId
     *
     * @return integer
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }
}
