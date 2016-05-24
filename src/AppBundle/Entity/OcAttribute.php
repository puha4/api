<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAttribute
 *
 * @ORM\Table(name="oc_attribute")
 * @ORM\Entity
 */
class OcAttribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_group_id", type="integer", nullable=false)
     */
    private $attributeGroupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeId;



    /**
     * Set attributeGroupId
     *
     * @param integer $attributeGroupId
     *
     * @return OcAttribute
     */
    public function setAttributeGroupId($attributeGroupId)
    {
        $this->attributeGroupId = $attributeGroupId;

        return $this;
    }

    /**
     * Get attributeGroupId
     *
     * @return integer
     */
    public function getAttributeGroupId()
    {
        return $this->attributeGroupId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcAttribute
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Get attributeId
     *
     * @return integer
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }
}
