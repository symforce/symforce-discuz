<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumForumThreadtable
 *
 * @ORM\Table(name="pre_forum_forum_threadtable")
 * @ORM\Entity
 */
class PreForumForumThreadtable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid;

    /**
     * @var integer
     *
     * @ORM\Column(name="threadtableid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $threadtableid;

    /**
     * @var integer
     *
     * @ORM\Column(name="threads", type="integer", nullable=false)
     */
    private $threads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=false)
     */
    private $posts = '0';



    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumForumThreadtable
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
     * Set threadtableid
     *
     * @param integer $threadtableid
     * @return PreForumForumThreadtable
     */
    public function setThreadtableid($threadtableid)
    {
        $this->threadtableid = $threadtableid;

        return $this;
    }

    /**
     * Get threadtableid
     *
     * @return integer 
     */
    public function getThreadtableid()
    {
        return $this->threadtableid;
    }

    /**
     * Set threads
     *
     * @param integer $threads
     * @return PreForumForumThreadtable
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
     * Set posts
     *
     * @param integer $posts
     * @return PreForumForumThreadtable
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
