<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumActivity
 *
 * @ORM\Table(name="pre_forum_activity", indexes={@ORM\Index(name="uid", columns={"uid", "starttimefrom"}), @ORM\Index(name="starttimefrom", columns={"starttimefrom"}), @ORM\Index(name="expiration", columns={"expiration"}), @ORM\Index(name="applynumber", columns={"applynumber"})})
 * @ORM\Entity
 */
class PreForumActivity
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
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=false)
     */
    private $cost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttimefrom", type="integer", nullable=false)
     */
    private $starttimefrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttimeto", type="integer", nullable=false)
     */
    private $starttimeto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=false)
     */
    private $place = '';

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=false)
     */
    private $class = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="smallint", nullable=false)
     */
    private $number = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="applynumber", type="smallint", nullable=false)
     */
    private $applynumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufield", type="text", nullable=false)
     */
    private $ufield;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="smallint", nullable=false)
     */
    private $credit = '0';



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
     * @return PreForumActivity
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
     * Set aid
     *
     * @param integer $aid
     * @return PreForumActivity
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return PreForumActivity
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set starttimefrom
     *
     * @param integer $starttimefrom
     * @return PreForumActivity
     */
    public function setStarttimefrom($starttimefrom)
    {
        $this->starttimefrom = $starttimefrom;

        return $this;
    }

    /**
     * Get starttimefrom
     *
     * @return integer 
     */
    public function getStarttimefrom()
    {
        return $this->starttimefrom;
    }

    /**
     * Set starttimeto
     *
     * @param integer $starttimeto
     * @return PreForumActivity
     */
    public function setStarttimeto($starttimeto)
    {
        $this->starttimeto = $starttimeto;

        return $this;
    }

    /**
     * Get starttimeto
     *
     * @return integer 
     */
    public function getStarttimeto()
    {
        return $this->starttimeto;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return PreForumActivity
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return PreForumActivity
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return PreForumActivity
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return PreForumActivity
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set applynumber
     *
     * @param integer $applynumber
     * @return PreForumActivity
     */
    public function setApplynumber($applynumber)
    {
        $this->applynumber = $applynumber;

        return $this;
    }

    /**
     * Get applynumber
     *
     * @return integer 
     */
    public function getApplynumber()
    {
        return $this->applynumber;
    }

    /**
     * Set expiration
     *
     * @param integer $expiration
     * @return PreForumActivity
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set ufield
     *
     * @param string $ufield
     * @return PreForumActivity
     */
    public function setUfield($ufield)
    {
        $this->ufield = $ufield;

        return $this;
    }

    /**
     * Get ufield
     *
     * @return string 
     */
    public function getUfield()
    {
        return $this->ufield;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return PreForumActivity
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }
}
