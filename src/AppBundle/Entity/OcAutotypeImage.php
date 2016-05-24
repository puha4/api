<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAutotypeImage
 *
 * @ORM\Table(name="oc_autotype_image")
 * @ORM\Entity
 */
class OcAutotypeImage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_id", type="integer", nullable=false)
     */
    private $autotypeId;

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
     * @ORM\Column(name="autotype_image_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $autotypeImageId;



    /**
     * Set autotypeId
     *
     * @param integer $autotypeId
     *
     * @return OcAutotypeImage
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
     * Set link
     *
     * @param string $link
     *
     * @return OcAutotypeImage
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
     * @return OcAutotypeImage
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
     * Get autotypeImageId
     *
     * @return integer
     */
    public function getAutotypeImageId()
    {
        return $this->autotypeImageId;
    }
}
