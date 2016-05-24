<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcBannerImage
 *
 * @ORM\Table(name="oc_banner_image")
 * @ORM\Entity
 */
class OcBannerImage
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
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="banner_image_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerImageId;



    /**
     * Set bannerId
     *
     * @param integer $bannerId
     *
     * @return OcBannerImage
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
     * Set link
     *
     * @param string $link
     *
     * @return OcBannerImage
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcBannerImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
}
