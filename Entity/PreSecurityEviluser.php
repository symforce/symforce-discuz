<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreSecurityEviluser
 *
 * @ORM\Table(name="pre_security_eviluser", indexes={@ORM\Index(name="operateresult", columns={"operateresult", "createtime"})})
 * @ORM\Entity
 */
class PreSecurityEviluser
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
     * @var integer
     *
     * @ORM\Column(name="evilcount", type="integer", nullable=false)
     */
    private $evilcount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="eviltype", type="integer", nullable=false)
     */
    private $eviltype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="operateresult", type="boolean", nullable=false)
     */
    private $operateresult = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isreported", type="boolean", nullable=false)
     */
    private $isreported = '0';



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
     * Set evilcount
     *
     * @param integer $evilcount
     * @return PreSecurityEviluser
     */
    public function setEvilcount($evilcount)
    {
        $this->evilcount = $evilcount;

        return $this;
    }

    /**
     * Get evilcount
     *
     * @return integer 
     */
    public function getEvilcount()
    {
        return $this->evilcount;
    }

    /**
     * Set eviltype
     *
     * @param integer $eviltype
     * @return PreSecurityEviluser
     */
    public function setEviltype($eviltype)
    {
        $this->eviltype = $eviltype;

        return $this;
    }

    /**
     * Get eviltype
     *
     * @return integer 
     */
    public function getEviltype()
    {
        return $this->eviltype;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     * @return PreSecurityEviluser
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer 
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set operateresult
     *
     * @param boolean $operateresult
     * @return PreSecurityEviluser
     */
    public function setOperateresult($operateresult)
    {
        $this->operateresult = $operateresult;

        return $this;
    }

    /**
     * Get operateresult
     *
     * @return boolean 
     */
    public function getOperateresult()
    {
        return $this->operateresult;
    }

    /**
     * Set isreported
     *
     * @param boolean $isreported
     * @return PreSecurityEviluser
     */
    public function setIsreported($isreported)
    {
        $this->isreported = $isreported;

        return $this;
    }

    /**
     * Get isreported
     *
     * @return boolean 
     */
    public function getIsreported()
    {
        return $this->isreported;
    }
}
