<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonSeccheck
 *
 * @ORM\Table(name="pre_common_seccheck", indexes={@ORM\Index(name="dateline", columns={"dateline"}), @ORM\Index(name="succeed", columns={"succeed"}), @ORM\Index(name="verified", columns={"verified"})})
 * @ORM\Entity
 */
class PreCommonSeccheck
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ssid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ssid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=6, nullable=false)
     */
    private $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="succeed", type="boolean", nullable=false)
     */
    private $succeed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verified", type="boolean", nullable=false)
     */
    private $verified;



    /**
     * Get ssid
     *
     * @return integer 
     */
    public function getSsid()
    {
        return $this->ssid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonSeccheck
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
     * Set code
     *
     * @param string $code
     * @return PreCommonSeccheck
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set succeed
     *
     * @param boolean $succeed
     * @return PreCommonSeccheck
     */
    public function setSucceed($succeed)
    {
        $this->succeed = $succeed;

        return $this;
    }

    /**
     * Get succeed
     *
     * @return boolean 
     */
    public function getSucceed()
    {
        return $this->succeed;
    }

    /**
     * Set verified
     *
     * @param boolean $verified
     * @return PreCommonSeccheck
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return boolean 
     */
    public function getVerified()
    {
        return $this->verified;
    }
}
