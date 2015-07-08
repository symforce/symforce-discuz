<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomePokearchive
 *
 * @ORM\Table(name="pre_home_pokearchive", indexes={@ORM\Index(name="pokeuid", columns={"pokeuid"})})
 * @ORM\Entity
 */
class PreHomePokearchive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pokeuid", type="integer", nullable=false)
     */
    private $pokeuid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fromuid", type="integer", nullable=false)
     */
    private $fromuid = '0';

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
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set pokeuid
     *
     * @param integer $pokeuid
     * @return PreHomePokearchive
     */
    public function setPokeuid($pokeuid)
    {
        $this->pokeuid = $pokeuid;

        return $this;
    }

    /**
     * Get pokeuid
     *
     * @return integer 
     */
    public function getPokeuid()
    {
        return $this->pokeuid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomePokearchive
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
     * @return PreHomePokearchive
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
     * Set note
     *
     * @param string $note
     * @return PreHomePokearchive
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
     * @return PreHomePokearchive
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
     * @return PreHomePokearchive
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
