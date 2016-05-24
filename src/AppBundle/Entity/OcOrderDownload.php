<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderDownload
 *
 * @ORM\Table(name="oc_order_download")
 * @ORM\Entity
 */
class OcOrderDownload
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_product_id", type="integer", nullable=false)
     */
    private $orderProductId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=128, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=128, nullable=false)
     */
    private $mask = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="remaining", type="integer", nullable=false)
     */
    private $remaining = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="order_download_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderDownloadId;



    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcOrderDownload
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderProductId
     *
     * @param integer $orderProductId
     *
     * @return OcOrderDownload
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;

        return $this;
    }

    /**
     * Get orderProductId
     *
     * @return integer
     */
    public function getOrderProductId()
    {
        return $this->orderProductId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcOrderDownload
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
     * Set filename
     *
     * @param string $filename
     *
     * @return OcOrderDownload
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set mask
     *
     * @param string $mask
     *
     * @return OcOrderDownload
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set remaining
     *
     * @param integer $remaining
     *
     * @return OcOrderDownload
     */
    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;

        return $this;
    }

    /**
     * Get remaining
     *
     * @return integer
     */
    public function getRemaining()
    {
        return $this->remaining;
    }

    /**
     * Get orderDownloadId
     *
     * @return integer
     */
    public function getOrderDownloadId()
    {
        return $this->orderDownloadId;
    }
}
