<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * OcProductAtr
 *
 * @ORM\Table(name="oc_product_atr")
 * @ORM\Entity
 */
class ProductAttr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;
    /**
     * @var integer
     *
     * @ORM\Column(name="abd", type="integer", nullable=false)
     */
    private $abd = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="abs", type="integer", nullable=false)
     */
    private $abs = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="esp", type="integer", nullable=false)
     */
    private $esp = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="gal_far", type="integer", nullable=false)
     */
    private $galFar = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="kpp", type="integer", nullable=false)
     */
    private $kpp = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="immob", type="integer", nullable=false)
     */
    private $immob = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="pod_bez", type="integer", nullable=false)
     */
    private $podBez = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="serv", type="integer", nullable=false)
     */
    private $serv = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="sign", type="integer", nullable=false)
     */
    private $sign = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="cent_zam", type="integer", nullable=false)
     */
    private $centZam = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="cd", type="integer", nullable=false)
     */
    private $cd = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="dvd", type="integer", nullable=false)
     */
    private $dvd = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="mp3", type="integer", nullable=false)
     */
    private $mp3 = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="akust", type="integer", nullable=false)
     */
    private $akust = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="magnit", type="integer", nullable=false)
     */
    private $magnit = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="sabuf", type="integer", nullable=false)
     */
    private $sabuf = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="sys_nav", type="integer", nullable=false)
     */
    private $sysNav = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="gps", type="integer", nullable=false)
     */
    private $gps = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="bort_comp", type="integer", nullable=false)
     */
    private $bortComp = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="dat_svet", type="integer", nullable=false)
     */
    private $datSvet = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="klim_kon", type="integer", nullable=false)
     */
    private $klimKon = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="koj_sal", type="integer", nullable=false)
     */
    private $kojSal = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="kondic", type="integer", nullable=false)
     */
    private $kondic = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="kruz_kont", type="integer", nullable=false)
     */
    private $kruzKont = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="lyk", type="integer", nullable=false)
     */
    private $lyk = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="multir", type="integer", nullable=false)
     */
    private $multir = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="omiv_far", type="integer", nullable=false)
     */
    private $omivFar = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="parktr", type="integer", nullable=false)
     */
    private $parktr = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="pod_zer", type="integer", nullable=false)
     */
    private $podZer = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="sens_dojd", type="integer", nullable=false)
     */
    private $sensDojd = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="us_rul", type="integer", nullable=false)
     */
    private $usRul = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="el_stekl", type="integer", nullable=false)
     */
    private $elStekl = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="el_pak", type="integer", nullable=false)
     */
    private $elPak = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="pod_sid", type="integer", nullable=false)
     */
    private $podSid = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="gbo", type="integer", nullable=false)
     */
    private $gbo = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="derev", type="integer", nullable=false)
     */
    private $derev = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="dl_baz", type="integer", nullable=false)
     */
    private $dlBaz = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="maxi", type="integer", nullable=false)
     */
    private $maxi = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="prav_rul", type="integer", nullable=false)
     */
    private $pravRul = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="ton_stek", type="integer", nullable=false)
     */
    private $tonStek = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="tyn", type="integer", nullable=false)
     */
    private $tyn = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="fark", type="integer", nullable=false)
     */
    private $fark = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="garaj_hr", type="integer", nullable=false)
     */
    private $garajHr = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="ne_bit", type="integer", nullable=false)
     */
    private $neBit = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="ne_krash", type="integer", nullable=false)
     */
    private $neKrash = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="ruch_up", type="integer", nullable=false)
     */
    private $ruchUp = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="serv_kn", type="integer", nullable=false)
     */
    private $servKn = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="gor_tor", type="integer", nullable=false)
     */
    private $gorTor = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="`asc`", type="integer", nullable=false)
     */
    private $asc = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="vsc", type="integer", nullable=false)
     */
    private $vsc = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="lob_st", type="integer", nullable=false)
     */
    private $lobSt = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="eholot", type="integer", nullable=false)
     */
    private $eholot = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="yakor", type="integer", nullable=false)
     */
    private $yakor = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="spalnik", type="integer", nullable=false)
     */
    private $spalnik = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="autopech", type="integer", nullable=false)
     */
    private $autopech = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="spal_mest", type="integer", nullable=false)
     */
    private $spalMest = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="toilet", type="integer", nullable=false)
     */
    private $toilet = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="holodil", type="integer", nullable=false)
     */
    private $holodil = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="kayut", type="integer", nullable=false)
     */
    private $kayut = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="toilet_b", type="integer", nullable=false)
     */
    private $toiletB = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="kuhn", type="integer", nullable=false)
     */
    private $kuhn = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="bok_vig", type="integer", nullable=false)
     */
    private $bokVig = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="zad_vig", type="integer", nullable=false)
     */
    private $zadVig = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="treh_vig", type="integer", nullable=false)
     */
    private $trehVig = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="tent", type="integer", nullable=false)
     */
    private $tent = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="trap", type="integer", nullable=false)
     */
    private $trap = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="treyl", type="integer", nullable=false)
     */
    private $treyl = 0;
    /**
     * @var integer
     *
     * @ORM\Column(name="product_atr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productAtrId;
    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return ProductAttr
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
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
    /**
     * Set abd
     *
     * @param integer $abd
     *
     * @return ProductAttr
     */
    public function setAbd($abd)
    {
        $this->abd = $abd;
        return $this;
    }
    /**
     * Get abd
     *
     * @return integer
     */
    public function getAbd()
    {
        return $this->abd;
    }
    /**
     * Set abs
     *
     * @param integer $abs
     *
     * @return ProductAttr
     */
    public function setAbs($abs)
    {
        $this->abs = $abs;
        return $this;
    }
    /**
     * Get abs
     *
     * @return integer
     */
    public function getAbs()
    {
        return $this->abs;
    }
    /**
     * Set esp
     *
     * @param integer $esp
     *
     * @return ProductAttr
     */
    public function setEsp($esp)
    {
        $this->esp = $esp;
        return $this;
    }
    /**
     * Get esp
     *
     * @return integer
     */
    public function getEsp()
    {
        return $this->esp;
    }
    /**
     * Set galFar
     *
     * @param integer $galFar
     *
     * @return ProductAttr
     */
    public function setGalFar($galFar)
    {
        $this->galFar = $galFar;
        return $this;
    }
    /**
     * Get galFar
     *
     * @return integer
     */
    public function getGalFar()
    {
        return $this->galFar;
    }
    /**
     * Set kpp
     *
     * @param integer $kpp
     *
     * @return ProductAttr
     */
    public function setKpp($kpp)
    {
        $this->kpp = $kpp;
        return $this;
    }
    /**
     * Get kpp
     *
     * @return integer
     */
    public function getKpp()
    {
        return $this->kpp;
    }
    /**
     * Set immob
     *
     * @param integer $immob
     *
     * @return ProductAttr
     */
    public function setImmob($immob)
    {
        $this->immob = $immob;
        return $this;
    }
    /**
     * Get immob
     *
     * @return integer
     */
    public function getImmob()
    {
        return $this->immob;
    }
    /**
     * Set podBez
     *
     * @param integer $podBez
     *
     * @return ProductAttr
     */
    public function setPodBez($podBez)
    {
        $this->podBez = $podBez;
        return $this;
    }
    /**
     * Get podBez
     *
     * @return integer
     */
    public function getPodBez()
    {
        return $this->podBez;
    }
    /**
     * Set serv
     *
     * @param integer $serv
     *
     * @return ProductAttr
     */
    public function setServ($serv)
    {
        $this->serv = $serv;
        return $this;
    }
    /**
     * Get serv
     *
     * @return integer
     */
    public function getServ()
    {
        return $this->serv;
    }
    /**
     * Set sign
     *
     * @param integer $sign
     *
     * @return ProductAttr
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
        return $this;
    }
    /**
     * Get sign
     *
     * @return integer
     */
    public function getSign()
    {
        return $this->sign;
    }
    /**
     * Set centZam
     *
     * @param integer $centZam
     *
     * @return ProductAttr
     */
    public function setCentZam($centZam)
    {
        $this->centZam = $centZam;
        return $this;
    }
    /**
     * Get centZam
     *
     * @return integer
     */
    public function getCentZam()
    {
        return $this->centZam;
    }
    /**
     * Set cd
     *
     * @param integer $cd
     *
     * @return ProductAttr
     */
    public function setCd($cd)
    {
        $this->cd = $cd;
        return $this;
    }
    /**
     * Get cd
     *
     * @return integer
     */
    public function getCd()
    {
        return $this->cd;
    }
    /**
     * Set dvd
     *
     * @param integer $dvd
     *
     * @return ProductAttr
     */
    public function setDvd($dvd)
    {
        $this->dvd = $dvd;
        return $this;
    }
    /**
     * Get dvd
     *
     * @return integer
     */
    public function getDvd()
    {
        return $this->dvd;
    }
    /**
     * Set mp3
     *
     * @param integer $mp3
     *
     * @return ProductAttr
     */
    public function setMp3($mp3)
    {
        $this->mp3 = $mp3;
        return $this;
    }
    /**
     * Get mp3
     *
     * @return integer
     */
    public function getMp3()
    {
        return $this->mp3;
    }
    /**
     * Set akust
     *
     * @param integer $akust
     *
     * @return ProductAttr
     */
    public function setAkust($akust)
    {
        $this->akust = $akust;
        return $this;
    }
    /**
     * Get akust
     *
     * @return integer
     */
    public function getAkust()
    {
        return $this->akust;
    }
    /**
     * Set magnit
     *
     * @param integer $magnit
     *
     * @return ProductAttr
     */
    public function setMagnit($magnit)
    {
        $this->magnit = $magnit;
        return $this;
    }
    /**
     * Get magnit
     *
     * @return integer
     */
    public function getMagnit()
    {
        return $this->magnit;
    }
    /**
     * Set sabuf
     *
     * @param integer $sabuf
     *
     * @return ProductAttr
     */
    public function setSabuf($sabuf)
    {
        $this->sabuf = $sabuf;
        return $this;
    }
    /**
     * Get sabuf
     *
     * @return integer
     */
    public function getSabuf()
    {
        return $this->sabuf;
    }
    /**
     * Set sysNav
     *
     * @param integer $sysNav
     *
     * @return ProductAttr
     */
    public function setSysNav($sysNav)
    {
        $this->sysNav = $sysNav;
        return $this;
    }
    /**
     * Get sysNav
     *
     * @return integer
     */
    public function getSysNav()
    {
        return $this->sysNav;
    }
    /**
     * Set gps
     *
     * @param integer $gps
     *
     * @return ProductAttr
     */
    public function setGps($gps)
    {
        $this->gps = $gps;
        return $this;
    }
    /**
     * Get gps
     *
     * @return integer
     */
    public function getGps()
    {
        return $this->gps;
    }
    /**
     * Set bortComp
     *
     * @param integer $bortComp
     *
     * @return ProductAttr
     */
    public function setBortComp($bortComp)
    {
        $this->bortComp = $bortComp;
        return $this;
    }
    /**
     * Get bortComp
     *
     * @return integer
     */
    public function getBortComp()
    {
        return $this->bortComp;
    }
    /**
     * Set datSvet
     *
     * @param integer $datSvet
     *
     * @return ProductAttr
     */
    public function setDatSvet($datSvet)
    {
        $this->datSvet = $datSvet;
        return $this;
    }
    /**
     * Get datSvet
     *
     * @return integer
     */
    public function getDatSvet()
    {
        return $this->datSvet;
    }
    /**
     * Set klimKon
     *
     * @param integer $klimKon
     *
     * @return ProductAttr
     */
    public function setKlimKon($klimKon)
    {
        $this->klimKon = $klimKon;
        return $this;
    }
    /**
     * Get klimKon
     *
     * @return integer
     */
    public function getKlimKon()
    {
        return $this->klimKon;
    }
    /**
     * Set kojSal
     *
     * @param integer $kojSal
     *
     * @return ProductAttr
     */
    public function setKojSal($kojSal)
    {
        $this->kojSal = $kojSal;
        return $this;
    }
    /**
     * Get kojSal
     *
     * @return integer
     */
    public function getKojSal()
    {
        return $this->kojSal;
    }
    /**
     * Set kondic
     *
     * @param integer $kondic
     *
     * @return ProductAttr
     */
    public function setKondic($kondic)
    {
        $this->kondic = $kondic;
        return $this;
    }
    /**
     * Get kondic
     *
     * @return integer
     */
    public function getKondic()
    {
        return $this->kondic;
    }
    /**
     * Set kruzKont
     *
     * @param integer $kruzKont
     *
     * @return ProductAttr
     */
    public function setKruzKont($kruzKont)
    {
        $this->kruzKont = $kruzKont;
        return $this;
    }
    /**
     * Get kruzKont
     *
     * @return integer
     */
    public function getKruzKont()
    {
        return $this->kruzKont;
    }
    /**
     * Set lyk
     *
     * @param integer $lyk
     *
     * @return ProductAttr
     */
    public function setLyk($lyk)
    {
        $this->lyk = $lyk;
        return $this;
    }
    /**
     * Get lyk
     *
     * @return integer
     */
    public function getLyk()
    {
        return $this->lyk;
    }
    /**
     * Set multir
     *
     * @param integer $multir
     *
     * @return ProductAttr
     */
    public function setMultir($multir)
    {
        $this->multir = $multir;
        return $this;
    }
    /**
     * Get multir
     *
     * @return integer
     */
    public function getMultir()
    {
        return $this->multir;
    }
    /**
     * Set omivFar
     *
     * @param integer $omivFar
     *
     * @return ProductAttr
     */
    public function setOmivFar($omivFar)
    {
        $this->omivFar = $omivFar;
        return $this;
    }
    /**
     * Get omivFar
     *
     * @return integer
     */
    public function getOmivFar()
    {
        return $this->omivFar;
    }
    /**
     * Set parktr
     *
     * @param integer $parktr
     *
     * @return ProductAttr
     */
    public function setParktr($parktr)
    {
        $this->parktr = $parktr;
        return $this;
    }
    /**
     * Get parktr
     *
     * @return integer
     */
    public function getParktr()
    {
        return $this->parktr;
    }
    /**
     * Set podZer
     *
     * @param integer $podZer
     *
     * @return ProductAttr
     */
    public function setPodZer($podZer)
    {
        $this->podZer = $podZer;
        return $this;
    }
    /**
     * Get podZer
     *
     * @return integer
     */
    public function getPodZer()
    {
        return $this->podZer;
    }
    /**
     * Set sensDojd
     *
     * @param integer $sensDojd
     *
     * @return ProductAttr
     */
    public function setSensDojd($sensDojd)
    {
        $this->sensDojd = $sensDojd;
        return $this;
    }
    /**
     * Get sensDojd
     *
     * @return integer
     */
    public function getSensDojd()
    {
        return $this->sensDojd;
    }
    /**
     * Set usRul
     *
     * @param integer $usRul
     *
     * @return ProductAttr
     */
    public function setUsRul($usRul)
    {
        $this->usRul = $usRul;
        return $this;
    }
    /**
     * Get usRul
     *
     * @return integer
     */
    public function getUsRul()
    {
        return $this->usRul;
    }
    /**
     * Set elStekl
     *
     * @param integer $elStekl
     *
     * @return ProductAttr
     */
    public function setElStekl($elStekl)
    {
        $this->elStekl = $elStekl;
        return $this;
    }
    /**
     * Get elStekl
     *
     * @return integer
     */
    public function getElStekl()
    {
        return $this->elStekl;
    }
    /**
     * Set elPak
     *
     * @param integer $elPak
     *
     * @return ProductAttr
     */
    public function setElPak($elPak)
    {
        $this->elPak = $elPak;
        return $this;
    }
    /**
     * Get elPak
     *
     * @return integer
     */
    public function getElPak()
    {
        return $this->elPak;
    }
    /**
     * Set podSid
     *
     * @param integer $podSid
     *
     * @return ProductAttr
     */
    public function setPodSid($podSid)
    {
        $this->podSid = $podSid;
        return $this;
    }
    /**
     * Get podSid
     *
     * @return integer
     */
    public function getPodSid()
    {
        return $this->podSid;
    }
    /**
     * Set gbo
     *
     * @param integer $gbo
     *
     * @return ProductAttr
     */
    public function setGbo($gbo)
    {
        $this->gbo = $gbo;
        return $this;
    }
    /**
     * Get gbo
     *
     * @return integer
     */
    public function getGbo()
    {
        return $this->gbo;
    }
    /**
     * Set derev
     *
     * @param integer $derev
     *
     * @return ProductAttr
     */
    public function setDerev($derev)
    {
        $this->derev = $derev;
        return $this;
    }
    /**
     * Get derev
     *
     * @return integer
     */
    public function getDerev()
    {
        return $this->derev;
    }
    /**
     * Set dlBaz
     *
     * @param integer $dlBaz
     *
     * @return ProductAttr
     */
    public function setDlBaz($dlBaz)
    {
        $this->dlBaz = $dlBaz;
        return $this;
    }
    /**
     * Get dlBaz
     *
     * @return integer
     */
    public function getDlBaz()
    {
        return $this->dlBaz;
    }
    /**
     * Set maxi
     *
     * @param integer $maxi
     *
     * @return ProductAttr
     */
    public function setMaxi($maxi)
    {
        $this->maxi = $maxi;
        return $this;
    }
    /**
     * Get maxi
     *
     * @return integer
     */
    public function getMaxi()
    {
        return $this->maxi;
    }
    /**
     * Set pravRul
     *
     * @param integer $pravRul
     *
     * @return ProductAttr
     */
    public function setPravRul($pravRul)
    {
        $this->pravRul = $pravRul;
        return $this;
    }
    /**
     * Get pravRul
     *
     * @return integer
     */
    public function getPravRul()
    {
        return $this->pravRul;
    }
    /**
     * Set tonStek
     *
     * @param integer $tonStek
     *
     * @return ProductAttr
     */
    public function setTonStek($tonStek)
    {
        $this->tonStek = $tonStek;
        return $this;
    }
    /**
     * Get tonStek
     *
     * @return integer
     */
    public function getTonStek()
    {
        return $this->tonStek;
    }
    /**
     * Set tyn
     *
     * @param integer $tyn
     *
     * @return ProductAttr
     */
    public function setTyn($tyn)
    {
        $this->tyn = $tyn;
        return $this;
    }
    /**
     * Get tyn
     *
     * @return integer
     */
    public function getTyn()
    {
        return $this->tyn;
    }
    /**
     * Set fark
     *
     * @param integer $fark
     *
     * @return ProductAttr
     */
    public function setFark($fark)
    {
        $this->fark = $fark;
        return $this;
    }
    /**
     * Get fark
     *
     * @return integer
     */
    public function getFark()
    {
        return $this->fark;
    }
    /**
     * Set garajHr
     *
     * @param integer $garajHr
     *
     * @return ProductAttr
     */
    public function setGarajHr($garajHr)
    {
        $this->garajHr = $garajHr;
        return $this;
    }
    /**
     * Get garajHr
     *
     * @return integer
     */
    public function getGarajHr()
    {
        return $this->garajHr;
    }
    /**
     * Set neBit
     *
     * @param integer $neBit
     *
     * @return ProductAttr
     */
    public function setNeBit($neBit)
    {
        $this->neBit = $neBit;
        return $this;
    }
    /**
     * Get neBit
     *
     * @return integer
     */
    public function getNeBit()
    {
        return $this->neBit;
    }
    /**
     * Set neKrash
     *
     * @param integer $neKrash
     *
     * @return ProductAttr
     */
    public function setNeKrash($neKrash)
    {
        $this->neKrash = $neKrash;
        return $this;
    }
    /**
     * Get neKrash
     *
     * @return integer
     */
    public function getNeKrash()
    {
        return $this->neKrash;
    }
    /**
     * Set ruchUp
     *
     * @param integer $ruchUp
     *
     * @return ProductAttr
     */
    public function setRuchUp($ruchUp)
    {
        $this->ruchUp = $ruchUp;
        return $this;
    }
    /**
     * Get ruchUp
     *
     * @return integer
     */
    public function getRuchUp()
    {
        return $this->ruchUp;
    }
    /**
     * Set servKn
     *
     * @param integer $servKn
     *
     * @return ProductAttr
     */
    public function setServKn($servKn)
    {
        $this->servKn = $servKn;
        return $this;
    }
    /**
     * Get servKn
     *
     * @return integer
     */
    public function getServKn()
    {
        return $this->servKn;
    }
    /**
     * Set gorTor
     *
     * @param integer $gorTor
     *
     * @return ProductAttr
     */
    public function setGorTor($gorTor)
    {
        $this->gorTor = $gorTor;
        return $this;
    }
    /**
     * Get gorTor
     *
     * @return integer
     */
    public function getGorTor()
    {
        return $this->gorTor;
    }
    /**
     * Set asc
     *
     * @param integer $asc
     *
     * @return ProductAttr
     */
    public function setAsc($asc)
    {
        $this->asc = $asc;
        return $this;
    }
    /**
     * Get asc
     *
     * @return integer
     */
    public function getAsc()
    {
        return $this->asc;
    }
    /**
     * Set vsc
     *
     * @param integer $vsc
     *
     * @return ProductAttr
     */
    public function setVsc($vsc)
    {
        $this->vsc = $vsc;
        return $this;
    }
    /**
     * Get vsc
     *
     * @return integer
     */
    public function getVsc()
    {
        return $this->vsc;
    }
    /**
     * Set lobSt
     *
     * @param integer $lobSt
     *
     * @return ProductAttr
     */
    public function setLobSt($lobSt)
    {
        $this->lobSt = $lobSt;
        return $this;
    }
    /**
     * Get lobSt
     *
     * @return integer
     */
    public function getLobSt()
    {
        return $this->lobSt;
    }
    /**
     * Set eholot
     *
     * @param integer $eholot
     *
     * @return ProductAttr
     */
    public function setEholot($eholot)
    {
        $this->eholot = $eholot;
        return $this;
    }
    /**
     * Get eholot
     *
     * @return integer
     */
    public function getEholot()
    {
        return $this->eholot;
    }
    /**
     * Set yakor
     *
     * @param integer $yakor
     *
     * @return ProductAttr
     */
    public function setYakor($yakor)
    {
        $this->yakor = $yakor;
        return $this;
    }
    /**
     * Get yakor
     *
     * @return integer
     */
    public function getYakor()
    {
        return $this->yakor;
    }
    /**
     * Set spalnik
     *
     * @param integer $spalnik
     *
     * @return ProductAttr
     */
    public function setSpalnik($spalnik)
    {
        $this->spalnik = $spalnik;
        return $this;
    }
    /**
     * Get spalnik
     *
     * @return integer
     */
    public function getSpalnik()
    {
        return $this->spalnik;
    }
    /**
     * Set autopech
     *
     * @param integer $autopech
     *
     * @return ProductAttr
     */
    public function setAutopech($autopech)
    {
        $this->autopech = $autopech;
        return $this;
    }
    /**
     * Get autopech
     *
     * @return integer
     */
    public function getAutopech()
    {
        return $this->autopech;
    }
    /**
     * Set spalMest
     *
     * @param integer $spalMest
     *
     * @return ProductAttr
     */
    public function setSpalMest($spalMest)
    {
        $this->spalMest = $spalMest;
        return $this;
    }
    /**
     * Get spalMest
     *
     * @return integer
     */
    public function getSpalMest()
    {
        return $this->spalMest;
    }
    /**
     * Set toilet
     *
     * @param integer $toilet
     *
     * @return ProductAttr
     */
    public function setToilet($toilet)
    {
        $this->toilet = $toilet;
        return $this;
    }
    /**
     * Get toilet
     *
     * @return integer
     */
    public function getToilet()
    {
        return $this->toilet;
    }
    /**
     * Set holodil
     *
     * @param integer $holodil
     *
     * @return ProductAttr
     */
    public function setHolodil($holodil)
    {
        $this->holodil = $holodil;
        return $this;
    }
    /**
     * Get holodil
     *
     * @return integer
     */
    public function getHolodil()
    {
        return $this->holodil;
    }
    /**
     * Set kayut
     *
     * @param integer $kayut
     *
     * @return ProductAttr
     */
    public function setKayut($kayut)
    {
        $this->kayut = $kayut;
        return $this;
    }
    /**
     * Get kayut
     *
     * @return integer
     */
    public function getKayut()
    {
        return $this->kayut;
    }
    /**
     * Set toiletB
     *
     * @param integer $toiletB
     *
     * @return ProductAttr
     */
    public function setToiletB($toiletB)
    {
        $this->toiletB = $toiletB;
        return $this;
    }
    /**
     * Get toiletB
     *
     * @return integer
     */
    public function getToiletB()
    {
        return $this->toiletB;
    }
    /**
     * Set kuhn
     *
     * @param integer $kuhn
     *
     * @return ProductAttr
     */
    public function setKuhn($kuhn)
    {
        $this->kuhn = $kuhn;
        return $this;
    }
    /**
     * Get kuhn
     *
     * @return integer
     */
    public function getKuhn()
    {
        return $this->kuhn;
    }
    /**
     * Set bokVig
     *
     * @param integer $bokVig
     *
     * @return ProductAttr
     */
    public function setBokVig($bokVig)
    {
        $this->bokVig = $bokVig;
        return $this;
    }
    /**
     * Get bokVig
     *
     * @return integer
     */
    public function getBokVig()
    {
        return $this->bokVig;
    }
    /**
     * Set zadVig
     *
     * @param integer $zadVig
     *
     * @return ProductAttr
     */
    public function setZadVig($zadVig)
    {
        $this->zadVig = $zadVig;
        return $this;
    }
    /**
     * Get zadVig
     *
     * @return integer
     */
    public function getZadVig()
    {
        return $this->zadVig;
    }
    /**
     * Set trehVig
     *
     * @param integer $trehVig
     *
     * @return ProductAttr
     */
    public function setTrehVig($trehVig)
    {
        $this->trehVig = $trehVig;
        return $this;
    }
    /**
     * Get trehVig
     *
     * @return integer
     */
    public function getTrehVig()
    {
        return $this->trehVig;
    }
    /**
     * Set tent
     *
     * @param integer $tent
     *
     * @return ProductAttr
     */
    public function setTent($tent)
    {
        $this->tent = $tent;
        return $this;
    }
    /**
     * Get tent
     *
     * @return integer
     */
    public function getTent()
    {
        return $this->tent;
    }
    /**
     * Set trap
     *
     * @param integer $trap
     *
     * @return ProductAttr
     */
    public function setTrap($trap)
    {
        $this->trap = $trap;
        return $this;
    }
    /**
     * Get trap
     *
     * @return integer
     */
    public function getTrap()
    {
        return $this->trap;
    }
    /**
     * Set treyl
     *
     * @param integer $treyl
     *
     * @return ProductAttr
     */
    public function setTreyl($treyl)
    {
        $this->treyl = $treyl;
        return $this;
    }
    /**
     * Get treyl
     *
     * @return integer
     */
    public function getTreyl()
    {
        return $this->treyl;
    }
    /**
     * Get productAtrId
     *
     * @return integer
     */
    public function getProductAtrId()
    {
        return $this->productAtrId;
    }
}