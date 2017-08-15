<?php

namespace SkygenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bots
 *
 * @ORM\Table(name="bots")
 * @ORM\Entity(repositoryClass="SkygenBundle\Repository\BotsRepository")
 */
class Bots
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
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    private $author;

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
     * @ORM\Column(name="bot", type="string", length=255, nullable=false)
     */
    private $bot;

    /**
     * @var string
     *
     * @ORM\Column(name="base", type="string", length=255, nullable=false)
     */
    private $base;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

