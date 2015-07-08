<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeFollow
 *
 * @ORM\Table(name="pre_home_follow")
 * @ORM\Entity
 */
class PreHomeFollow
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
     * @ORM\Column(name="followuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $followuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fusername", type="string", length=15, nullable=false)
     */
    private $fusername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bkname", type="string", length=255, nullable=false)
     */
    private $bkname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="mutual", type="boolean", nullable=false)
     */
    private $mutual = '0';

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
     * @return PreHomeFollow
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
     * Set followuid
     *
     * @param integer $followuid
     * @return PreHomeFollow
     */
    public function setFollowuid($followuid)
    {
        $this->followuid = $followuid;

        return $this;
    }

    /**
     * Get followuid
     *
     * @return integer 
     */
    public function getFollowuid()
    {
        return $this->followuid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreHomeFollow
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
     * Set fusername
     *
     * @param string $fusername
     * @return PreHomeFollow
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
     * Set bkname
     *
     * @param string $bkname
     * @return PreHomeFollow
     */
    public function setBkname($bkname)
    {
        $this->bkname = $bkname;

        return $this;
    }

    /**
     * Get bkname
     *
     * @return string 
     */
    public function getBkname()
    {
        return $this->bkname;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreHomeFollow
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set mutual
     *
     * @param boolean $mutual
     * @return PreHomeFollow
     */
    public function setMutual($mutual)
    {
        $this->mutual = $mutual;

        return $this;
    }

    /**
     * Get mutual
     *
     * @return boolean 
     */
    public function getMutual()
    {
        return $this->mutual;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeFollow
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
