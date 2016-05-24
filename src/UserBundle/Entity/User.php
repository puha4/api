<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomer
 *
 * @ORM\Table(name="oc_customer")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="balans", type="integer", nullable=false)
     */
    private $balans = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=32, nullable=false)
     */
    private $firstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=32, nullable=false)
     */
    private $lastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ava", type="string", length=255, nullable=false)
     */
    private $ava;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="text", length=65535, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cart", type="text", length=65535, nullable=true)
     */
    private $cart;

    /**
     * @var string
     *
     * @ORM\Column(name="wishlist", type="text", length=65535, nullable=true)
     */
    private $wishlist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     */
    private $addressId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     */
    private $customerGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved", type="boolean", nullable=false)
     */
    private $approved;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded = '0000-00-00 00:00:00';

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set balans
     *
     * @param integer $balans
     *
     * @return OcCustomer
     */
    public function setBalans($balans)
    {
        $this->balans = $balans;

        return $this;
    }

    /**
     * Get balans
     *
     * @return integer
     */
    public function getBalans()
    {
        return $this->balans;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcCustomer
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return OcCustomer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return OcCustomer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set ava
     *
     * @param string $ava
     *
     * @return OcCustomer
     */
    public function setAva($ava)
    {
        $this->ava = $ava;

        return $this;
    }

    /**
     * Get ava
     *
     * @return string
     */
    public function getAva()
    {
        return $this->ava;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return OcCustomer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return OcCustomer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cart
     *
     * @param string $cart
     *
     * @return OcCustomer
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return string
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set wishlist
     *
     * @param string $wishlist
     *
     * @return OcCustomer
     */
    public function setWishlist($wishlist)
    {
        $this->wishlist = $wishlist;

        return $this;
    }

    /**
     * Get wishlist
     *
     * @return string
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return OcCustomer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return OcCustomer
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcCustomer
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return OcCustomer
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OcCustomer
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
     * Set approved
     *
     * @param boolean $approved
     *
     * @return OcCustomer
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return OcCustomer
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCustomer
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
//
//    /**
//     * Get customerId
//     *
//     * @return integer
//     */
//    public function getCustomerId()
//    {
//        return $this->customerId;
//    }
}
