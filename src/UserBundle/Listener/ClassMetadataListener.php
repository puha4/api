<?php
namespace UserBundle\Listener;
use Doctrine\ORM\Event\LoadClassMetadataEventArgs;

/**
 * Created by PhpStorm.
 * User: vatalii
 * Date: 24.05.16
 * Time: 21:16
 */
class ClassMetadataListener
{
    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs)
    {
        $classMetadata = $eventArgs->getClassMetadata();

        // Override FOS to not have unique emails
//        if ($classMetadata->reflClass->name == 'UserBundle\Entity\User') {
//            echo "<pre>";
//            print_r($classMetadata);die();
//            foreach ($classMetadata->indexes as $i => $index) {
//                if (count($index['keys']) === 1 && isset($index['keys']['emailCanonical'])) {
//                    $classMetadata->indexes[$i]['options']['unique'] = false;
//                    break;
//                }
//            }
//        }
    }
}