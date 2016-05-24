<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcZoneToGeoZone
 *
 * @ORM\Table(name="oc_zone_to_geo_zone")
 * @ORM\Entity
 */
class OcZoneToGeoZone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false)
     */
    private $zoneId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="geo_zone_id", type="integer", nullable=false)
     */
    private $geoZoneId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_to_geo_zone_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zoneToGeoZoneId;



    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return OcZoneToGeoZone
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return integer
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set geoZoneId
     *
     * @param integer $geoZoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setGeoZoneId($geoZoneId)
    {
        $this->geoZoneId = $geoZoneId;

        return $this;
    }

    /**
     * Get geoZoneId
     *
     * @return integer
     */
    public function getGeoZoneId()
    {
        return $this->geoZoneId;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcZoneToGeoZone
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OcZoneToGeoZone
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Get zoneToGeoZoneId
     *
     * @return integer
     */
    public function getZoneToGeoZoneId()
    {
        return $this->zoneToGeoZoneId;
    }
}
