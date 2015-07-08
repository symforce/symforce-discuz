<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCardLog
 *
 * @ORM\Table(name="pre_common_card_log", indexes={@ORM\Index(name="dateline", columns={"dateline"}), @ORM\Index(name="operation_dateline", columns={"operation", "dateline"})})
 * @ORM\Entity
 */
class PreCommonCardLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cardrule", type="string", length=255, nullable=false)
     */
    private $cardrule = '';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=false)
     */
    private $info;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operation", type="boolean", nullable=false)
     */
    private $operation = '0';



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
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonCardLog
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
     * Set username
     *
     * @param string $username
     * @return PreCommonCardLog
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set cardrule
     *
     * @param string $cardrule
     * @return PreCommonCardLog
     */
    public function setCardrule($cardrule)
    {
        $this->cardrule = $cardrule;

        return $this;
    }

    /**
     * Get cardrule
     *
     * @return string 
     */
    public function getCardrule()
    {
        return $this->cardrule;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return PreCommonCardLog
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonCardLog
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
     * Set description
     *
     * @param string $description
     * @return PreCommonCardLog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set operation
     *
     * @param boolean $operation
     * @return PreCommonCardLog
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return boolean 
     */
    public function getOperation()
    {
        return $this->operation;
    }
}
