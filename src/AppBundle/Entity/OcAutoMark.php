<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAutoMark
 *
 * @ORM\Table(name="oc_auto_mark", indexes={@ORM\Index(name="mark", columns={"mark"})})
 * @ORM\Entity
 */
class OcAutoMark
{
    /**
     * @var string
     *
     * @ORM\Column(name="mark", type="string", length=255, nullable=true)
     */
    private $mark;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_id", type="integer", nullable=false)
     */
    private $autotypeId = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mark_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $markId;



    /**
     * Set mark
     *
     * @param string $mark
     *
     * @return OcAutoMark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return OcAutoMark
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set autotypeId
     *
     * @param integer $autotypeId
     *
     * @return OcAutoMark
     */
    public function setAutotypeId($autotypeId)
    {
        $this->autotypeId = $autotypeId;

        return $this;
    }

    /**
     * Get autotypeId
     *
     * @return integer
     */
    public function getAutotypeId()
    {
        return $this->autotypeId;
    }

    /**
     * Get markId
     *
     * @return integer
     */
    public function getMarkId()
    {
        return $this->markId;
    }
}
