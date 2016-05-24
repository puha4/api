<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcNewsToStore
 *
 * @ORM\Table(name="oc_news_to_store")
 * @ORM\Entity
 */
class OcNewsToStore
{
    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $newsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="store_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;



    /**
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return OcNewsToStore
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcNewsToStore
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
