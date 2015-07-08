<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterPmMessages8
 *
 * @ORM\Table(name="pre_ucenter_pm_messages_8", indexes={@ORM\Index(name="plid", columns={"plid", "delstatus", "dateline"}), @ORM\Index(name="dateline", columns={"plid", "dateline"})})
 * @ORM\Entity
 */
class PreUcenterPmMessages8
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pmid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pmid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="plid", type="integer", nullable=false)
     */
    private $plid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delstatus", type="boolean", nullable=false)
     */
    private $delstatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get pmid
     *
     * @return integer 
     */
    public function getPmid()
    {
        return $this->pmid;
    }

    /**
     * Set plid
     *
     * @param integer $plid
     * @return PreUcenterPmMessages8
     */
    public function setPlid($plid)
    {
        $this->plid = $plid;

        return $this;
    }

    /**
     * Get plid
     *
     * @return integer 
     */
    public function getPlid()
    {
        return $this->plid;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return PreUcenterPmMessages8
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreUcenterPmMessages8
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
     * Set delstatus
     *
     * @param boolean $delstatus
     * @return PreUcenterPmMessages8
     */
    public function setDelstatus($delstatus)
    {
        $this->delstatus = $delstatus;

        return $this;
    }

    /**
     * Get delstatus
     *
     * @return boolean 
     */
    public function getDelstatus()
    {
        return $this->delstatus;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreUcenterPmMessages8
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
