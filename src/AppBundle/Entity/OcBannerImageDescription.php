<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcBannerImageDescription
 *
 * @ORM\Table(name="oc_banner_image_description")
 * @ORM\Entity
 */
class OcBannerImageDescription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     */
    private $bannerId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="banner_image_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bannerImageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set bannerId
     *
     * @param integer $bannerId
     *
     * @return OcBannerImageDescription
     */
    public function setBannerId($bannerId)
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    /**
     * Get bannerId
     *
     * @return integer
     */
    public function getBannerId()
    {
        return $this->bannerId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcBannerImageDescription
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
     * Set bannerImageId
     *
     * @param integer $bannerImageId
     *
     * @return OcBannerImageDescription
     */
    public function setBannerImageId($bannerImageId)
    {
        $this->bannerImageId = $bannerImageId;

        return $this;
    }

    /**
     * Get bannerImageId
     *
     * @return integer
     */
    public function getBannerImageId()
    {
        return $this->bannerImageId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcBannerImageDescription
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
