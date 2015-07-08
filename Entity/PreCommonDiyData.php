<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonDiyData
 *
 * @ORM\Table(name="pre_common_diy_data")
 * @ORM\Entity
 */
class PreCommonDiyData
{
    /**
     * @var string
     *
     * @ORM\Column(name="targettplname", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $targettplname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tpldirectory", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tpldirectory = '';

    /**
     * @var string
     *
     * @ORM\Column(name="primaltplname", type="string", length=255, nullable=false)
     */
    private $primaltplname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="diycontent", type="text", nullable=false)
     */
    private $diycontent;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

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
     * Set targettplname
     *
     * @param string $targettplname
     * @return PreCommonDiyData
     */
    public function setTargettplname($targettplname)
    {
        $this->targettplname = $targettplname;

        return $this;
    }

    /**
     * Get targettplname
     *
     * @return string 
     */
    public function getTargettplname()
    {
        return $this->targettplname;
    }

    /**
     * Set tpldirectory
     *
     * @param string $tpldirectory
     * @return PreCommonDiyData
     */
    public function setTpldirectory($tpldirectory)
    {
        $this->tpldirectory = $tpldirectory;

        return $this;
    }

    /**
     * Get tpldirectory
     *
     * @return string 
     */
    public function getTpldirectory()
    {
        return $this->tpldirectory;
    }

    /**
     * Set primaltplname
     *
     * @param string $primaltplname
     * @return PreCommonDiyData
     */
    public function setPrimaltplname($primaltplname)
    {
        $this->primaltplname = $primaltplname;

        return $this;
    }

    /**
     * Get primaltplname
     *
     * @return string 
     */
    public function getPrimaltplname()
    {
        return $this->primaltplname;
    }

    /**
     * Set diycontent
     *
     * @param string $diycontent
     * @return PreCommonDiyData
     */
    public function setDiycontent($diycontent)
    {
        $this->diycontent = $diycontent;

        return $this;
    }

    /**
     * Get diycontent
     *
     * @return string 
     */
    public function getDiycontent()
    {
        return $this->diycontent;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonDiyData
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonDiyData
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
     * @return PreCommonDiyData
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
     * @return PreCommonDiyData
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
