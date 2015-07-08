<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumFilterPost
 *
 * @ORM\Table(name="pre_forum_filter_post", indexes={@ORM\Index(name="tid", columns={"tid", "postlength"})})
 * @ORM\Entity
 */
class PreForumFilterPost
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
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="postlength", type="integer", nullable=false)
     */
    private $postlength = '0';



    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumFilterPost
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
     * @return PreForumFilterPost
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
     * Set postlength
     *
     * @param integer $postlength
     * @return PreForumFilterPost
     */
    public function setPostlength($postlength)
    {
        $this->postlength = $postlength;

        return $this;
    }

    /**
     * Get postlength
     *
     * @return integer 
     */
    public function getPostlength()
    {
        return $this->postlength;
    }
}
