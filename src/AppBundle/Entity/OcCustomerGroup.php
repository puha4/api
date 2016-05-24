<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerGroup
 *
 * @ORM\Table(name="oc_customer_group")
 * @ORM\Entity
 */
class OcCustomerGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerGroupId;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcCustomerGroup
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
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }
}
