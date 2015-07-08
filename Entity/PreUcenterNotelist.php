<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterNotelist
 *
 * @ORM\Table(name="pre_ucenter_notelist", indexes={@ORM\Index(name="closed", columns={"closed", "pri", "noteid"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreUcenterNotelist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="noteid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noteid;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=32, nullable=false)
     */
    private $operation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="closed", type="boolean", nullable=false)
     */
    private $closed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalnum", type="smallint", nullable=false)
     */
    private $totalnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="succeednum", type="smallint", nullable=false)
     */
    private $succeednum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="getdata", type="text", nullable=false)
     */
    private $getdata;

    /**
     * @var string
     *
     * @ORM\Column(name="postdata", type="text", nullable=false)
     */
    private $postdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pri", type="boolean", nullable=false)
     */
    private $pri = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="app1", type="boolean", nullable=false)
     */
    private $app1;



    /**
     * Get noteid
     *
     * @return integer 
     */
    public function getNoteid()
    {
        return $this->noteid;
    }

    /**
     * Set operation
     *
     * @param string $operation
     * @return PreUcenterNotelist
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string 
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set closed
     *
     * @param boolean $closed
     * @return PreUcenterNotelist
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set totalnum
     *
     * @param integer $totalnum
     * @return PreUcenterNotelist
     */
    public function setTotalnum($totalnum)
    {
        $this->totalnum = $totalnum;

        return $this;
    }

    /**
     * Get totalnum
     *
     * @return integer 
     */
    public function getTotalnum()
    {
        return $this->totalnum;
    }

    /**
     * Set succeednum
     *
     * @param integer $succeednum
     * @return PreUcenterNotelist
     */
    public function setSucceednum($succeednum)
    {
        $this->succeednum = $succeednum;

        return $this;
    }

    /**
     * Get succeednum
     *
     * @return integer 
     */
    public function getSucceednum()
    {
        return $this->succeednum;
    }

    /**
     * Set getdata
     *
     * @param string $getdata
     * @return PreUcenterNotelist
     */
    public function setGetdata($getdata)
    {
        $this->getdata = $getdata;

        return $this;
    }

    /**
     * Get getdata
     *
     * @return string 
     */
    public function getGetdata()
    {
        return $this->getdata;
    }

    /**
     * Set postdata
     *
     * @param string $postdata
     * @return PreUcenterNotelist
     */
    public function setPostdata($postdata)
    {
        $this->postdata = $postdata;

        return $this;
    }

    /**
     * Get postdata
     *
     * @return string 
     */
    public function getPostdata()
    {
        return $this->postdata;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreUcenterNotelist
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
     * Set pri
     *
     * @param boolean $pri
     * @return PreUcenterNotelist
     */
    public function setPri($pri)
    {
        $this->pri = $pri;

        return $this;
    }

    /**
     * Get pri
     *
     * @return boolean 
     */
    public function getPri()
    {
        return $this->pri;
    }

    /**
     * Set app1
     *
     * @param boolean $app1
     * @return PreUcenterNotelist
     */
    public function setApp1($app1)
    {
        $this->app1 = $app1;

        return $this;
    }

    /**
     * Get app1
     *
     * @return boolean 
     */
    public function getApp1()
    {
        return $this->app1;
    }
}
