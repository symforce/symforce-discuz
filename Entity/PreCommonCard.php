<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCard
 *
 * @ORM\Table(name="pre_common_card", indexes={@ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreCommonCard
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="smallint", nullable=false)
     */
    private $typeid = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maketype", type="boolean", nullable=false)
     */
    private $maketype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="makeruid", type="integer", nullable=false)
     */
    private $makeruid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="extcreditskey", type="boolean", nullable=false)
     */
    private $extcreditskey = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcreditsval", type="integer", nullable=false)
     */
    private $extcreditsval = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cleardateline", type="integer", nullable=false)
     */
    private $cleardateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="useddateline", type="integer", nullable=false)
     */
    private $useddateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     * @return PreCommonCard
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set maketype
     *
     * @param boolean $maketype
     * @return PreCommonCard
     */
    public function setMaketype($maketype)
    {
        $this->maketype = $maketype;

        return $this;
    }

    /**
     * Get maketype
     *
     * @return boolean 
     */
    public function getMaketype()
    {
        return $this->maketype;
    }

    /**
     * Set makeruid
     *
     * @param integer $makeruid
     * @return PreCommonCard
     */
    public function setMakeruid($makeruid)
    {
        $this->makeruid = $makeruid;

        return $this;
    }

    /**
     * Get makeruid
     *
     * @return integer 
     */
    public function getMakeruid()
    {
        return $this->makeruid;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return PreCommonCard
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set extcreditskey
     *
     * @param boolean $extcreditskey
     * @return PreCommonCard
     */
    public function setExtcreditskey($extcreditskey)
    {
        $this->extcreditskey = $extcreditskey;

        return $this;
    }

    /**
     * Get extcreditskey
     *
     * @return boolean 
     */
    public function getExtcreditskey()
    {
        return $this->extcreditskey;
    }

    /**
     * Set extcreditsval
     *
     * @param integer $extcreditsval
     * @return PreCommonCard
     */
    public function setExtcreditsval($extcreditsval)
    {
        $this->extcreditsval = $extcreditsval;

        return $this;
    }

    /**
     * Get extcreditsval
     *
     * @return integer 
     */
    public function getExtcreditsval()
    {
        return $this->extcreditsval;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonCard
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonCard
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
     * Set cleardateline
     *
     * @param integer $cleardateline
     * @return PreCommonCard
     */
    public function setCleardateline($cleardateline)
    {
        $this->cleardateline = $cleardateline;

        return $this;
    }

    /**
     * Get cleardateline
     *
     * @return integer 
     */
    public function getCleardateline()
    {
        return $this->cleardateline;
    }

    /**
     * Set useddateline
     *
     * @param integer $useddateline
     * @return PreCommonCard
     */
    public function setUseddateline($useddateline)
    {
        $this->useddateline = $useddateline;

        return $this;
    }

    /**
     * Get useddateline
     *
     * @return integer 
     */
    public function getUseddateline()
    {
        return $this->useddateline;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonCard
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
}
