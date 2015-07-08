<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonSearchindex
 *
 * @ORM\Table(name="pre_common_searchindex", indexes={@ORM\Index(name="srchmod", columns={"srchmod"})})
 * @ORM\Entity
 */
class PreCommonSearchindex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="searchid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="srchmod", type="boolean", nullable=false)
     */
    private $srchmod;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="searchstring", type="text", nullable=false)
     */
    private $searchstring;

    /**
     * @var string
     *
     * @ORM\Column(name="useip", type="string", length=15, nullable=false)
     */
    private $useip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="threadsortid", type="smallint", nullable=false)
     */
    private $threadsortid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="smallint", nullable=false)
     */
    private $num = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ids", type="text", nullable=false)
     */
    private $ids;



    /**
     * Get searchid
     *
     * @return integer 
     */
    public function getSearchid()
    {
        return $this->searchid;
    }

    /**
     * Set srchmod
     *
     * @param boolean $srchmod
     * @return PreCommonSearchindex
     */
    public function setSrchmod($srchmod)
    {
        $this->srchmod = $srchmod;

        return $this;
    }

    /**
     * Get srchmod
     *
     * @return boolean 
     */
    public function getSrchmod()
    {
        return $this->srchmod;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return PreCommonSearchindex
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set searchstring
     *
     * @param string $searchstring
     * @return PreCommonSearchindex
     */
    public function setSearchstring($searchstring)
    {
        $this->searchstring = $searchstring;

        return $this;
    }

    /**
     * Get searchstring
     *
     * @return string 
     */
    public function getSearchstring()
    {
        return $this->searchstring;
    }

    /**
     * Set useip
     *
     * @param string $useip
     * @return PreCommonSearchindex
     */
    public function setUseip($useip)
    {
        $this->useip = $useip;

        return $this;
    }

    /**
     * Get useip
     *
     * @return string 
     */
    public function getUseip()
    {
        return $this->useip;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonSearchindex
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonSearchindex
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
     * Set expiration
     *
     * @param integer $expiration
     * @return PreCommonSearchindex
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set threadsortid
     *
     * @param integer $threadsortid
     * @return PreCommonSearchindex
     */
    public function setThreadsortid($threadsortid)
    {
        $this->threadsortid = $threadsortid;

        return $this;
    }

    /**
     * Get threadsortid
     *
     * @return integer 
     */
    public function getThreadsortid()
    {
        return $this->threadsortid;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return PreCommonSearchindex
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set ids
     *
     * @param string $ids
     * @return PreCommonSearchindex
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Get ids
     *
     * @return string 
     */
    public function getIds()
    {
        return $this->ids;
    }
}
