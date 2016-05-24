<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSetting
 *
 * @ORM\Table(name="oc_setting")
 * @ORM\Entity
 */
class OcSetting
{
    /**
     * @var integer
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=32, nullable=false)
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=64, nullable=false)
     */
    private $key = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="serialized", type="boolean", nullable=false)
     */
    private $serialized;

    /**
     * @var integer
     *
     * @ORM\Column(name="setting_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $settingId;



    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcSetting
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
     * Set group
     *
     * @param string $group
     *
     * @return OcSetting
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return OcSetting
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcSetting
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set serialized
     *
     * @param boolean $serialized
     *
     * @return OcSetting
     */
    public function setSerialized($serialized)
    {
        $this->serialized = $serialized;

        return $this;
    }

    /**
     * Get serialized
     *
     * @return boolean
     */
    public function getSerialized()
    {
        return $this->serialized;
    }

    /**
     * Get settingId
     *
     * @return integer
     */
    public function getSettingId()
    {
        return $this->settingId;
    }
}
