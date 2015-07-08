<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomePic
 *
 * @ORM\Table(name="pre_home_pic", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="albumid", columns={"albumid", "dateline"})})
 * @ORM\Entity
 */
class PreHomePic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="picid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $picid;

    /**
     * @var integer
     *
     * @ORM\Column(name="albumid", type="integer", nullable=false)
     */
    private $albumid = '0';

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
     * @var string
     *
     * @ORM\Column(name="postip", type="string", length=255, nullable=false)
     */
    private $postip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="thumb", type="boolean", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="remote", type="boolean", nullable=false)
     */
    private $remote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hot", type="integer", nullable=false)
     */
    private $hot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharetimes", type="integer", nullable=false)
     */
    private $sharetimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click1", type="smallint", nullable=false)
     */
    private $click1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click2", type="smallint", nullable=false)
     */
    private $click2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click3", type="smallint", nullable=false)
     */
    private $click3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click4", type="smallint", nullable=false)
     */
    private $click4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click5", type="smallint", nullable=false)
     */
    private $click5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click6", type="smallint", nullable=false)
     */
    private $click6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click7", type="smallint", nullable=false)
     */
    private $click7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click8", type="smallint", nullable=false)
     */
    private $click8 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="magicframe", type="boolean", nullable=false)
     */
    private $magicframe = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';



    /**
     * Get picid
     *
     * @return integer 
     */
    public function getPicid()
    {
        return $this->picid;
    }

    /**
     * Set albumid
     *
     * @param integer $albumid
     * @return PreHomePic
     */
    public function setAlbumid($albumid)
    {
        $this->albumid = $albumid;

        return $this;
    }

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
     * Set uid
     *
     * @param integer $uid
     * @return PreHomePic
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
     * @return PreHomePic
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
     * @return PreHomePic
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
     * Set postip
     *
     * @param string $postip
     * @return PreHomePic
     */
    public function setPostip($postip)
    {
        $this->postip = $postip;

        return $this;
    }

    /**
     * Get postip
     *
     * @return string 
     */
    public function getPostip()
    {
        return $this->postip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreHomePic
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return PreHomePic
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreHomePic
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreHomePic
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return PreHomePic
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     * @return PreHomePic
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string 
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set thumb
     *
     * @param boolean $thumb
     * @return PreHomePic
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return boolean 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set remote
     *
     * @param boolean $remote
     * @return PreHomePic
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * Get remote
     *
     * @return boolean 
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * Set hot
     *
     * @param integer $hot
     * @return PreHomePic
     */
    public function setHot($hot)
    {
        $this->hot = $hot;

        return $this;
    }

    /**
     * Get hot
     *
     * @return integer 
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * Set sharetimes
     *
     * @param integer $sharetimes
     * @return PreHomePic
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
     * Set click1
     *
     * @param integer $click1
     * @return PreHomePic
     */
    public function setClick1($click1)
    {
        $this->click1 = $click1;

        return $this;
    }

    /**
     * Get click1
     *
     * @return integer 
     */
    public function getClick1()
    {
        return $this->click1;
    }

    /**
     * Set click2
     *
     * @param integer $click2
     * @return PreHomePic
     */
    public function setClick2($click2)
    {
        $this->click2 = $click2;

        return $this;
    }

    /**
     * Get click2
     *
     * @return integer 
     */
    public function getClick2()
    {
        return $this->click2;
    }

    /**
     * Set click3
     *
     * @param integer $click3
     * @return PreHomePic
     */
    public function setClick3($click3)
    {
        $this->click3 = $click3;

        return $this;
    }

    /**
     * Get click3
     *
     * @return integer 
     */
    public function getClick3()
    {
        return $this->click3;
    }

    /**
     * Set click4
     *
     * @param integer $click4
     * @return PreHomePic
     */
    public function setClick4($click4)
    {
        $this->click4 = $click4;

        return $this;
    }

    /**
     * Get click4
     *
     * @return integer 
     */
    public function getClick4()
    {
        return $this->click4;
    }

    /**
     * Set click5
     *
     * @param integer $click5
     * @return PreHomePic
     */
    public function setClick5($click5)
    {
        $this->click5 = $click5;

        return $this;
    }

    /**
     * Get click5
     *
     * @return integer 
     */
    public function getClick5()
    {
        return $this->click5;
    }

    /**
     * Set click6
     *
     * @param integer $click6
     * @return PreHomePic
     */
    public function setClick6($click6)
    {
        $this->click6 = $click6;

        return $this;
    }

    /**
     * Get click6
     *
     * @return integer 
     */
    public function getClick6()
    {
        return $this->click6;
    }

    /**
     * Set click7
     *
     * @param integer $click7
     * @return PreHomePic
     */
    public function setClick7($click7)
    {
        $this->click7 = $click7;

        return $this;
    }

    /**
     * Get click7
     *
     * @return integer 
     */
    public function getClick7()
    {
        return $this->click7;
    }

    /**
     * Set click8
     *
     * @param integer $click8
     * @return PreHomePic
     */
    public function setClick8($click8)
    {
        $this->click8 = $click8;

        return $this;
    }

    /**
     * Get click8
     *
     * @return integer 
     */
    public function getClick8()
    {
        return $this->click8;
    }

    /**
     * Set magicframe
     *
     * @param boolean $magicframe
     * @return PreHomePic
     */
    public function setMagicframe($magicframe)
    {
        $this->magicframe = $magicframe;

        return $this;
    }

    /**
     * Get magicframe
     *
     * @return boolean 
     */
    public function getMagicframe()
    {
        return $this->magicframe;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreHomePic
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
}
