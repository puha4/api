<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationDescription
 *
 * @ORM\Table(name="oc_information_description")
 * @ORM\Entity
 */
class OcInformationDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title = '';

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
     * @ORM\Column(name="information_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $informationId;

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
     * @return OcInformationDescription
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
     * Set description
     *
     * @param string $description
     *
     * @return OcInformationDescription
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
     * @return OcInformationDescription
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
     * @return OcInformationDescription
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
     * @return OcInformationDescription
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
     * @return OcInformationDescription
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
     * Set informationId
     *
     * @param integer $informationId
     *
     * @return OcInformationDescription
     */
    public function setInformationId($informationId)
    {
        $this->informationId = $informationId;

        return $this;
    }

    /**
     * Get informationId
     *
     * @return integer
     */
    public function getInformationId()
    {
        return $this->informationId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcInformationDescription
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
