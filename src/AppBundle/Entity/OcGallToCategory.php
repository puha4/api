<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcGallToCategory
 *
 * @ORM\Table(name="oc_gall_to_category")
 * @ORM\Entity
 */
class OcGallToCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gal_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $galId;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;



    /**
     * Set galId
     *
     * @param integer $galId
     *
     * @return OcGallToCategory
     */
    public function setGalId($galId)
    {
        $this->galId = $galId;

        return $this;
    }

    /**
     * Get galId
     *
     * @return integer
     */
    public function getGalId()
    {
        return $this->galId;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcGallToCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
