<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcWeightClassDescription
 *
 * @ORM\Table(name="oc_weight_class_description")
 * @ORM\Entity
 */
class OcWeightClassDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=32, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=4, nullable=false)
     */
    private $unit = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="weight_class_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $weightClassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcWeightClassDescription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return OcWeightClassDescription
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set weightClassId
     *
     * @param integer $weightClassId
     *
     * @return OcWeightClassDescription
     */
    public function setWeightClassId($weightClassId)
    {
        $this->weightClassId = $weightClassId;

        return $this;
    }

    /**
     * Get weightClassId
     *
     * @return integer
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcWeightClassDescription
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
