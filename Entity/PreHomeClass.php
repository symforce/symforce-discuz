<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeClass
 *
 * @ORM\Table(name="pre_home_class", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreHomeClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="classid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classid;

    /**
     * @var string
     *
     * @ORM\Column(name="classname", type="string", length=40, nullable=false)
     */
    private $classname = '';

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
     * Get classid
     *
     * @return integer 
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Set classname
     *
     * @param string $classname
     * @return PreHomeClass
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;

        return $this;
    }

    /**
     * Get classname
     *
     * @return string 
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeClass
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
     * @return PreHomeClass
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
