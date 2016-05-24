<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAttributeGroup
 *
 * @ORM\Table(name="oc_attribute_group")
 * @ORM\Entity
 */
class OcAttributeGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeGroupId;



    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcAttributeGroup
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
     * Get attributeGroupId
     *
     * @return integer
     */
    public function getAttributeGroupId()
    {
        return $this->attributeGroupId;
    }
}
