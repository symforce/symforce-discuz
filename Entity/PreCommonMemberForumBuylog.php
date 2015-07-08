<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberForumBuylog
 *
 * @ORM\Table(name="pre_common_member_forum_buylog", indexes={@ORM\Index(name="fid", columns={"fid"})})
 * @ORM\Entity
 */
class PreCommonMemberForumBuylog
{
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
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="credits", type="integer", nullable=false)
     */
    private $credits = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberForumBuylog
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
     * Set fid
     *
     * @param integer $fid
     * @return PreCommonMemberForumBuylog
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
     * Set credits
     *
     * @param integer $credits
     * @return PreCommonMemberForumBuylog
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }
}
