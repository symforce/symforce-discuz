<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdminnote
 *
 * @ORM\Table(name="pre_common_adminnote")
 * @ORM\Entity
 */
class PreCommonAdminnote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=15, nullable=false)
     */
    private $admin = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="access", type="boolean", nullable=false)
     */
    private $access = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adminid", type="boolean", nullable=false)
     */
    private $adminid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;



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
     * Set admin
     *
     * @param string $admin
     * @return PreCommonAdminnote
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set access
     *
     * @param boolean $access
     * @return PreCommonAdminnote
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return boolean 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set adminid
     *
     * @param boolean $adminid
     * @return PreCommonAdminnote
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return boolean 
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonAdminnote
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
     * Set expiration
     *
     * @param integer $expiration
     * @return PreCommonAdminnote
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
     * Set message
     *
     * @param string $message
     * @return PreCommonAdminnote
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
}
