<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcManufacturerDescription
 *
 * @ORM\Table(name="oc_manufacturer_description")
 * @ORM\Entity
 */
class OcManufacturerDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=false)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keyword", type="string", length=255, nullable=false)
     */
    private $metaKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=false)
     */
    private $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_h1", type="string", length=255, nullable=false)
     */
    private $seoH1;

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturer_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $manufacturerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set description
     *
     * @param string $description
     *
     * @return OcManufacturerDescription
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return OcManufacturerDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set metaKeyword
     *
     * @param string $metaKeyword
     *
     * @return OcManufacturerDescription
     */
    public function setMetaKeyword($metaKeyword)
    {
        $this->metaKeyword = $metaKeyword;

        return $this;
    }

    /**
     * Get metaKeyword
     *
     * @return string
     */
    public function getMetaKeyword()
    {
        return $this->metaKeyword;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return OcManufacturerDescription
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoH1
     *
     * @param string $seoH1
     *
     * @return OcManufacturerDescription
     */
    public function setSeoH1($seoH1)
    {
        $this->seoH1 = $seoH1;

        return $this;
    }

    /**
     * Get seoH1
     *
     * @return string
     */
    public function getSeoH1()
    {
        return $this->seoH1;
    }

    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return OcManufacturerDescription
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcManufacturerDescription
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
