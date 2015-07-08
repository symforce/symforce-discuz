<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeFriendRequest
 *
 * @ORM\Table(name="pre_home_friend_request", indexes={@ORM\Index(name="fuid", columns={"fuid"}), @ORM\Index(name="dateline", columns={"uid", "dateline"})})
 * @ORM\Entity
 */
class PreHomeFriendRequest
{
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
     * @ORM\Column(name="fuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fusername", type="string", length=15, nullable=false)
     */
    private $fusername = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="smallint", nullable=false)
     */
    private $gid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=60, nullable=false)
     */
    private $note = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeFriendRequest
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
     * Set fuid
     *
     * @param integer $fuid
     * @return PreHomeFriendRequest
     */
    public function setFuid($fuid)
    {
        $this->fuid = $fuid;

        return $this;
    }

    /**
     * Get fuid
     *
     * @return integer 
     */
    public function getFuid()
    {
        return $this->fuid;
    }

    /**
     * Set fusername
     *
     * @param string $fusername
     * @return PreHomeFriendRequest
     */
    public function setFusername($fusername)
    {
        $this->fusername = $fusername;

        return $this;
    }

    /**
     * Get fusername
     *
     * @return string 
     */
    public function getFusername()
    {
        return $this->fusername;
    }

    /**
     * Set gid
     *
     * @param integer $gid
     * @return PreHomeFriendRequest
     */
    public function setGid($gid)
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return PreHomeFriendRequest
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeFriendRequest
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
}
