<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlockPic
 *
 * @ORM\Table(name="pre_common_block_pic", indexes={@ORM\Index(name="bid", columns={"bid", "itemid"})})
 * @ORM\Entity
 */
class PreCommonBlockPic
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
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     */
    private $itemid = '0';

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
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';



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
     * Set bid
     *
     * @param integer $bid
     * @return PreCommonBlockPic
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return PreCommonBlockPic
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return PreCommonBlockPic
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
     * @return PreCommonBlockPic
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
     * Set type
     *
     * @param boolean $type
     * @return PreCommonBlockPic
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }
}
