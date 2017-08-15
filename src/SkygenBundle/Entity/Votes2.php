<?php

namespace SkygenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes2
 *
 * @ORM\Table(name="votes2")
 * @ORM\Entity(repositoryClass="SkygenBundle\Repository\Votes2Repository")
 */
class Votes2
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_timestamp", type="datetime", nullable=false)
     */
    private $dateTimestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="IP", type="string", length=255, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="useragent", type="string", length=255, nullable=false)
     */
    private $useragent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vote", type="integer", nullable=false)
     */
    private $idVote;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=false)
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="support", type="boolean", nullable=false)
     */
    private $support = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="oppose", type="boolean", nullable=false)
     */
    private $oppose = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="neutral", type="boolean", nullable=false)
     */
    private $neutral = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

