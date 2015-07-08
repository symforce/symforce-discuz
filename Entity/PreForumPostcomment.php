<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumPostcomment
 *
 * @ORM\Table(name="pre_forum_postcomment", indexes={@ORM\Index(name="tid", columns={"tid"}), @ORM\Index(name="authorid", columns={"authorid"}), @ORM\Index(name="score", columns={"score"}), @ORM\Index(name="rpid", columns={"rpid"}), @ORM\Index(name="pid", columns={"pid", "dateline"})})
 * @ORM\Entity
 */
class PreForumPostcomment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="score", type="boolean", nullable=false)
     */
    private $score = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="useip", type="string", length=15, nullable=false)
     */
    private $useip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rpid", type="integer", nullable=false)
     */
    private $rpid = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumPostcomment
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumPostcomment
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PreForumPostcomment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return PreForumPostcomment
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumPostcomment
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer 
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return PreForumPostcomment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set score
     *
     * @param boolean $score
     * @return PreForumPostcomment
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return boolean 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set useip
     *
     * @param string $useip
     * @return PreForumPostcomment
     */
    public function setUseip($useip)
    {
        $this->useip = $useip;

        return $this;
    }

    /**
     * Get useip
     *
     * @return string 
     */
    public function getUseip()
    {
        return $this->useip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreForumPostcomment
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set rpid
     *
     * @param integer $rpid
     * @return PreForumPostcomment
     */
    public function setRpid($rpid)
    {
        $this->rpid = $rpid;

        return $this;
    }

    /**
     * Get rpid
     *
     * @return integer 
     */
    public function getRpid()
    {
        return $this->rpid;
    }
}
