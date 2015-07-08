<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomePoke
 *
 * @ORM\Table(name="pre_home_poke", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"})})
 * @ORM\Entity
 */
class PreHomePoke
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
     * @ORM\Column(name="fromuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fromuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fromusername", type="string", length=15, nullable=false)
     */
    private $fromusername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="iconid", type="smallint", nullable=false)
     */
    private $iconid = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomePoke
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
     * Set fromuid
     *
     * @param integer $fromuid
     * @return PreHomePoke
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
     * Set fromusername
     *
     * @param string $fromusername
     * @return PreHomePoke
     */
    public function setFromusername($fromusername)
    {
        $this->fromusername = $fromusername;

        return $this;
    }

    /**
     * Get fromusername
     *
     * @return string 
     */
    public function getFromusername()
    {
        return $this->fromusername;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return PreHomePoke
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
     * @return PreHomePoke
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
     * Set iconid
     *
     * @param integer $iconid
     * @return PreHomePoke
     */
    public function setIconid($iconid)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return integer 
     */
    public function getIconid()
    {
        return $this->iconid;
    }
}
