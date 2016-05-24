<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcManufacturerToStore
 *
 * @ORM\Table(name="oc_manufacturer_to_store")
 * @ORM\Entity
 */
class OcManufacturerToStore
{
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
     * @ORM\Column(name="store_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;



    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return OcManufacturerToStore
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
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcManufacturerToStore
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
