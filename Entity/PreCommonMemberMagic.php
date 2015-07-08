<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberMagic
 *
 * @ORM\Table(name="pre_common_member_magic")
 * @ORM\Entity
 */
class PreCommonMemberMagic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="magicid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $magicid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="smallint", nullable=false)
     */
    private $num = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberMagic
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
     * Set magicid
     *
     * @param integer $magicid
     * @return PreCommonMemberMagic
     */
    public function setMagicid($magicid)
    {
        $this->magicid = $magicid;

        return $this;
    }

    /**
     * Get magicid
     *
     * @return integer 
     */
    public function getMagicid()
    {
        return $this->magicid;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return PreCommonMemberMagic
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }
}
