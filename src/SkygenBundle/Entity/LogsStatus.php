<?php

namespace SkygenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogsStatus
 *
 * @ORM\Table(name="logs_status")
 * @ORM\Entity(repositoryClass="SkygenBundle\Repository\LogsStatusRepository")
 */
class LogsStatus
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
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=false)
     */
    private $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="moderator", type="boolean", nullable=false)
     */
    private $moderator;

    /**
     * @var boolean
     *
     * @ORM\Column(name="developer", type="boolean", nullable=false)
     */
    private $developer;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255, nullable=true)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

