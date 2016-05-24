<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLayoutRoute
 *
 * @ORM\Table(name="oc_layout_route")
 * @ORM\Entity
 */
class OcLayoutRoute
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
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="string", length=255, nullable=false)
     */
    private $route;

    /**
     * @var integer
     *
     * @ORM\Column(name="layout_route_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $layoutRouteId;



    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcLayoutRoute
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
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcLayoutRoute
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

    /**
     * Set route
     *
     * @param string $route
     *
     * @return OcLayoutRoute
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get layoutRouteId
     *
     * @return integer
     */
    public function getLayoutRouteId()
    {
        return $this->layoutRouteId;
    }
}
