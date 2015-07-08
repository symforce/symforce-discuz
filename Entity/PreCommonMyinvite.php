<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMyinvite
 *
 * @ORM\Table(name="pre_common_myinvite", indexes={@ORM\Index(name="hash", columns={"hash"}), @ORM\Index(name="uid", columns={"touid", "dateline"})})
 * @ORM\Entity
 */
class PreCommonMyinvite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typename", type="string", length=100, nullable=false)
     */
    private $typename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="integer", nullable=false)
     */
    private $appid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fromuid", type="integer", nullable=false)
     */
    private $fromuid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="touid", type="integer", nullable=false)
     */
    private $touid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="myml", type="text", nullable=false)
     */
    private $myml;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hash", type="integer", nullable=false)
     */
    private $hash = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typename
     *
     * @param string $typename
     * @return PreCommonMyinvite
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string 
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set appid
     *
     * @param integer $appid
     * @return PreCommonMyinvite
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return PreCommonMyinvite
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

    /**
     * Set fromuid
     *
     * @param integer $fromuid
     * @return PreCommonMyinvite
     */
    public function setFromuid($fromuid)
    {
        $this->fromuid = $fromuid;

        return $this;
    }

    /**
     * Get fromuid
     *
     * @return integer 
     */
    public function getFromuid()
    {
        return $this->fromuid;
    }

    /**
     * Set touid
     *
     * @param integer $touid
     * @return PreCommonMyinvite
     */
    public function setTouid($touid)
    {
        $this->touid = $touid;

        return $this;
    }

    /**
     * Get touid
     *
     * @return integer 
     */
    public function getTouid()
    {
        return $this->touid;
    }

    /**
     * Set myml
     *
     * @param string $myml
     * @return PreCommonMyinvite
     */
    public function setMyml($myml)
    {
        $this->myml = $myml;

        return $this;
    }

    /**
     * Get myml
     *
     * @return string 
     */
    public function getMyml()
    {
        return $this->myml;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonMyinvite
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
     * Set hash
     *
     * @param integer $hash
     * @return PreCommonMyinvite
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return integer 
     */
    public function getHash()
    {
        return $this->hash;
    }
}
