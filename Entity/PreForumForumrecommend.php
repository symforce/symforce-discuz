<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumForumrecommend
 *
 * @ORM\Table(name="pre_forum_forumrecommend", indexes={@ORM\Index(name="displayorder", columns={"fid", "displayorder"}), @ORM\Index(name="position", columns={"position"})})
 * @ORM\Entity
 */
class PreForumForumrecommend
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="smallint", nullable=false)
     */
    private $typeid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=80, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderatorid", type="integer", nullable=false)
     */
    private $moderatorid;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="position", type="boolean", nullable=false)
     */
    private $position = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="highlight", type="boolean", nullable=false)
     */
    private $highlight = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename = '';



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
     * Set fid
     *
     * @param integer $fid
     * @return PreForumForumrecommend
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
     * Set typeid
     *
     * @param integer $typeid
     * @return PreForumForumrecommend
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumForumrecommend
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return PreForumForumrecommend
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
     * Set author
     *
     * @param string $author
     * @return PreForumForumrecommend
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
     * @return PreForumForumrecommend
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
     * Set moderatorid
     *
     * @param integer $moderatorid
     * @return PreForumForumrecommend
     */
    public function setModeratorid($moderatorid)
    {
        $this->moderatorid = $moderatorid;

        return $this;
    }

    /**
     * Get moderatorid
     *
     * @return integer 
     */
    public function getModeratorid()
    {
        return $this->moderatorid;
    }

    /**
     * Set expiration
     *
     * @param integer $expiration
     * @return PreForumForumrecommend
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set position
     *
     * @param boolean $position
     * @return PreForumForumrecommend
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return boolean 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set highlight
     *
     * @param boolean $highlight
     * @return PreForumForumrecommend
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * Get highlight
     *
     * @return boolean 
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     * @return PreForumForumrecommend
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return PreForumForumrecommend
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
}
