<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * OcProduct
 *
 * @ORM\Table(name="oc_product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;
    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_id", type="integer", nullable=false)
     */
    private $autotypeId;
    /**
     * @var integer
     *
     * @ORM\Column(name="autotype_image_id", type="integer", nullable=false)
     */
    private $autotypeImageId;
    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer", nullable=false)
     */
    private $modelId = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="mark_id", type="integer", nullable=false)
     */
    private $markId = '0';
    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean", nullable=false)
     */
    private $new = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="god", type="integer", nullable=false)
     */
    private $god;
    /**
     * @var integer
     *
     * @ORM\Column(name="obmen", type="integer", nullable=false)
     */
    private $obmen = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="nocomment", type="integer", nullable=false)
     */
    private $nocomment = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="torg", type="integer", nullable=false)
     */
    private $torg = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="korobka", type="string", length=255, nullable=false)
     */
    private $korobka;
    /**
     * @var string
     *
     * @ORM\Column(name="topl", type="string", length=255, nullable=false)
     */
    private $topl;
    /**
     * @var string
     *
     * @ORM\Column(name="privod", type="string", length=255, nullable=false)
     */
    private $privod;
    /**
     * @var integer
     *
     * @ORM\Column(name="dveri", type="integer", nullable=false)
     */
    private $dveri;
    /**
     * @var string
     *
     * @ORM\Column(name="cvet", type="string", length=255, nullable=false)
     */
    private $cvet;
    /**
     * @var integer
     *
     * @ORM\Column(name="cvet_met", type="integer", nullable=false)
     */
    private $cvetMet;
    /**
     * @var string
     *
     * @ORM\Column(name="obiem", type="decimal", precision=3, scale=1, nullable=false)
     */
    private $obiem;
    /**
     * @var integer
     *
     * @ORM\Column(name="probeg", type="integer", nullable=false)
     */
    private $probeg;
    /**
     * @var integer
     *
     * @ORM\Column(name="mosh", type="integer", nullable=false)
     */
    private $mosh;
    /**
     * @var integer
     *
     * @ORM\Column(name="mosh_type", type="integer", nullable=false)
     */
    private $moshType;
    /**
     * @var integer
     *
     * @ORM\Column(name="rash_gor", type="integer", nullable=false)
     */
    private $rashGor;
    /**
     * @var integer
     *
     * @ORM\Column(name="rash_shos", type="integer", nullable=false)
     */
    private $rashShos;
    /**
     * @var integer
     *
     * @ORM\Column(name="raztar", type="integer", nullable=false)
     */
    private $raztar;
    /**
     * @var integer
     *
     * @ORM\Column(name="povrej", type="integer", nullable=false)
     */
    private $povrej;
    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=false)
     */
    private $credit;
    /**
     * @var integer
     *
     * @ORM\Column(name="confis", type="integer", nullable=false)
     */
    private $confis;
    /**
     * @var integer
     *
     * @ORM\Column(name="ne_hod", type="integer", nullable=false)
     */
    private $neHod;
    /**
     * @var string
     *
     * @ORM\Column(name="opisanie", type="text", length=65535, nullable=false)
     */
    private $opisanie;
    /**
     * @var string
     *
     * @ORM\Column(name="dop_opisanie", type="text", length=65535, nullable=false)
     */
    private $dopOpisanie;
    /**
     * @var string
     *
     * @ORM\Column(name="baz_kompl", type="string", length=255, nullable=false)
     */
    private $bazKompl;
    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model = "";
    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=64, nullable=false)
     */
    private $sku = "";
    /**
     * @var string
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=false)
     */
    private $upc ="";
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=false)
     */
    private $location ="";
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     */
    private $stockStatusId = 0;
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;
    /**
     * @var integer
     *
     * @ORM\Column(name="video", type="integer", nullable=false)
     */
    private $video = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturer_id", type="integer", nullable=false)
     */
    private $manufacturerId = 0;
    /**
     * @var boolean
     *
     * @ORM\Column(name="shipping", type="boolean", nullable=false)
     */
    private $shipping = '1';
    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId = 0;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_available", type="date", nullable=false)
     */
    private $dateAvailable = "0000-00-00";
    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $weight = '0.00';
    /**
     * @var integer
     *
     * @ORM\Column(name="weight_class_id", type="integer", nullable=false)
     */
    private $weightClassId = '0';
    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $length = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $width = '0.00';
    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $height = '0.00';
    /**
     * @var integer
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     */
    private $lengthClassId = '0';
    /**
     * @var boolean
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false)
     */
    private $subtract = '1';
    /**
     * @var integer
     *
     * @ORM\Column(name="minimum", type="integer", nullable=false)
     */
    private $minimum = '1';
    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;
    /**
     * @var integer
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="top", type="integer", nullable=false)
     */
    private $top = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="hot", type="integer", nullable=false)
     */
    private $hot = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="light", type="integer", nullable=false)
     */
    private $light = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="vig", type="integer", nullable=false)
     */
    private $vig = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="sroch", type="integer", nullable=false)
     */
    private $sroch = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId = '0';
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->dateAdded = new \DateTime();
        $this->dateModified = new \DateTime();
        $this->dateAvailable = new \DateTime();
    }


    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return OcProduct
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * Set autotypeId
     *
     * @param integer $autotypeId
     *
     * @return OcProduct
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
     * Set autotypeImageId
     *
     * @param integer $autotypeImageId
     *
     * @return OcProduct
     */
    public function setAutotypeImageId($autotypeImageId)
    {
        $this->autotypeImageId = $autotypeImageId;
        return $this;
    }
    /**
     * Get autotypeImageId
     *
     * @return integer
     */
    public function getAutotypeImageId()
    {
        return $this->autotypeImageId;
    }
    /**
     * Set modelId
     *
     * @param integer $modelId
     *
     * @return OcProduct
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
        return $this;
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
    /**
     * Set markId
     *
     * @param integer $markId
     *
     * @return OcProduct
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
     * Set new
     *
     * @param boolean $new
     *
     * @return OcProduct
     */
    public function setNew($new)
    {
        $this->new = $new;
        return $this;
    }
    /**
     * Get new
     *
     * @return boolean
     */
    public function getNew()
    {
        return $this->new;
    }
    /**
     * Set god
     *
     * @param integer $god
     *
     * @return OcProduct
     */
    public function setGod($god)
    {
        $this->god = $god;
        return $this;
    }
    /**
     * Get god
     *
     * @return integer
     */
    public function getGod()
    {
        return $this->god;
    }
    /**
     * Set obmen
     *
     * @param integer $obmen
     *
     * @return OcProduct
     */
    public function setObmen($obmen)
    {
        $this->obmen = $obmen;
        return $this;
    }
    /**
     * Get obmen
     *
     * @return integer
     */
    public function getObmen()
    {
        return $this->obmen;
    }
    /**
     * Set nocomment
     *
     * @param integer $nocomment
     *
     * @return OcProduct
     */
    public function setNocomment($nocomment)
    {
        $this->nocomment = $nocomment;
        return $this;
    }
    /**
     * Get nocomment
     *
     * @return integer
     */
    public function getNocomment()
    {
        return $this->nocomment;
    }
    /**
     * Set torg
     *
     * @param integer $torg
     *
     * @return OcProduct
     */
    public function setTorg($torg)
    {
        $this->torg = $torg;
        return $this;
    }
    /**
     * Get torg
     *
     * @return integer
     */
    public function getTorg()
    {
        return $this->torg;
    }
    /**
     * Set korobka
     *
     * @param string $korobka
     *
     * @return OcProduct
     */
    public function setKorobka($korobka)
    {
        $this->korobka = $korobka;
        return $this;
    }
    /**
     * Get korobka
     *
     * @return string
     */
    public function getKorobka()
    {
        return $this->korobka;
    }
    /**
     * Set topl
     *
     * @param string $topl
     *
     * @return OcProduct
     */
    public function setTopl($topl)
    {
        $this->topl = $topl;
        return $this;
    }
    /**
     * Get topl
     *
     * @return string
     */
    public function getTopl()
    {
        return $this->topl;
    }
    /**
     * Set privod
     *
     * @param string $privod
     *
     * @return OcProduct
     */
    public function setPrivod($privod)
    {
        $this->privod = $privod;
        return $this;
    }
    /**
     * Get privod
     *
     * @return string
     */
    public function getPrivod()
    {
        return $this->privod;
    }
    /**
     * Set dveri
     *
     * @param integer $dveri
     *
     * @return OcProduct
     */
    public function setDveri($dveri)
    {
        $this->dveri = $dveri;
        return $this;
    }
    /**
     * Get dveri
     *
     * @return integer
     */
    public function getDveri()
    {
        return $this->dveri;
    }
    /**
     * Set cvet
     *
     * @param string $cvet
     *
     * @return OcProduct
     */
    public function setCvet($cvet)
    {
        $this->cvet = $cvet;
        return $this;
    }
    /**
     * Get cvet
     *
     * @return string
     */
    public function getCvet()
    {
        return $this->cvet;
    }
    /**
     * Set cvetMet
     *
     * @param integer $cvetMet
     *
     * @return OcProduct
     */
    public function setCvetMet($cvetMet)
    {
        $this->cvetMet = $cvetMet;
        return $this;
    }
    /**
     * Get cvetMet
     *
     * @return integer
     */
    public function getCvetMet()
    {
        return $this->cvetMet;
    }
    /**
     * Set obiem
     *
     * @param string $obiem
     *
     * @return OcProduct
     */
    public function setObiem($obiem)
    {
        $this->obiem = $obiem;
        return $this;
    }
    /**
     * Get obiem
     *
     * @return string
     */
    public function getObiem()
    {
        return $this->obiem;
    }
    /**
     * Set probeg
     *
     * @param integer $probeg
     *
     * @return OcProduct
     */
    public function setProbeg($probeg)
    {
        $this->probeg = $probeg;
        return $this;
    }
    /**
     * Get probeg
     *
     * @return integer
     */
    public function getProbeg()
    {
        return $this->probeg;
    }
    /**
     * Set mosh
     *
     * @param integer $mosh
     *
     * @return OcProduct
     */
    public function setMosh($mosh)
    {
        $this->mosh = $mosh;
        return $this;
    }
    /**
     * Get mosh
     *
     * @return integer
     */
    public function getMosh()
    {
        return $this->mosh;
    }
    /**
     * Set moshType
     *
     * @param integer $moshType
     *
     * @return OcProduct
     */
    public function setMoshType($moshType)
    {
        $this->moshType = $moshType;
        return $this;
    }
    /**
     * Get moshType
     *
     * @return integer
     */
    public function getMoshType()
    {
        return $this->moshType;
    }
    /**
     * Set rashGor
     *
     * @param integer $rashGor
     *
     * @return OcProduct
     */
    public function setRashGor($rashGor)
    {
        $this->rashGor = $rashGor;
        return $this;
    }
    /**
     * Get rashGor
     *
     * @return integer
     */
    public function getRashGor()
    {
        return $this->rashGor;
    }
    /**
     * Set rashShos
     *
     * @param integer $rashShos
     *
     * @return OcProduct
     */
    public function setRashShos($rashShos)
    {
        $this->rashShos = $rashShos;
        return $this;
    }
    /**
     * Get rashShos
     *
     * @return integer
     */
    public function getRashShos()
    {
        return $this->rashShos;
    }
    /**
     * Set raztar
     *
     * @param integer $raztar
     *
     * @return OcProduct
     */
    public function setRaztar($raztar)
    {
        $this->raztar = $raztar;
        return $this;
    }
    /**
     * Get raztar
     *
     * @return integer
     */
    public function getRaztar()
    {
        return $this->raztar;
    }
    /**
     * Set povrej
     *
     * @param integer $povrej
     *
     * @return OcProduct
     */
    public function setPovrej($povrej)
    {
        $this->povrej = $povrej;
        return $this;
    }
    /**
     * Get povrej
     *
     * @return integer
     */
    public function getPovrej()
    {
        return $this->povrej;
    }
    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return OcProduct
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
        return $this;
    }
    /**
     * Get credit
     *
     * @return integer
     */
    public function getCredit()
    {
        return $this->credit;
    }
    /**
     * Set confis
     *
     * @param integer $confis
     *
     * @return OcProduct
     */
    public function setConfis($confis)
    {
        $this->confis = $confis;
        return $this;
    }
    /**
     * Get confis
     *
     * @return integer
     */
    public function getConfis()
    {
        return $this->confis;
    }
    /**
     * Set neHod
     *
     * @param integer $neHod
     *
     * @return OcProduct
     */
    public function setNeHod($neHod)
    {
        $this->neHod = $neHod;
        return $this;
    }
    /**
     * Get neHod
     *
     * @return integer
     */
    public function getNeHod()
    {
        return $this->neHod;
    }
    /**
     * Set opisanie
     *
     * @param string $opisanie
     *
     * @return OcProduct
     */
    public function setOpisanie($opisanie)
    {
        $this->opisanie = $opisanie;
        return $this;
    }
    /**
     * Get opisanie
     *
     * @return string
     */
    public function getOpisanie()
    {
        return $this->opisanie;
    }
    /**
     * Set dopOpisanie
     *
     * @param string $dopOpisanie
     *
     * @return OcProduct
     */
    public function setDopOpisanie($dopOpisanie)
    {
        $this->dopOpisanie = $dopOpisanie;
        return $this;
    }
    /**
     * Get dopOpisanie
     *
     * @return string
     */
    public function getDopOpisanie()
    {
        return $this->dopOpisanie;
    }
    /**
     * Set bazKompl
     *
     * @param string $bazKompl
     *
     * @return OcProduct
     */
    public function setBazKompl($bazKompl)
    {
        $this->bazKompl = $bazKompl;
        return $this;
    }
    /**
     * Get bazKompl
     *
     * @return string
     */
    public function getBazKompl()
    {
        return $this->bazKompl;
    }
    /**
     * Set model
     *
     * @param string $model
     *
     * @return OcProduct
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
     * Set sku
     *
     * @param string $sku
     *
     * @return OcProduct
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
    /**
     * Set upc
     *
     * @param string $upc
     *
     * @return OcProduct
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;
        return $this;
    }
    /**
     * Get upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }
    /**
     * Set location
     *
     * @param string $location
     *
     * @return OcProduct
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OcProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set stockStatusId
     *
     * @param integer $stockStatusId
     *
     * @return OcProduct
     */
    public function setStockStatusId($stockStatusId)
    {
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * Get stockStatusId
     *
     * @return integer
     */
    public function getStockStatusId()
    {
        return $this->stockStatusId;
    }
    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcProduct
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set video
     *
     * @param integer $video
     *
     * @return OcProduct
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }
    /**
     * Get video
     *
     * @return integer
     */
    public function getVideo()
    {
        return $this->video;
    }
    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return OcProduct
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }
    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }
    /**
     * Set shipping
     *
     * @param boolean $shipping
     *
     * @return OcProduct
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * Get shipping
     *
     * @return boolean
     */
    public function getShipping()
    {
        return $this->shipping;
    }
    /**
     * Set price
     *
     * @param integer $price
     *
     * @return OcProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set points
     *
     * @param integer $points
     *
     * @return OcProduct
     */
    public function setPoints($points)
    {
        $this->points = $points;
        return $this;
    }
    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }
    /**
     * Set taxClassId
     *
     * @param integer $taxClassId
     *
     * @return OcProduct
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
     * Set dateAvailable
     *
     * @param \DateTime $dateAvailable
     *
     * @return OcProduct
     */
    public function setDateAvailable($dateAvailable)
    {
        $this->dateAvailable = $dateAvailable;
        return $this;
    }
    /**
     * Get dateAvailable
     *
     * @return \DateTime
     */
    public function getDateAvailable()
    {
        return $this->dateAvailable;
    }
    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return OcProduct
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weightClassId
     *
     * @param integer $weightClassId
     *
     * @return OcProduct
     */
    public function setWeightClassId($weightClassId)
    {
        $this->weightClassId = $weightClassId;
        return $this;
    }
    /**
     * Get weightClassId
     *
     * @return integer
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }
    /**
     * Set length
     *
     * @param string $length
     *
     * @return OcProduct
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set width
     *
     * @param string $width
     *
     * @return OcProduct
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set height
     *
     * @param string $height
     *
     * @return OcProduct
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set lengthClassId
     *
     * @param integer $lengthClassId
     *
     * @return OcProduct
     */
    public function setLengthClassId($lengthClassId)
    {
        $this->lengthClassId = $lengthClassId;
        return $this;
    }
    /**
     * Get lengthClassId
     *
     * @return integer
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }
    /**
     * Set subtract
     *
     * @param boolean $subtract
     *
     * @return OcProduct
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;
        return $this;
    }
    /**
     * Get subtract
     *
     * @return boolean
     */
    public function getSubtract()
    {
        return $this->subtract;
    }
    /**
     * Set minimum
     *
     * @param integer $minimum
     *
     * @return OcProduct
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * Get minimum
     *
     * @return integer
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcProduct
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OcProduct
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcProduct
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OcProduct
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
        return $this;
    }
    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
    /**
     * Set viewed
     *
     * @param integer $viewed
     *
     * @return OcProduct
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
        return $this;
    }
    /**
     * Get viewed
     *
     * @return integer
     */
    public function getViewed()
    {
        return $this->viewed;
    }
    /**
     * Set top
     *
     * @param integer $top
     *
     * @return OcProduct
     */
    public function setTop($top)
    {
        $this->top = $top;
        return $this;
    }
    /**
     * Get top
     *
     * @return integer
     */
    public function getTop()
    {
        return $this->top;
    }
    /**
     * Set hot
     *
     * @param integer $hot
     *
     * @return OcProduct
     */
    public function setHot($hot)
    {
        $this->hot = $hot;
        return $this;
    }
    /**
     * Get hot
     *
     * @return integer
     */
    public function getHot()
    {
        return $this->hot;
    }
    /**
     * Set light
     *
     * @param integer $light
     *
     * @return OcProduct
     */
    public function setLight($light)
    {
        $this->light = $light;
        return $this;
    }
    /**
     * Get light
     *
     * @return integer
     */
    public function getLight()
    {
        return $this->light;
    }
    /**
     * Set vig
     *
     * @param integer $vig
     *
     * @return OcProduct
     */
    public function setVig($vig)
    {
        $this->vig = $vig;
        return $this;
    }
    /**
     * Get vig
     *
     * @return integer
     */
    public function getVig()
    {
        return $this->vig;
    }
    /**
     * Set sroch
     *
     * @param integer $sroch
     *
     * @return OcProduct
     */
    public function setSroch($sroch)
    {
        $this->sroch = $sroch;
        return $this;
    }
    /**
     * Get sroch
     *
     * @return integer
     */
    public function getSroch()
    {
        return $this->sroch;
    }
    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return OcProduct
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }
}