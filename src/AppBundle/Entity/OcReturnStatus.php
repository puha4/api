<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnStatus
 *
 * @ORM\Table(name="oc_return_status")
 * @ORM\Entity
 */
class OcReturnStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="return_status_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnStatusId;

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
     * @return OcReturnStatus
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
     * Set returnStatusId
     *
     * @param integer $returnStatusId
     *
     * @return OcReturnStatus
     */
    public function setReturnStatusId($returnStatusId)
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    /**
     * Get returnStatusId
     *
     * @return integer
     */
    public function getReturnStatusId()
    {
        return $this->returnStatusId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcReturnStatus
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
