<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterFriends
 *
 * @ORM\Table(name="pre_ucenter_friends", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="friendid", columns={"friendid"})})
 * @ORM\Entity
 */
class PreUcenterFriends
{
    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $version;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="friendid", type="integer", nullable=false)
     */
    private $friendid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="direction", type="boolean", nullable=false)
     */
    private $direction = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delstatus", type="boolean", nullable=false)
     */
    private $delstatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment = '';



    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreUcenterFriends
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
     * Set friendid
     *
     * @param integer $friendid
     * @return PreUcenterFriends
     */
    public function setFriendid($friendid)
    {
        $this->friendid = $friendid;

        return $this;
    }

    /**
     * Get friendid
     *
     * @return integer 
     */
    public function getFriendid()
    {
        return $this->friendid;
    }

    /**
     * Set direction
     *
     * @param boolean $direction
     * @return PreUcenterFriends
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return boolean 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set delstatus
     *
     * @param boolean $delstatus
     * @return PreUcenterFriends
     */
    public function setDelstatus($delstatus)
    {
        $this->delstatus = $delstatus;

        return $this;
    }

    /**
     * Get delstatus
     *
     * @return boolean 
     */
    public function getDelstatus()
    {
        return $this->delstatus;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return PreUcenterFriends
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
}
