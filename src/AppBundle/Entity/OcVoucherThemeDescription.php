<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherThemeDescription
 *
 * @ORM\Table(name="oc_voucher_theme_description")
 * @ORM\Entity
 */
class OcVoucherThemeDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="voucher_theme_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $voucherThemeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcVoucherThemeDescription
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
     * Set voucherThemeId
     *
     * @param integer $voucherThemeId
     *
     * @return OcVoucherThemeDescription
     */
    public function setVoucherThemeId($voucherThemeId)
    {
        $this->voucherThemeId = $voucherThemeId;

        return $this;
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

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcVoucherThemeDescription
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
