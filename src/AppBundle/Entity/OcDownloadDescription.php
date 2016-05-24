<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDownloadDescription
 *
 * @ORM\Table(name="oc_download_description")
 * @ORM\Entity
 */
class OcDownloadDescription
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="download_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadId;

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
     * @return OcDownloadDescription
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
     * Set downloadId
     *
     * @param integer $downloadId
     *
     * @return OcDownloadDescription
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

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcDownloadDescription
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
