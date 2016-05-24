<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToDownload
 *
 * @ORM\Table(name="oc_product_to_download")
 * @ORM\Entity
 */
class OcProductToDownload
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="download_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadId;



    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToDownload
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set downloadId
     *
     * @param integer $downloadId
     *
     * @return OcProductToDownload
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;

        return $this;
    }

    /**
     * Get downloadId
     *
     * @return integer
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }
}
