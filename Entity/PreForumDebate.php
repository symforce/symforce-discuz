<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumDebate
 *
 * @ORM\Table(name="pre_forum_debate", indexes={@ORM\Index(name="uid", columns={"uid", "starttime"})})
 * @ORM\Entity
 */
class PreForumDebate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttime", type="integer", nullable=false)
     */
    private $starttime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="endtime", type="integer", nullable=false)
     */
    private $endtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="affirmdebaters", type="integer", nullable=false)
     */
    private $affirmdebaters = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="negadebaters", type="integer", nullable=false)
     */
    private $negadebaters = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="affirmvotes", type="integer", nullable=false)
     */
    private $affirmvotes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="negavotes", type="integer", nullable=false)
     */
    private $negavotes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="umpire", type="string", length=15, nullable=false)
     */
    private $umpire = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="winner", type="boolean", nullable=false)
     */
    private $winner = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bestdebater", type="string", length=50, nullable=false)
     */
    private $bestdebater = '';

    /**
     * @var string
     *
     * @ORM\Column(name="affirmpoint", type="text", nullable=false)
     */
    private $affirmpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="negapoint", type="text", nullable=false)
     */
    private $negapoint;

    /**
     * @var string
     *
     * @ORM\Column(name="umpirepoint", type="text", nullable=false)
     */
    private $umpirepoint;

    /**
     * @var string
     *
     * @ORM\Column(name="affirmvoterids", type="text", nullable=false)
     */
    private $affirmvoterids;

    /**
     * @var string
     *
     * @ORM\Column(name="negavoterids", type="text", nullable=false)
     */
    private $negavoterids;

    /**
     * @var integer
     *
     * @ORM\Column(name="affirmreplies", type="integer", nullable=false)
     */
    private $affirmreplies;

    /**
     * @var integer
     *
     * @ORM\Column(name="negareplies", type="integer", nullable=false)
     */
    private $negareplies;



    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumDebate
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
     * Set starttime
     *
     * @param integer $starttime
     * @return PreForumDebate
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param integer $endtime
     * @return PreForumDebate
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return integer 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set affirmdebaters
     *
     * @param integer $affirmdebaters
     * @return PreForumDebate
     */
    public function setAffirmdebaters($affirmdebaters)
    {
        $this->affirmdebaters = $affirmdebaters;

        return $this;
    }

    /**
     * Get affirmdebaters
     *
     * @return integer 
     */
    public function getAffirmdebaters()
    {
        return $this->affirmdebaters;
    }

    /**
     * Set negadebaters
     *
     * @param integer $negadebaters
     * @return PreForumDebate
     */
    public function setNegadebaters($negadebaters)
    {
        $this->negadebaters = $negadebaters;

        return $this;
    }

    /**
     * Get negadebaters
     *
     * @return integer 
     */
    public function getNegadebaters()
    {
        return $this->negadebaters;
    }

    /**
     * Set affirmvotes
     *
     * @param integer $affirmvotes
     * @return PreForumDebate
     */
    public function setAffirmvotes($affirmvotes)
    {
        $this->affirmvotes = $affirmvotes;

        return $this;
    }

    /**
     * Get affirmvotes
     *
     * @return integer 
     */
    public function getAffirmvotes()
    {
        return $this->affirmvotes;
    }

    /**
     * Set negavotes
     *
     * @param integer $negavotes
     * @return PreForumDebate
     */
    public function setNegavotes($negavotes)
    {
        $this->negavotes = $negavotes;

        return $this;
    }

    /**
     * Get negavotes
     *
     * @return integer 
     */
    public function getNegavotes()
    {
        return $this->negavotes;
    }

    /**
     * Set umpire
     *
     * @param string $umpire
     * @return PreForumDebate
     */
    public function setUmpire($umpire)
    {
        $this->umpire = $umpire;

        return $this;
    }

    /**
     * Get umpire
     *
     * @return string 
     */
    public function getUmpire()
    {
        return $this->umpire;
    }

    /**
     * Set winner
     *
     * @param boolean $winner
     * @return PreForumDebate
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return boolean 
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set bestdebater
     *
     * @param string $bestdebater
     * @return PreForumDebate
     */
    public function setBestdebater($bestdebater)
    {
        $this->bestdebater = $bestdebater;

        return $this;
    }

    /**
     * Get bestdebater
     *
     * @return string 
     */
    public function getBestdebater()
    {
        return $this->bestdebater;
    }

    /**
     * Set affirmpoint
     *
     * @param string $affirmpoint
     * @return PreForumDebate
     */
    public function setAffirmpoint($affirmpoint)
    {
        $this->affirmpoint = $affirmpoint;

        return $this;
    }

    /**
     * Get affirmpoint
     *
     * @return string 
     */
    public function getAffirmpoint()
    {
        return $this->affirmpoint;
    }

    /**
     * Set negapoint
     *
     * @param string $negapoint
     * @return PreForumDebate
     */
    public function setNegapoint($negapoint)
    {
        $this->negapoint = $negapoint;

        return $this;
    }

    /**
     * Get negapoint
     *
     * @return string 
     */
    public function getNegapoint()
    {
        return $this->negapoint;
    }

    /**
     * Set umpirepoint
     *
     * @param string $umpirepoint
     * @return PreForumDebate
     */
    public function setUmpirepoint($umpirepoint)
    {
        $this->umpirepoint = $umpirepoint;

        return $this;
    }

    /**
     * Get umpirepoint
     *
     * @return string 
     */
    public function getUmpirepoint()
    {
        return $this->umpirepoint;
    }

    /**
     * Set affirmvoterids
     *
     * @param string $affirmvoterids
     * @return PreForumDebate
     */
    public function setAffirmvoterids($affirmvoterids)
    {
        $this->affirmvoterids = $affirmvoterids;

        return $this;
    }

    /**
     * Get affirmvoterids
     *
     * @return string 
     */
    public function getAffirmvoterids()
    {
        return $this->affirmvoterids;
    }

    /**
     * Set negavoterids
     *
     * @param string $negavoterids
     * @return PreForumDebate
     */
    public function setNegavoterids($negavoterids)
    {
        $this->negavoterids = $negavoterids;

        return $this;
    }

    /**
     * Get negavoterids
     *
     * @return string 
     */
    public function getNegavoterids()
    {
        return $this->negavoterids;
    }

    /**
     * Set affirmreplies
     *
     * @param integer $affirmreplies
     * @return PreForumDebate
     */
    public function setAffirmreplies($affirmreplies)
    {
        $this->affirmreplies = $affirmreplies;

        return $this;
    }

    /**
     * Get affirmreplies
     *
     * @return integer 
     */
    public function getAffirmreplies()
    {
        return $this->affirmreplies;
    }

    /**
     * Set negareplies
     *
     * @param integer $negareplies
     * @return PreForumDebate
     */
    public function setNegareplies($negareplies)
    {
        $this->negareplies = $negareplies;

        return $this;
    }

    /**
     * Get negareplies
     *
     * @return integer 
     */
    public function getNegareplies()
    {
        return $this->negareplies;
    }
}
