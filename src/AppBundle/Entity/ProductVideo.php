<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * OcProductVideo
 *
 * @ORM\Table(name="oc_product_video")
 * @ORM\Entity
 */
class ProductVideo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $videoId;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="videos")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="product_id")
     */
    protected $product;
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * Set product
     * @param Product $product
     *
     * @return OcProductVideo
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        return $this;
    }
    /**
     * Get productId
     *
     * @return integer
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcProductVideo
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcProductVideo
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Get videoId
     *
     * @return integer
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}