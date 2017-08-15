<?php

namespace SkygenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogsVote
 *
 * @ORM\Table(name="logs_vote")
 * @ORM\Entity(repositoryClass="SkygenBundle\Repository\LogsVoteRepository")
 */
class LogsVote
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
     * @var integer
     *
     * @ORM\Column(name="id_vote", type="integer", nullable=false)
     */
    private $idVote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="end", type="boolean", nullable=false)
     */
    private $end;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="accepted", type="integer", nullable=false)
     */
    private $accepted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

