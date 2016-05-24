<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAttributeGroupDescription
 *
 * @ORM\Table(name="oc_attribute_group_description")
 * @ORM\Entity
 */
class OcAttributeGroupDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $attributeGroupId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcAttributeGroupDescription
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
     * Set attributeGroupId
     *
     * @param integer $attributeGroupId
     *
     * @return OcAttributeGroupDescription
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
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcAttributeGroupDescription
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
}
