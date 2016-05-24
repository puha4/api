<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAffiliate
 *
 * @ORM\Table(name="oc_affiliate")
 * @ORM\Entity
 */
class OcAffiliate
{
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
     * @ORM\Column(name="email", type="string", length=96, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=32, nullable=false)
     */
    private $telephone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=32, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="address_1", type="string", length=128, nullable=false)
     */
    private $address1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address_2", type="string", length=128, nullable=false)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=10, nullable=false)
     */
    private $postcode = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false)
     */
    private $zoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=64, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $commission = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="string", length=64, nullable=false)
     */
    private $tax;

    /**
     * @var string
     *
     * @ORM\Column(name="payment", type="string", length=6, nullable=false)
     */
    private $payment;

    /**
     * @var string
     *
     * @ORM\Column(name="cheque", type="string", length=100, nullable=false)
     */
    private $cheque = '';

    /**
     * @var string
     *
     * @ORM\Column(name="paypal", type="string", length=64, nullable=false)
     */
    private $paypal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=64, nullable=false)
     */
    private $bankName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch_number", type="string", length=64, nullable=false)
     */
    private $bankBranchNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_swift_code", type="string", length=64, nullable=false)
     */
    private $bankSwiftCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_name", type="string", length=64, nullable=false)
     */
    private $bankAccountName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_number", type="string", length=64, nullable=false)
     */
    private $bankAccountNumber = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var integer
     *
     * @ORM\Column(name="affiliate_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $affiliateId;



    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return OcAffiliate
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
     * @return OcAffiliate
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
     * Set email
     *
     * @param string $email
     *
     * @return OcAffiliate
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return OcAffiliate
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
     * @return OcAffiliate
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
     * Set password
     *
     * @param string $password
     *
     * @return OcAffiliate
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return OcAffiliate
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return OcAffiliate
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return OcAffiliate
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     *
     * @return OcAffiliate
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return OcAffiliate
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return OcAffiliate
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return OcAffiliate
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
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return OcAffiliate
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return integer
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcAffiliate
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
     * Set commission
     *
     * @param string $commission
     *
     * @return OcAffiliate
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set tax
     *
     * @param string $tax
     *
     * @return OcAffiliate
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return OcAffiliate
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set cheque
     *
     * @param string $cheque
     *
     * @return OcAffiliate
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque
     *
     * @return string
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set paypal
     *
     * @param string $paypal
     *
     * @return OcAffiliate
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;

        return $this;
    }

    /**
     * Get paypal
     *
     * @return string
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return OcAffiliate
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankBranchNumber
     *
     * @param string $bankBranchNumber
     *
     * @return OcAffiliate
     */
    public function setBankBranchNumber($bankBranchNumber)
    {
        $this->bankBranchNumber = $bankBranchNumber;

        return $this;
    }

    /**
     * Get bankBranchNumber
     *
     * @return string
     */
    public function getBankBranchNumber()
    {
        return $this->bankBranchNumber;
    }

    /**
     * Set bankSwiftCode
     *
     * @param string $bankSwiftCode
     *
     * @return OcAffiliate
     */
    public function setBankSwiftCode($bankSwiftCode)
    {
        $this->bankSwiftCode = $bankSwiftCode;

        return $this;
    }

    /**
     * Get bankSwiftCode
     *
     * @return string
     */
    public function getBankSwiftCode()
    {
        return $this->bankSwiftCode;
    }

    /**
     * Set bankAccountName
     *
     * @param string $bankAccountName
     *
     * @return OcAffiliate
     */
    public function setBankAccountName($bankAccountName)
    {
        $this->bankAccountName = $bankAccountName;

        return $this;
    }

    /**
     * Get bankAccountName
     *
     * @return string
     */
    public function getBankAccountName()
    {
        return $this->bankAccountName;
    }

    /**
     * Set bankAccountNumber
     *
     * @param string $bankAccountNumber
     *
     * @return OcAffiliate
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Get bankAccountNumber
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return OcAffiliate
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
     * @return OcAffiliate
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
     * @return OcAffiliate
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
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcAffiliate
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
     * Get affiliateId
     *
     * @return integer
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }
}
