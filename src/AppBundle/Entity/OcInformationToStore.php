<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationToStore
 *
 * @ORM\Table(name="oc_information_to_store")
 * @ORM\Entity
 */
class OcInformationToStore
{
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
     * Set informationId
     *
     * @param integer $informationId
     *
     * @return OcInformationToStore
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
     * @return OcInformationToStore
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
