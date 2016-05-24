<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationToLayout
 *
 * @ORM\Table(name="oc_information_to_layout")
 * @ORM\Entity
 */
class OcInformationToLayout
{
    /**
     * @var integer
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;

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
     * @ORM\Column(name="store_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;



    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcInformationToLayout
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId
     *
     * @return integer
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set informationId
     *
     * @param integer $informationId
     *
     * @return OcInformationToLayout
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
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcInformationToLayout
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
}
