<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLengthClassDescription
 *
 * @ORM\Table(name="oc_length_class_description")
 * @ORM\Entity
 */
class OcLengthClassDescription
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
    private $unit;

    /**
     * @var integer
     *
     * @ORM\Column(name="length_class_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lengthClassId;

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
     * @return OcLengthClassDescription
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
     * @return OcLengthClassDescription
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
     * Set lengthClassId
     *
     * @param integer $lengthClassId
     *
     * @return OcLengthClassDescription
     */
    public function setLengthClassId($lengthClassId)
    {
        $this->lengthClassId = $lengthClassId;

        return $this;
    }

    /**
     * Get lengthClassId
     *
     * @return integer
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcLengthClassDescription
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
