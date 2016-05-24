<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherTheme
 *
 * @ORM\Table(name="oc_voucher_theme")
 * @ORM\Entity
 */
class OcVoucherTheme
{
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="voucher_theme_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voucherThemeId;



    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcVoucherTheme
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
     * Get voucherThemeId
     *
     * @return integer
     */
    public function getVoucherThemeId()
    {
        return $this->voucherThemeId;
    }
}
