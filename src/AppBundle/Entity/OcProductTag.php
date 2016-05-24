<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductTag
 *
 * @ORM\Table(name="oc_product_tag", indexes={@ORM\Index(name="product_id", columns={"product_id"}), @ORM\Index(name="language_id", columns={"language_id"}), @ORM\Index(name="tag", columns={"tag"})})
 * @ORM\Entity
 */
class OcProductTag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=32, nullable=false)
     */
    private $tag;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_tag_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productTagId;



    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductTag
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
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcProductTag
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return OcProductTag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Get productTagId
     *
     * @return integer
     */
    public function getProductTagId()
    {
        return $this->productTagId;
    }
}
