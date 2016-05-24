<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAutoModel
 *
 * @ORM\Table(name="oc_auto_model", indexes={@ORM\Index(name="mark_id", columns={"mark_id", "model"})})
 * @ORM\Entity
 */
class OcAutoModel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mark_id", type="integer", nullable=true)
     */
    private $markId;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modelId;



    /**
     * Set markId
     *
     * @param integer $markId
     *
     * @return OcAutoModel
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;

        return $this;
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

    /**
     * Set model
     *
     * @param string $model
     *
     * @return OcAutoModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     *
     * @return OcAutoModel
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Get modelId
     *
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }
}
