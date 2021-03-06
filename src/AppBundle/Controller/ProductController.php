<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\ProductAttr;
use AppBundle\Entity\ProductVideo;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * @Route("product")
 */
class ProductController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @Post("/add", name="product_add")
     */
    public function addAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $product = $this->setProductValues($request, $product);

        $em->persist($product);
        $em->flush();

        $this->saveYoutubeVideos($request, $product, $em);
        $this->saveProductImages($request, $product);
        $this->insertProdutAttributes($request, $product->getProductId());

        $view = $this->view(['add' => 'success'], 200);
        
        return $this->handleView($view);
    }

    /**
     * @Post("/update/{plusProductId}", name="product_update")
     */
    public function updateAction(Request $request, $plusProductId)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository("AppBundle:Product")->findOneBy(['plusProductId' => $plusProductId]);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '. $plusProductId);
        }

        $product = $this->setProductValues($request, $product);

        $em->persist($product);
        $em->flush();

        $this->deleteYoutubeVideos($product,$em);
        $this->removeProductImageDir($product->getProductId());
        $this->removeProductAttributes($product->getProductId());
        
        $this->saveYoutubeVideos($request, $product, $em);
        $this->saveProductImages($request, $product);
        $this->insertProdutAttributes($request, $product->getProductId());

        $view = $this->view(['update' => 'success'], 200);

        return $this->handleView($view);
    }

    /**
     * @Post("/delete/{plusProductId}", name="product_delete")
     */
    public function deleteAction($plusProductId)
    {
        $em = $this->getDoctrine()->getManager();
        
        $product = $em->getRepository("AppBundle:Product")->findOneBy(['plusProductId' => $plusProductId]);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '. $plusProductId);
        }

        $productId = $product->getProductId();

        $productAttr = $em->getRepository("AppBundle:ProductAttr")->findOneBy(['productId' => $productId]);

        $em->remove($productAttr);
        $em->remove($product);
        $em->flush();

        $this->removeProductImageDir($productId);

        $view = $this->view(['delete' => 'success'], 200);

        return $this->handleView($view);
    }

    /**
     * @Post("/hide/{plusProductId}", name="product_hide")
     */
    public function hideAction($plusProductId)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository("AppBundle:Product")->findOneBy(['plusProductId' => $plusProductId]);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '. $plusProductId);
        }

        $product->setStatus(0);

        $em->persist($product);
        $em->flush();
        
        $view = $this->view(['hide' => 'success'], 200);

        return $this->handleView($view);
    }

    /**
     * @Post("/show/{plusProductId}", name="product_show")
     */
    public function showAction($plusProductId)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository("AppBundle:Product")->findOneBy(['plusProductId' => $plusProductId]);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id '. $plusProductId);
        }

        $product->setStatus(1);

        $em->persist($product);
        $em->flush();

        $view = $this->view(['show' => 'success'], 200);

        return $this->handleView($view);
    }

    private function setProductValues(Request $request, Product $product)
    {
        $obmen = $request->request->get('obmen');
        if ($obmen) {
            $obmen = 1;
        } else {
            $obmen = 0;
        }

        $nocomment = $request->request->get('nocomment');
        if ($nocomment) {
            $nocomment = 1;
        } else {
            $nocomment = 0;
        }

        $torg = $request->request->get('torg');
        if ($torg) {
            $torg = 1;
        } else {
            $torg = 0;
        }

        $product->setCustomerId(1535);
        $product->setAutotypeId($request->request->get('autotype_id'));
        $product->setAutotypeImageId($request->request->get('autotype_image_id'));
        $product->setNew($request->request->get('new'));
        $product->setCountryId($request->request->get('country_id'));
        $product->setModel("");
        $product->setGod($request->request->get('god'));
        $product->setObmen((int)$obmen);
        $product->setNocomment((int)$nocomment);
        $product->setTorg((int)$torg);
        $product->setKorobka($request->request->get('korobka'));
        $product->setTopl($request->request->get('topl'));
        $product->setPrivod($request->request->get('privod'));
        $product->setBazKompl($request->request->get('baz_kompl'));
        $product->setCvet($request->request->get('cvet'));
        $product->setImage($request->request->get('main_im'));
        $product->setOpisanie($request->request->get('opisanie'));
        $product->setDopOpisanie($request->request->get('dop_opisanie'));
        $product->setObiem($request->request->get('obiem'));
        $product->setPrice($request->request->get('price'));
        $product->setProbeg($request->request->get('probeg'));
        $product->setDveri($request->request->get('dveri'));
        $product->setMosh($request->request->get('mosh'));
        $product->setMoshType($request->request->get('mosh_type'));
        $product->setRashGor($request->request->get('rash_gor'));
        $product->setRashShos($request->request->get('rash_shos'));
        $product->setRaztar($request->request->get('raztar'));
        $product->setPovrej($request->request->get('povrej'));
        $product->setCredit($request->request->get('credit'));
        $product->setConfis($request->request->get('confis'));
        $product->setNeHod($request->request->get('ne_hod'));
        $product->setStatus(1);
        $product->setPlusProductId($request->request->get('auto_id'));

        $cvet_met = $request->request->get('cvet_met');
        if ($cvet_met) {
            $product->setCvetMet($cvet_met);
        } else {
            $product->setCvetMet(0);
        }

        $mark_id = $request->request->get('mark_id');
        if ($mark_id) {
            $product->setMarkId($mark_id);
        }

        $model_id = $request->request->get('model_id');
        if ($model_id) {
            $product->setModelId($model_id);
        }

        return $product;
    }

    /**
     * @param $request
     * @param $productId
     */
    private function insertProdutAttributes(Request $request, $productId)
    {
        $em = $this->getDoctrine()->getManager();
        $productAttr = new ProductAttr();

        $abd = $request->request->get('abd');
        if ($abd) {
            $productAttr->setAbd(1);
        }

        $abs = $request->request->get('abs');
        if ($abs) {
            $productAttr->setAbs(1);
        }

        $esp = $request->request->get('esp');
        if ($esp) {
            $productAttr->setEsp(1);
        }

        $gal_far = $request->request->get('gal_far');
        if ($gal_far) {
            $productAttr->setGalFar(1);
        }

        $kpp = $request->request->get('kpp');
        if ($kpp) {
            $productAttr->setKpp(1);
        }

        $immob = $request->request->get('immob');
        if ($immob) {
            $productAttr->setImmob(1);
        }

        $pod_bez = $request->request->get('pod_bez');
        if ($pod_bez) {
            $productAttr->setPodBez(1);
        }

        $serv = $request->request->get('serv');
        if ($serv) {
            $productAttr->setServ(1);
        }

        $sign = $request->request->get('sign');
        if ($sign) {
            $productAttr->setSign(1);
        }

        $cent_zam = $request->request->get('cent_zam');
        if ($cent_zam) {
            $productAttr->setCentZam(1);
        }

        $cd = $request->request->get('cd');
        if ($cd) {
            $productAttr->setCd(1);
        }

        $dvd = $request->request->get('dvd');
        if ($dvd) {
            $productAttr->setDvd(1);
        }

        $mp3 = $request->request->get('mp3');
        if ($mp3) {
            $productAttr->setMp3(1);
        }

        $akust = $request->request->get('akust');
        if ($akust) {
            $productAttr->setAkust(1);
        }

        $magnit = $request->request->get('magnit');
        if ($magnit) {
            $productAttr->setMagnit(1);
        }

        $sabuf = $request->request->get('sabuf');
        if ($sabuf) {
            $productAttr->setSabuf(1);
        }

        $sys_nav = $request->request->get('sys_nav');
        if ($sys_nav) {
            $productAttr->setSysNav(1);
        }

        $gps = $request->request->get('gps');
        if ($gps) {
            $productAttr->setGps(1);
        }

        $gbo = $request->request->get('gbo');
        if ($gbo) {
            $productAttr->setGbo(1);
        }

        $derev = $request->request->get('derev');
        if ($derev) {
            $productAttr->setDerev(1);
        }

        $dl_baz = $request->request->get('dl_baz');
        if ($dl_baz) {
            $productAttr->setDlBaz(1);
        }

        $maxi = $request->request->get('maxi');
        if ($maxi) {
            $productAttr->setMaxi(1);
        }

        $prav_rul = $request->request->get('prav_rul');
        if ($prav_rul) {
            $productAttr->setPravRul(1);
        }

        $ton_stek = $request->request->get('ton_stek');
        if ($ton_stek) {
            $productAttr->setTonStek(1);
        }

        $tyn = $request->request->get('tyn');
        if ($tyn) {
            $productAttr->setTyn(1);
        }

        $fark = $request->request->get('fark');
        if ($fark) {
            $productAttr->setFark(1);
        }

        $garaj_hr = $request->request->get('garaj_hr');
        if ($garaj_hr) {
            $productAttr->setGarajHr(1);
        }

        $ne_bit = $request->request->get('ne_bit');
        if ($ne_bit) {
            $productAttr->setNeBit(1);
        }

        $ne_krash = $request->request->get('ne_krash');
        if ($ne_krash) {
            $productAttr->setNeKrash(1);
        }

        $ruch_up = $request->request->get('ruch_up');
        if ($ruch_up) {
            $productAttr->setRuchUp(1);
        }

        $serv_kn = $request->request->get('serv_kn');
        if ($serv_kn) {
            $productAttr->setServKn(1);
        }

        $bort_comp = $request->request->get('bort_comp');
        if ($bort_comp) {
            $productAttr->setBortComp(1);
        }

        $dat_svet = $request->request->get('dat_svet');
        if ($dat_svet) {
            $productAttr->setDatSvet(1);
        }

        $klim_kon = $request->request->get('klim_kon');
        if ($klim_kon) {
            $productAttr->setKlimKon(1);
        }

        $koj_sal = $request->request->get('koj_sal');
        if ($koj_sal) {
            $productAttr->setKojSal(1);
        }

        $kondic = $request->request->get('kondic');
        if ($kondic) {
            $productAttr->setKondic(1);
        }

        $kruz_kont = $request->request->get('kruz_kont');
        if ($kruz_kont) {
            $productAttr->setKruzKont(1);
        }

        $lyk = $request->request->get('lyk');
        if ($lyk) {
            $productAttr->setLyk(1);
        }

        $multir = $request->request->get('multir');
        if ($multir) {
            $productAttr->setMultir(1);
        }

        $omiv_far = $request->request->get('omiv_far');
        if ($omiv_far) {
            $productAttr->setOmivFar(1);
        }

        $parktr = $request->request->get('parktr');
        if ($parktr) {
            $productAttr->setParktr(1);
        }

        $pod_zer = $request->request->get('pod_zer');
        if ($pod_zer) {
            $productAttr->setPodZer(1);
        }

        $pod_sid = $request->request->get('pod_sid');
        if ($pod_sid) {
            $productAttr->setPodSid(1);
        }

        $sens_dojd = $request->request->get('sens_dojd');
        if ($sens_dojd) {
            $productAttr->setSensDojd(1);
        }

        $us_rul = $request->request->get('us_rul');
        if ($us_rul) {
            $productAttr->setUsRul(1);
        }

        $el_stekl = $request->request->get('el_stekl');
        if ($el_stekl) {
            $productAttr->setElStekl(1);
        }

        $el_pak = $request->request->get('el_pak');
        if ($el_pak) {
            $productAttr->setElPak(1);
        }

        $gor_tor = $request->request->get('gor_tor');
        if ($gor_tor) {
            $productAttr->setGorTor(1);
        }

        $asc = $request->request->get('asc');
        if ($asc) {
            $productAttr->setAsc(1);
        }

        $vsc = $request->request->get('vsc');
        if ($vsc) {
            $productAttr->setVsc(1);
        }

        $lob_st = $request->request->get('lob_st');
        if ($lob_st) {
            $productAttr->setLobSt(1);
        }

        $eholot = $request->request->get('eholot');
        if ($eholot) {
            $productAttr->setEholot(1);
        }

        $yakor = $request->request->get('yakor');
        if ($yakor) {
            $productAttr->setYakor(1);
        }

        $spalnik = $request->request->get('spalnik');
        if ($spalnik) {
            $productAttr->setSpalnik(1);
        }

        $autopech = $request->request->get('autopech');
        if ($autopech) {
            $productAttr->setAutopech(1);
        }

        $spal_mest = $request->request->get('spal_mest');
        if ($spal_mest) {
            $productAttr->setSpalMest(1);
        }

        $toilet = $request->request->get('toilet');
        if ($toilet) {
            $productAttr->setToilet(1);
        }

        $holodil = $request->request->get('holodil');
        if ($holodil) {
            $productAttr->setHolodil(1);
        }

        $kayut = $request->request->get('kayut');
        if ($kayut) {
            $productAttr->setKayut(1);
        }

        $toilet_b = $request->request->get('toilet_b');
        if ($toilet_b) {
            $productAttr->setToiletB(1);
        }

        $kuhn = $request->request->get('kuhn');
        if ($kuhn) {
            $productAttr->setKuhn(1);
        }

        $bok_vig = $request->request->get('bok_vig');
        if ($bok_vig) {
            $productAttr->setBokVig(1);
        }

        $zad_vig = $request->request->get('zad_vig');
        if ($zad_vig) {
            $productAttr->setZadVig(1);
        }

        $treh_vig = $request->request->get('treh_vig');
        if ($treh_vig) {
            $productAttr->setTrehVig(1);
        }

        $tent = $request->request->get('tent');
        if ($tent) {
            $productAttr->setTent(1);
        }

        $trap = $request->request->get('trap');
        if ($trap) {
            $productAttr->setTrap(1);
        }

        $treyl = $request->request->get('treyl');
        if ($treyl) {
            $productAttr->setTreyl(1);
        }

        $productAttr->setProductId($productId);
        $em->persist($productAttr);
        $em->flush();
    }
    
    private function removeProductAttributes($productId)
    {
        $em = $this->getDoctrine()->getManager();
        
        $productAttr = $em->getRepository("AppBundle:ProductAttr")->findOneBy(['productId' => $productId]);
        
        if ($productAttr) {
            $em->remove($productAttr);
            $em->flush();
        }
    }

    /**
     * @param Request $request
     * @param $product
     */
    private function saveProductImages(Request $request, $product)
    {
        $imgPath = $this->container->getParameter('app.product.img_path');
        $fs = new Filesystem();

        try {
            $fs->mkdir($imgPath . $product->getProductId());
        } catch (IOExceptionInterface $e) {
            echo "An error occurred while creating your directory at " . $e->getPath();
        }

        $images = $request->request->get('images');

        foreach ($images as $image) {
            $parsedArray = parse_url($image);
            $explodedPath = explode("/", $parsedArray['path']);
            $imageName = end($explodedPath);

            $fs->copy($image, $imgPath . $product->getProductId() . "/" . $imageName);
        }
    }

    private function removeProductImageDir($productId)
    {
        $fs = new Filesystem();

        $imgPath = $this->container->getParameter('app.product.img_path');

        try {
            $fs->remove($imgPath . $productId);
        } catch (IOExceptionInterface $e) {
            echo "An error occurred while creating your directory at " . $e->getPath();
        }
    }

    /**
     * @param Request $request
     * @param $product
     * @param $em
     */
    private function saveYoutubeVideos(Request $request, $product, EntityManager $em)
    {
        $videos = $request->request->get('youtube');
        
        foreach ($videos as $youtube) {
            if ($youtube['code'] && $youtube['title']) {
                $productVideo = new ProductVideo();
                $productVideo->setTitle($youtube['title']);
                $productVideo->setCode($youtube['code']);
                $productVideo->setProduct($product);
                $em->persist($productVideo);
            }
        }
        $em->flush();
    }

    /**
     * @param $product
     * @param $em
     */
    private function deleteYoutubeVideos($product, EntityManager $em)
    {
        $productVideos = $em->getRepository("AppBundle:ProductVideo")->findBy(['product' => $product]);
        
        if (!empty($productVideos)) {
            foreach ($productVideos as $productVideo) {
                $em->remove($productVideo);
            }
        }
        
        $em->flush();
    }
}