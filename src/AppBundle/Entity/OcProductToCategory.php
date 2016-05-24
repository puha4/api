<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToCategory
 *
 * @ORM\Table(name="oc_product_to_category")
 * @ORM\Entity
 */
class OcProductToCategory
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="main_category", type="boolean", nullable=false)
     */
    private $mainCategory = '0';

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
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;



    /**
     * Set mainCategory
     *
     * @param boolean $mainCategory
     *
     * @return OcProductToCategory
     */
    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;

        return $this;
    }

    /**
     * Get mainCategory
     *
     * @return boolean
     */
    public function getMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToCategory
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcProductToCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
