<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnHistory
 *
 * @ORM\Table(name="oc_return_history")
 * @ORM\Entity
 */
class OcReturnHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="return_id", type="integer", nullable=false)
     */
    private $returnId;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     */
    private $returnStatusId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notify", type="boolean", nullable=false)
     */
    private $notify;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var integer
     *
     * @ORM\Column(name="return_history_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnHistoryId;



    /**
     * Set returnId
     *
     * @param integer $returnId
     *
     * @return OcReturnHistory
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * Get returnId
     *
     * @return integer
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set returnStatusId
     *
     * @param integer $returnStatusId
     *
     * @return OcReturnHistory
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
     * Set notify
     *
     * @param boolean $notify
     *
     * @return OcReturnHistory
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * Get notify
     *
     * @return boolean
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OcReturnHistory
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcReturnHistory
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
     * Get returnHistoryId
     *
     * @return integer
     */
    public function getReturnHistoryId()
    {
        return $this->returnHistoryId;
    }
}
