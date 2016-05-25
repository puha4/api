<?php
namespace UserBundle\Security;
use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;

/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 25.05.16
 * Time: 14:20
 */
class PasswordEncoder extends BasePasswordEncoder
{
    public function encodePassword($raw, $salt)
    {
        return md5($raw);
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        return $this->comparePasswords($encoded, $this->encodePassword($raw, $salt));
    }
}