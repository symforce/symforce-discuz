<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberVerify
 *
 * @ORM\Table(name="pre_common_member_verify", indexes={@ORM\Index(name="verify1", columns={"verify1"}), @ORM\Index(name="verify2", columns={"verify2"}), @ORM\Index(name="verify3", columns={"verify3"}), @ORM\Index(name="verify4", columns={"verify4"}), @ORM\Index(name="verify5", columns={"verify5"}), @ORM\Index(name="verify6", columns={"verify6"}), @ORM\Index(name="verify7", columns={"verify7"})})
 * @ORM\Entity
 */
class PreCommonMemberVerify
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify1", type="boolean", nullable=false)
     */
    private $verify1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify2", type="boolean", nullable=false)
     */
    private $verify2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify3", type="boolean", nullable=false)
     */
    private $verify3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify4", type="boolean", nullable=false)
     */
    private $verify4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify5", type="boolean", nullable=false)
     */
    private $verify5 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify6", type="boolean", nullable=false)
     */
    private $verify6 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verify7", type="boolean", nullable=false)
     */
    private $verify7 = '0';



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
     * Set verify1
     *
     * @param boolean $verify1
     * @return PreCommonMemberVerify
     */
    public function setVerify1($verify1)
    {
        $this->verify1 = $verify1;

        return $this;
    }

    /**
     * Get verify1
     *
     * @return boolean 
     */
    public function getVerify1()
    {
        return $this->verify1;
    }

    /**
     * Set verify2
     *
     * @param boolean $verify2
     * @return PreCommonMemberVerify
     */
    public function setVerify2($verify2)
    {
        $this->verify2 = $verify2;

        return $this;
    }

    /**
     * Get verify2
     *
     * @return boolean 
     */
    public function getVerify2()
    {
        return $this->verify2;
    }

    /**
     * Set verify3
     *
     * @param boolean $verify3
     * @return PreCommonMemberVerify
     */
    public function setVerify3($verify3)
    {
        $this->verify3 = $verify3;

        return $this;
    }

    /**
     * Get verify3
     *
     * @return boolean 
     */
    public function getVerify3()
    {
        return $this->verify3;
    }

    /**
     * Set verify4
     *
     * @param boolean $verify4
     * @return PreCommonMemberVerify
     */
    public function setVerify4($verify4)
    {
        $this->verify4 = $verify4;

        return $this;
    }

    /**
     * Get verify4
     *
     * @return boolean 
     */
    public function getVerify4()
    {
        return $this->verify4;
    }

    /**
     * Set verify5
     *
     * @param boolean $verify5
     * @return PreCommonMemberVerify
     */
    public function setVerify5($verify5)
    {
        $this->verify5 = $verify5;

        return $this;
    }

    /**
     * Get verify5
     *
     * @return boolean 
     */
    public function getVerify5()
    {
        return $this->verify5;
    }

    /**
     * Set verify6
     *
     * @param boolean $verify6
     * @return PreCommonMemberVerify
     */
    public function setVerify6($verify6)
    {
        $this->verify6 = $verify6;

        return $this;
    }

    /**
     * Get verify6
     *
     * @return boolean 
     */
    public function getVerify6()
    {
        return $this->verify6;
    }

    /**
     * Set verify7
     *
     * @param boolean $verify7
     * @return PreCommonMemberVerify
     */
    public function setVerify7($verify7)
    {
        $this->verify7 = $verify7;

        return $this;
    }

    /**
     * Get verify7
     *
     * @return boolean 
     */
    public function getVerify7()
    {
        return $this->verify7;
    }
}
