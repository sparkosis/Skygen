<?php

namespace SkygenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordReset
 *
 * @ORM\Table(name="password_reset")
 * @ORM\Entity(repositoryClass="SkygenBundle\Repository\PasswordResetRepository")
 */
class PasswordReset
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="id_pass", type="string", length=255, nullable=false)
     */
    private $idPass;

    /**
     * @var string
     *
     * @ORM\Column(name="old_password", type="string", length=255, nullable=false)
     */
    private $oldPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="new_password", type="string", length=255, nullable=false)
     */
    private $newPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

