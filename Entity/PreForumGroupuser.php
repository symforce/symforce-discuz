<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumGroupuser
 *
 * @ORM\Table(name="pre_forum_groupuser", indexes={@ORM\Index(name="uid_lastupdate", columns={"uid", "lastupdate"}), @ORM\Index(name="userlist", columns={"fid", "level", "lastupdate"})})
 * @ORM\Entity
 */
class PreForumGroupuser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="threads", type="integer", nullable=false)
     */
    private $threads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replies", type="integer", nullable=false)
     */
    private $replies = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="joindateline", type="integer", nullable=false)
     */
    private $joindateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="privacy", type="boolean", nullable=false)
     */
    private $privacy = '0';



    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumGroupuser
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
     * Set uid
     *
     * @param integer $uid
     * @return PreForumGroupuser
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreForumGroupuser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set level
     *
     * @param boolean $level
     * @return PreForumGroupuser
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set threads
     *
     * @param integer $threads
     * @return PreForumGroupuser
     */
    public function setThreads($threads)
    {
        $this->threads = $threads;

        return $this;
    }

    /**
     * Get threads
     *
     * @return integer 
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set replies
     *
     * @param integer $replies
     * @return PreForumGroupuser
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;

        return $this;
    }

    /**
     * Get replies
     *
     * @return integer 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set joindateline
     *
     * @param integer $joindateline
     * @return PreForumGroupuser
     */
    public function setJoindateline($joindateline)
    {
        $this->joindateline = $joindateline;

        return $this;
    }

    /**
     * Get joindateline
     *
     * @return integer 
     */
    public function getJoindateline()
    {
        return $this->joindateline;
    }

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreForumGroupuser
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set privacy
     *
     * @param boolean $privacy
     * @return PreForumGroupuser
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * Get privacy
     *
     * @return boolean 
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }
}
