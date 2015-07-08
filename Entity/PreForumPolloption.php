<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumPolloption
 *
 * @ORM\Table(name="pre_forum_polloption", indexes={@ORM\Index(name="tid", columns={"tid", "displayorder"})})
 * @ORM\Entity
 */
class PreForumPolloption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="polloptionid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $polloptionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votes", type="integer", nullable=false)
     */
    private $votes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="polloption", type="string", length=80, nullable=false)
     */
    private $polloption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="voterids", type="text", nullable=false)
     */
    private $voterids;



    /**
     * Get polloptionid
     *
     * @return integer 
     */
    public function getPolloptionid()
    {
        return $this->polloptionid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumPolloption
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
     * Set votes
     *
     * @param integer $votes
     * @return PreForumPolloption
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumPolloption
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set polloption
     *
     * @param string $polloption
     * @return PreForumPolloption
     */
    public function setPolloption($polloption)
    {
        $this->polloption = $polloption;

        return $this;
    }

    /**
     * Get polloption
     *
     * @return string 
     */
    public function getPolloption()
    {
        return $this->polloption;
    }

    /**
     * Set voterids
     *
     * @param string $voterids
     * @return PreForumPolloption
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
