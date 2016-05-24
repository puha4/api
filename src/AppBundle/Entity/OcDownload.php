<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDownload
 *
 * @ORM\Table(name="oc_download")
 * @ORM\Entity
 */
class OcDownload
{
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="download_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $downloadId;



    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return OcDownload
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
     * @return OcDownload
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
     * @return OcDownload
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
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcDownload
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
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
