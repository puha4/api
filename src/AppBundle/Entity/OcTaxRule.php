<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcTaxRule
 *
 * @ORM\Table(name="oc_tax_rule")
 * @ORM\Entity
 */
class OcTaxRule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_id", type="integer", nullable=false)
     */
    private $taxRateId;

    /**
     * @var string
     *
     * @ORM\Column(name="based", type="string", length=10, nullable=false)
     */
    private $based;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rule_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxRuleId;



    /**
     * Set taxClassId
     *
     * @param integer $taxClassId
     *
     * @return OcTaxRule
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId
     *
     * @return integer
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return OcTaxRule
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
     * Set based
     *
     * @param string $based
     *
     * @return OcTaxRule
     */
    public function setBased($based)
    {
        $this->based = $based;

        return $this;
    }

    /**
     * Get based
     *
     * @return string
     */
    public function getBased()
    {
        return $this->based;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return OcTaxRule
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Get taxRuleId
     *
     * @return integer
     */
    public function getTaxRuleId()
    {
        return $this->taxRuleId;
    }
}
