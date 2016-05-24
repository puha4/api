<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnAction
 *
 * @ORM\Table(name="oc_return_action")
 * @ORM\Entity
 */
class OcReturnAction
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
     * @ORM\Column(name="return_action_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnActionId;

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
     * @return OcReturnAction
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
     * Set returnActionId
     *
     * @param integer $returnActionId
     *
     * @return OcReturnAction
     */
    public function setReturnActionId($returnActionId)
    {
        $this->returnActionId = $returnActionId;

        return $this;
    }

    /**
     * Get returnActionId
     *
     * @return integer
     */
    public function getReturnActionId()
    {
        return $this->returnActionId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcReturnAction
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
