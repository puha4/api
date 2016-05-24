<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcTaxRateToCustomerGroup
 *
 * @ORM\Table(name="oc_tax_rate_to_customer_group")
 * @ORM\Entity
 */
class OcTaxRateToCustomerGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $taxRateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerGroupId;



    /**
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return OcTaxRateToCustomerGroup
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * Get taxRateId
     *
     * @return integer
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcTaxRateToCustomerGroup
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
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
