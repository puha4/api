<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnReason
 *
 * @ORM\Table(name="oc_return_reason")
 * @ORM\Entity
 */
class OcReturnReason
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="return_reason_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnReasonId;

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
     * @return OcReturnReason
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
     * Set returnReasonId
     *
     * @param integer $returnReasonId
     *
     * @return OcReturnReason
     */
    public function setReturnReasonId($returnReasonId)
    {
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * Get returnReasonId
     *
     * @return integer
     */
    public function getReturnReasonId()
    {
        return $this->returnReasonId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcReturnReason
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
