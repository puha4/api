<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAutotypeImageDescription
 *
 * @ORM\Table(name="oc_autotype_image_description")
 * @ORM\Entity
 */
class OcAutotypeImageDescription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_image_id", type="integer", nullable=false)
     */
    private $autotypeImageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_id", type="integer", nullable=false)
     */
    private $autotypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="description_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $descriptionId;



    /**
     * Set autotypeImageId
     *
     * @param integer $autotypeImageId
     *
     * @return OcAutotypeImageDescription
     */
    public function setAutotypeImageId($autotypeImageId)
    {
        $this->autotypeImageId = $autotypeImageId;

        return $this;
    }

    /**
     * Get autotypeImageId
     *
     * @return integer
     */
    public function getAutotypeImageId()
    {
        return $this->autotypeImageId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcAutotypeImageDescription
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
     * Set autotypeId
     *
     * @param integer $autotypeId
     *
     * @return OcAutotypeImageDescription
     */
    public function setAutotypeId($autotypeId)
    {
        $this->autotypeId = $autotypeId;

        return $this;
    }

    /**
     * Get autotypeId
     *
     * @return integer
     */
    public function getAutotypeId()
    {
        return $this->autotypeId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcAutotypeImageDescription
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
     * Get descriptionId
     *
     * @return integer
     */
    public function getDescriptionId()
    {
        return $this->descriptionId;
    }
}
