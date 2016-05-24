<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnProduct
 *
 * @ORM\Table(name="oc_return_product")
 * @ORM\Entity
 */
class OcReturnProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_id", type="integer", nullable=false)
     */
    private $returnId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_reason_id", type="integer", nullable=false)
     */
    private $returnReasonId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opened", type="boolean", nullable=false)
     */
    private $opened;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_action_id", type="integer", nullable=false)
     */
    private $returnActionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnProductId;



    /**
     * Set returnId
     *
     * @param integer $returnId
     *
     * @return OcReturnProduct
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * Get returnId
     *
     * @return integer
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcReturnProduct
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
     * Set name
     *
     * @param string $name
     *
     * @return OcReturnProduct
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return OcReturnProduct
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OcReturnProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set returnReasonId
     *
     * @param integer $returnReasonId
     *
     * @return OcReturnProduct
     */
    public function setReturnReasonId($returnReasonId)
    {
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * Get returnReasonId
     *
     * @return integer
     */
    public function getReturnReasonId()
    {
        return $this->returnReasonId;
    }

    /**
     * Set opened
     *
     * @param boolean $opened
     *
     * @return OcReturnProduct
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened
     *
     * @return boolean
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OcReturnProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set returnActionId
     *
     * @param integer $returnActionId
     *
     * @return OcReturnProduct
     */
    public function setReturnActionId($returnActionId)
    {
        $this->returnActionId = $returnActionId;

        return $this;
    }

    /**
     * Get returnActionId
     *
     * @return integer
     */
    public function getReturnActionId()
    {
        return $this->returnActionId;
    }

    /**
     * Get returnProductId
     *
     * @return integer
     */
    public function getReturnProductId()
    {
        return $this->returnProductId;
    }
}
