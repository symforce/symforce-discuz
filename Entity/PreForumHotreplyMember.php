<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumHotreplyMember
 *
 * @ORM\Table(name="pre_forum_hotreply_member")
 * @ORM\Entity
 */
class PreForumHotreplyMember
{
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
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attitude", type="boolean", nullable=false)
     */
    private $attitude = '0';



    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumHotreplyMember
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
     * Set uid
     *
     * @param integer $uid
     * @return PreForumHotreplyMember
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
     * Set tid
     *
     * @param integer $tid
     * @return PreForumHotreplyMember
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
     * Set attitude
     *
     * @param boolean $attitude
     * @return PreForumHotreplyMember
     */
    public function setAttitude($attitude)
    {
        $this->attitude = $attitude;

        return $this;
    }

    /**
     * Get attitude
     *
     * @return boolean 
     */
    public function getAttitude()
    {
        return $this->attitude;
    }
}
