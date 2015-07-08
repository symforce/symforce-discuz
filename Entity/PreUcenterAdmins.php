<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterAdmins
 *
 * @ORM\Table(name="pre_ucenter_admins", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class PreUcenterAdmins
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminsetting", type="boolean", nullable=false)
     */
    private $allowadminsetting = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminapp", type="boolean", nullable=false)
     */
    private $allowadminapp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminuser", type="boolean", nullable=false)
     */
    private $allowadminuser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminbadword", type="boolean", nullable=false)
     */
    private $allowadminbadword = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmintag", type="boolean", nullable=false)
     */
    private $allowadmintag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminpm", type="boolean", nullable=false)
     */
    private $allowadminpm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmincredits", type="boolean", nullable=false)
     */
    private $allowadmincredits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmindomain", type="boolean", nullable=false)
     */
    private $allowadmindomain = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmindb", type="boolean", nullable=false)
     */
    private $allowadmindb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminnote", type="boolean", nullable=false)
     */
    private $allowadminnote = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmincache", type="boolean", nullable=false)
     */
    private $allowadmincache = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadminlog", type="boolean", nullable=false)
     */
    private $allowadminlog = '0';



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
     * @return PreUcenterAdmins
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
     * Set allowadminsetting
     *
     * @param boolean $allowadminsetting
     * @return PreUcenterAdmins
     */
    public function setAllowadminsetting($allowadminsetting)
    {
        $this->allowadminsetting = $allowadminsetting;

        return $this;
    }

    /**
     * Get allowadminsetting
     *
     * @return boolean 
     */
    public function getAllowadminsetting()
    {
        return $this->allowadminsetting;
    }

    /**
     * Set allowadminapp
     *
     * @param boolean $allowadminapp
     * @return PreUcenterAdmins
     */
    public function setAllowadminapp($allowadminapp)
    {
        $this->allowadminapp = $allowadminapp;

        return $this;
    }

    /**
     * Get allowadminapp
     *
     * @return boolean 
     */
    public function getAllowadminapp()
    {
        return $this->allowadminapp;
    }

    /**
     * Set allowadminuser
     *
     * @param boolean $allowadminuser
     * @return PreUcenterAdmins
     */
    public function setAllowadminuser($allowadminuser)
    {
        $this->allowadminuser = $allowadminuser;

        return $this;
    }

    /**
     * Get allowadminuser
     *
     * @return boolean 
     */
    public function getAllowadminuser()
    {
        return $this->allowadminuser;
    }

    /**
     * Set allowadminbadword
     *
     * @param boolean $allowadminbadword
     * @return PreUcenterAdmins
     */
    public function setAllowadminbadword($allowadminbadword)
    {
        $this->allowadminbadword = $allowadminbadword;

        return $this;
    }

    /**
     * Get allowadminbadword
     *
     * @return boolean 
     */
    public function getAllowadminbadword()
    {
        return $this->allowadminbadword;
    }

    /**
     * Set allowadmintag
     *
     * @param boolean $allowadmintag
     * @return PreUcenterAdmins
     */
    public function setAllowadmintag($allowadmintag)
    {
        $this->allowadmintag = $allowadmintag;

        return $this;
    }

    /**
     * Get allowadmintag
     *
     * @return boolean 
     */
    public function getAllowadmintag()
    {
        return $this->allowadmintag;
    }

    /**
     * Set allowadminpm
     *
     * @param boolean $allowadminpm
     * @return PreUcenterAdmins
     */
    public function setAllowadminpm($allowadminpm)
    {
        $this->allowadminpm = $allowadminpm;

        return $this;
    }

    /**
     * Get allowadminpm
     *
     * @return boolean 
     */
    public function getAllowadminpm()
    {
        return $this->allowadminpm;
    }

    /**
     * Set allowadmincredits
     *
     * @param boolean $allowadmincredits
     * @return PreUcenterAdmins
     */
    public function setAllowadmincredits($allowadmincredits)
    {
        $this->allowadmincredits = $allowadmincredits;

        return $this;
    }

    /**
     * Get allowadmincredits
     *
     * @return boolean 
     */
    public function getAllowadmincredits()
    {
        return $this->allowadmincredits;
    }

    /**
     * Set allowadmindomain
     *
     * @param boolean $allowadmindomain
     * @return PreUcenterAdmins
     */
    public function setAllowadmindomain($allowadmindomain)
    {
        $this->allowadmindomain = $allowadmindomain;

        return $this;
    }

    /**
     * Get allowadmindomain
     *
     * @return boolean 
     */
    public function getAllowadmindomain()
    {
        return $this->allowadmindomain;
    }

    /**
     * Set allowadmindb
     *
     * @param boolean $allowadmindb
     * @return PreUcenterAdmins
     */
    public function setAllowadmindb($allowadmindb)
    {
        $this->allowadmindb = $allowadmindb;

        return $this;
    }

    /**
     * Get allowadmindb
     *
     * @return boolean 
     */
    public function getAllowadmindb()
    {
        return $this->allowadmindb;
    }

    /**
     * Set allowadminnote
     *
     * @param boolean $allowadminnote
     * @return PreUcenterAdmins
     */
    public function setAllowadminnote($allowadminnote)
    {
        $this->allowadminnote = $allowadminnote;

        return $this;
    }

    /**
     * Get allowadminnote
     *
     * @return boolean 
     */
    public function getAllowadminnote()
    {
        return $this->allowadminnote;
    }

    /**
     * Set allowadmincache
     *
     * @param boolean $allowadmincache
     * @return PreUcenterAdmins
     */
    public function setAllowadmincache($allowadmincache)
    {
        $this->allowadmincache = $allowadmincache;

        return $this;
    }

    /**
     * Get allowadmincache
     *
     * @return boolean 
     */
    public function getAllowadmincache()
    {
        return $this->allowadmincache;
    }

    /**
     * Set allowadminlog
     *
     * @param boolean $allowadminlog
     * @return PreUcenterAdmins
     */
    public function setAllowadminlog($allowadminlog)
    {
        $this->allowadminlog = $allowadminlog;

        return $this;
    }

    /**
     * Get allowadminlog
     *
     * @return boolean 
     */
    public function getAllowadminlog()
    {
        return $this->allowadminlog;
    }
}
