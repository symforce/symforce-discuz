<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumGroupcreditslog
 *
 * @ORM\Table(name="pre_forum_groupcreditslog")
 * @ORM\Entity
 */
class PreForumGroupcreditslog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="logdate", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $logdate = '0';



    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumGroupcreditslog
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
     * @return PreForumGroupcreditslog
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
     * Set logdate
     *
     * @param integer $logdate
     * @return PreForumGroupcreditslog
     */
    public function setLogdate($logdate)
    {
        $this->logdate = $logdate;

        return $this;
    }

    /**
     * Get logdate
     *
     * @return integer 
     */
    public function getLogdate()
    {
        return $this->logdate;
    }
}
