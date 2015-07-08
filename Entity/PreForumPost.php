<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumPost
 *
 * @ORM\Table(name="pre_forum_post", uniqueConstraints={@ORM\UniqueConstraint(name="pid", columns={"pid"})}, indexes={@ORM\Index(name="fid", columns={"fid"}), @ORM\Index(name="authorid", columns={"authorid", "invisible"}), @ORM\Index(name="dateline", columns={"dateline"}), @ORM\Index(name="invisible", columns={"invisible"}), @ORM\Index(name="displayorder", columns={"tid", "invisible", "dateline"}), @ORM\Index(name="first", columns={"tid", "first"})})
 * @ORM\Entity
 */
class PreForumPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="first", type="boolean", nullable=false)
     */
    private $first = '0';

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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=80, nullable=false)
     */
    private $subject = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

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
     * @var boolean
     *
     * @ORM\Column(name="invisible", type="boolean", nullable=false)
     */
    private $invisible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="anonymous", type="boolean", nullable=false)
     */
    private $anonymous = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usesig", type="boolean", nullable=false)
     */
    private $usesig = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="htmlon", type="boolean", nullable=false)
     */
    private $htmlon = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bbcodeoff", type="boolean", nullable=false)
     */
    private $bbcodeoff = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="smileyoff", type="boolean", nullable=false)
     */
    private $smileyoff = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="parseurloff", type="boolean", nullable=false)
     */
    private $parseurloff = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=false)
     */
    private $attachment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="smallint", nullable=false)
     */
    private $rate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ratetimes", type="boolean", nullable=false)
     */
    private $ratetimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=false)
     */
    private $tags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="comment", type="boolean", nullable=false)
     */
    private $comment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replycredit", type="integer", nullable=false)
     */
    private $replycredit = '0';



    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumPost
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
     * Set position
     *
     * @param integer $position
     * @return PreForumPost
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumPost
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
     * Set fid
     *
     * @param integer $fid
     * @return PreForumPost
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set first
     *
     * @param boolean $first
     * @return PreForumPost
     */
    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first
     *
     * @return boolean 
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PreForumPost
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
     * @return PreForumPost
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
     * Set subject
     *
     * @param string $subject
     * @return PreForumPost
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumPost
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
     * Set message
     *
     * @param string $message
     * @return PreForumPost
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set useip
     *
     * @param string $useip
     * @return PreForumPost
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
     * @return PreForumPost
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
     * Set invisible
     *
     * @param boolean $invisible
     * @return PreForumPost
     */
    public function setInvisible($invisible)
    {
        $this->invisible = $invisible;

        return $this;
    }

    /**
     * Get invisible
     *
     * @return boolean 
     */
    public function getInvisible()
    {
        return $this->invisible;
    }

    /**
     * Set anonymous
     *
     * @param boolean $anonymous
     * @return PreForumPost
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return boolean 
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set usesig
     *
     * @param boolean $usesig
     * @return PreForumPost
     */
    public function setUsesig($usesig)
    {
        $this->usesig = $usesig;

        return $this;
    }

    /**
     * Get usesig
     *
     * @return boolean 
     */
    public function getUsesig()
    {
        return $this->usesig;
    }

    /**
     * Set htmlon
     *
     * @param boolean $htmlon
     * @return PreForumPost
     */
    public function setHtmlon($htmlon)
    {
        $this->htmlon = $htmlon;

        return $this;
    }

    /**
     * Get htmlon
     *
     * @return boolean 
     */
    public function getHtmlon()
    {
        return $this->htmlon;
    }

    /**
     * Set bbcodeoff
     *
     * @param boolean $bbcodeoff
     * @return PreForumPost
     */
    public function setBbcodeoff($bbcodeoff)
    {
        $this->bbcodeoff = $bbcodeoff;

        return $this;
    }

    /**
     * Get bbcodeoff
     *
     * @return boolean 
     */
    public function getBbcodeoff()
    {
        return $this->bbcodeoff;
    }

    /**
     * Set smileyoff
     *
     * @param boolean $smileyoff
     * @return PreForumPost
     */
    public function setSmileyoff($smileyoff)
    {
        $this->smileyoff = $smileyoff;

        return $this;
    }

    /**
     * Get smileyoff
     *
     * @return boolean 
     */
    public function getSmileyoff()
    {
        return $this->smileyoff;
    }

    /**
     * Set parseurloff
     *
     * @param boolean $parseurloff
     * @return PreForumPost
     */
    public function setParseurloff($parseurloff)
    {
        $this->parseurloff = $parseurloff;

        return $this;
    }

    /**
     * Get parseurloff
     *
     * @return boolean 
     */
    public function getParseurloff()
    {
        return $this->parseurloff;
    }

    /**
     * Set attachment
     *
     * @param boolean $attachment
     * @return PreForumPost
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return boolean 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return PreForumPost
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set ratetimes
     *
     * @param boolean $ratetimes
     * @return PreForumPost
     */
    public function setRatetimes($ratetimes)
    {
        $this->ratetimes = $ratetimes;

        return $this;
    }

    /**
     * Get ratetimes
     *
     * @return boolean 
     */
    public function getRatetimes()
    {
        return $this->ratetimes;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return PreForumPost
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return PreForumPost
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set comment
     *
     * @param boolean $comment
     * @return PreForumPost
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return boolean 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set replycredit
     *
     * @param integer $replycredit
     * @return PreForumPost
     */
    public function setReplycredit($replycredit)
    {
        $this->replycredit = $replycredit;

        return $this;
    }

    /**
     * Get replycredit
     *
     * @return integer 
     */
    public function getReplycredit()
    {
        return $this->replycredit;
    }
}
