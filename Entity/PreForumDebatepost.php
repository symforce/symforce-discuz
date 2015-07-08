<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumDebatepost
 *
 * @ORM\Table(name="pre_forum_debatepost", indexes={@ORM\Index(name="pid", columns={"pid", "stand"}), @ORM\Index(name="tid", columns={"tid", "uid"})})
 * @ORM\Entity
 */
class PreForumDebatepost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stand", type="boolean", nullable=false)
     */
    private $stand = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
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
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="voters", type="integer", nullable=false)
     */
    private $voters = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="voterids", type="text", nullable=false)
     */
    private $voterids;



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
     * Set stand
     *
     * @param boolean $stand
     * @return PreForumDebatepost
     */
    public function setStand($stand)
    {
        $this->stand = $stand;

        return $this;
    }

    /**
     * Get stand
     *
     * @return boolean 
     */
    public function getStand()
    {
        return $this->stand;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumDebatepost
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

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
     * @return PreForumDebatepost
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
     * @return PreForumDebatepost
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
     * Set voters
     *
     * @param integer $voters
     * @return PreForumDebatepost
     */
    public function setVoters($voters)
    {
        $this->voters = $voters;

        return $this;
    }

    /**
     * Get voters
     *
     * @return integer 
     */
    public function getVoters()
    {
        return $this->voters;
    }

    /**
     * Set voterids
     *
     * @param string $voterids
     * @return PreForumDebatepost
     */
    public function setVoterids($voterids)
    {
        $this->voterids = $voterids;

        return $this;
    }

    /**
     * Get voterids
     *
     * @return string 
     */
    public function getVoterids()
    {
        return $this->voterids;
    }
}
