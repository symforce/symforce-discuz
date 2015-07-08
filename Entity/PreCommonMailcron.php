<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMailcron
 *
 * @ORM\Table(name="pre_common_mailcron", indexes={@ORM\Index(name="sendtime", columns={"sendtime"})})
 * @ORM\Entity
 */
class PreCommonMailcron
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="touid", type="integer", nullable=false)
     */
    private $touid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sendtime", type="integer", nullable=false)
     */
    private $sendtime = '0';



    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set touid
     *
     * @param integer $touid
     * @return PreCommonMailcron
     */
    public function setTouid($touid)
    {
        $this->touid = $touid;

        return $this;
    }

    /**
     * Get touid
     *
     * @return integer 
     */
    public function getTouid()
    {
        return $this->touid;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return PreCommonMailcron
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sendtime
     *
     * @param integer $sendtime
     * @return PreCommonMailcron
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer 
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }
}
