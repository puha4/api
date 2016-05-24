<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryOptionValueDescription
 *
 * @ORM\Table(name="oc_category_option_value_description")
 * @ORM\Entity
 */
class OcCategoryOptionValueDescription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_id", type="integer", nullable=false)
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=127, nullable=false)
     */
    private $name;

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
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcCategoryOptionValueDescription
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
     * Set name
     *
     * @param string $name
     *
     * @return OcCategoryOptionValueDescription
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
     * Set valueId
     *
     * @param integer $valueId
     *
     * @return OcCategoryOptionValueDescription
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
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcCategoryOptionValueDescription
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
