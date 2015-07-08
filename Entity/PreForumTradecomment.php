<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumTradecomment
 *
 * @ORM\Table(name="pre_forum_tradecomment", indexes={@ORM\Index(name="raterid", columns={"raterid", "type", "dateline"}), @ORM\Index(name="rateeid", columns={"rateeid", "type", "dateline"}), @ORM\Index(name="orderid", columns={"orderid"})})
 * @ORM\Entity
 */
class PreForumTradecomment
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
     * @ORM\Column(name="orderid", type="string", length=32, nullable=false)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="raterid", type="integer", nullable=false)
     */
    private $raterid;

    /**
     * @var string
     *
     * @ORM\Column(name="rater", type="string", length=15, nullable=false)
     */
    private $rater;

    /**
     * @var integer
     *
     * @ORM\Column(name="rateeid", type="integer", nullable=false)
     */
    private $rateeid;

    /**
     * @var string
     *
     * @ORM\Column(name="ratee", type="string", length=15, nullable=false)
     */
    private $ratee;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=200, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="explanation", type="string", length=200, nullable=false)
     */
    private $explanation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="score", type="boolean", nullable=false)
     */
    private $score;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;



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
     * Set orderid
     *
     * @param string $orderid
     * @return PreForumTradecomment
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return string 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumTradecomment
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

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
     * Set type
     *
     * @param boolean $type
     * @return PreForumTradecomment
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
     * Set raterid
     *
     * @param integer $raterid
     * @return PreForumTradecomment
     */
    public function setRaterid($raterid)
    {
        $this->raterid = $raterid;

        return $this;
    }

    /**
     * Get raterid
     *
     * @return integer 
     */
    public function getRaterid()
    {
        return $this->raterid;
    }

    /**
     * Set rater
     *
     * @param string $rater
     * @return PreForumTradecomment
     */
    public function setRater($rater)
    {
        $this->rater = $rater;

        return $this;
    }

    /**
     * Get rater
     *
     * @return string 
     */
    public function getRater()
    {
        return $this->rater;
    }

    /**
     * Set rateeid
     *
     * @param integer $rateeid
     * @return PreForumTradecomment
     */
    public function setRateeid($rateeid)
    {
        $this->rateeid = $rateeid;

        return $this;
    }

    /**
     * Get rateeid
     *
     * @return integer 
     */
    public function getRateeid()
    {
        return $this->rateeid;
    }

    /**
     * Set ratee
     *
     * @param string $ratee
     * @return PreForumTradecomment
     */
    public function setRatee($ratee)
    {
        $this->ratee = $ratee;

        return $this;
    }

    /**
     * Get ratee
     *
     * @return string 
     */
    public function getRatee()
    {
        return $this->ratee;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreForumTradecomment
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set explanation
     *
     * @param string $explanation
     * @return PreForumTradecomment
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Get explanation
     *
     * @return string 
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Set score
     *
     * @param boolean $score
     * @return PreForumTradecomment
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return boolean 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumTradecomment
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
