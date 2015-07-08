<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumStatlog
 *
 * @ORM\Table(name="pre_forum_statlog")
 * @ORM\Entity
 */
class PreForumStatlog
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logdate", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $logdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value = '0';



    /**
     * Set logdate
     *
     * @param \DateTime $logdate
     * @return PreForumStatlog
     */
    public function setLogdate($logdate)
    {
        $this->logdate = $logdate;

        return $this;
    }

    /**
     * Get logdate
     *
     * @return \DateTime 
     */
    public function getLogdate()
    {
        return $this->logdate;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumStatlog
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return PreForumStatlog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return PreForumStatlog
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }
}
