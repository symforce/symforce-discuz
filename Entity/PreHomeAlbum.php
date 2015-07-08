<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeAlbum
 *
 * @ORM\Table(name="pre_home_album", indexes={@ORM\Index(name="uid", columns={"uid", "updatetime"}), @ORM\Index(name="updatetime", columns={"updatetime"})})
 * @ORM\Entity
 */
class PreHomeAlbum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="albumid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $albumid;

    /**
     * @var string
     *
     * @ORM\Column(name="albumname", type="string", length=50, nullable=false)
     */
    private $albumname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="smallint", nullable=false)
     */
    private $catid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="updatetime", type="integer", nullable=false)
     */
    private $updatetime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="picnum", type="smallint", nullable=false)
     */
    private $picnum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=255, nullable=false)
     */
    private $pic = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="picflag", type="boolean", nullable=false)
     */
    private $picflag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="friend", type="boolean", nullable=false)
     */
    private $friend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=10, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="target_ids", type="text", nullable=false)
     */
    private $targetIds;

    /**
     * @var integer
     *
     * @ORM\Column(name="favtimes", type="integer", nullable=false)
     */
    private $favtimes;

    /**
     * @var integer
     *
     * @ORM\Column(name="sharetimes", type="integer", nullable=false)
     */
    private $sharetimes;

    /**
     * @var string
     *
     * @ORM\Column(name="depict", type="text", nullable=false)
     */
    private $depict;



    /**
     * Get albumid
     *
     * @return integer 
     */
    public function getAlbumid()
    {
        return $this->albumid;
    }

    /**
     * Set albumname
     *
     * @param string $albumname
     * @return PreHomeAlbum
     */
    public function setAlbumname($albumname)
    {
        $this->albumname = $albumname;

        return $this;
    }

    /**
     * Get albumname
     *
     * @return string 
     */
    public function getAlbumname()
    {
        return $this->albumname;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     * @return PreHomeAlbum
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeAlbum
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
     * @return PreHomeAlbum
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeAlbum
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

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return PreHomeAlbum
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set picnum
     *
     * @param integer $picnum
     * @return PreHomeAlbum
     */
    public function setPicnum($picnum)
    {
        $this->picnum = $picnum;

        return $this;
    }

    /**
     * Get picnum
     *
     * @return integer 
     */
    public function getPicnum()
    {
        return $this->picnum;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return PreHomeAlbum
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set picflag
     *
     * @param boolean $picflag
     * @return PreHomeAlbum
     */
    public function setPicflag($picflag)
    {
        $this->picflag = $picflag;

        return $this;
    }

    /**
     * Get picflag
     *
     * @return boolean 
     */
    public function getPicflag()
    {
        return $this->picflag;
    }

    /**
     * Set friend
     *
     * @param boolean $friend
     * @return PreHomeAlbum
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return boolean 
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return PreHomeAlbum
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set targetIds
     *
     * @param string $targetIds
     * @return PreHomeAlbum
     */
    public function setTargetIds($targetIds)
    {
        $this->targetIds = $targetIds;

        return $this;
    }

    /**
     * Get targetIds
     *
     * @return string 
     */
    public function getTargetIds()
    {
        return $this->targetIds;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PreHomeAlbum
     */
    public function setFavtimes($favtimes)
    {
        $this->favtimes = $favtimes;

        return $this;
    }

    /**
     * Get favtimes
     *
     * @return integer 
     */
    public function getFavtimes()
    {
        return $this->favtimes;
    }

    /**
     * Set sharetimes
     *
     * @param integer $sharetimes
     * @return PreHomeAlbum
     */
    public function setSharetimes($sharetimes)
    {
        $this->sharetimes = $sharetimes;

        return $this;
    }

    /**
     * Get sharetimes
     *
     * @return integer 
     */
    public function getSharetimes()
    {
        return $this->sharetimes;
    }

    /**
     * Set depict
     *
     * @param string $depict
     * @return PreHomeAlbum
     */
    public function setDepict($depict)
    {
        $this->depict = $depict;

        return $this;
    }

    /**
     * Get depict
     *
     * @return string 
     */
    public function getDepict()
    {
        return $this->depict;
    }
}
