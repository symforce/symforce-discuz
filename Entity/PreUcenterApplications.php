<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterApplications
 *
 * @ORM\Table(name="pre_ucenter_applications")
 * @ORM\Entity
 */
class PreUcenterApplications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $appid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="authkey", type="string", length=255, nullable=false)
     */
    private $authkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="viewprourl", type="string", length=255, nullable=false)
     */
    private $viewprourl;

    /**
     * @var string
     *
     * @ORM\Column(name="apifilename", type="string", length=30, nullable=false)
     */
    private $apifilename = 'uc.php';

    /**
     * @var string
     *
     * @ORM\Column(name="charset", type="string", length=8, nullable=false)
     */
    private $charset = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dbcharset", type="string", length=8, nullable=false)
     */
    private $dbcharset = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="synlogin", type="boolean", nullable=false)
     */
    private $synlogin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="recvnote", type="boolean", nullable=true)
     */
    private $recvnote = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=false)
     */
    private $extra;

    /**
     * @var string
     *
     * @ORM\Column(name="tagtemplates", type="text", nullable=false)
     */
    private $tagtemplates;

    /**
     * @var string
     *
     * @ORM\Column(name="allowips", type="text", nullable=false)
     */
    private $allowips;



    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreUcenterApplications
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreUcenterApplications
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PreUcenterApplications
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set authkey
     *
     * @param string $authkey
     * @return PreUcenterApplications
     */
    public function setAuthkey($authkey)
    {
        $this->authkey = $authkey;

        return $this;
    }

    /**
     * Get authkey
     *
     * @return string 
     */
    public function getAuthkey()
    {
        return $this->authkey;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return PreUcenterApplications
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set viewprourl
     *
     * @param string $viewprourl
     * @return PreUcenterApplications
     */
    public function setViewprourl($viewprourl)
    {
        $this->viewprourl = $viewprourl;

        return $this;
    }

    /**
     * Get viewprourl
     *
     * @return string 
     */
    public function getViewprourl()
    {
        return $this->viewprourl;
    }

    /**
     * Set apifilename
     *
     * @param string $apifilename
     * @return PreUcenterApplications
     */
    public function setApifilename($apifilename)
    {
        $this->apifilename = $apifilename;

        return $this;
    }

    /**
     * Get apifilename
     *
     * @return string 
     */
    public function getApifilename()
    {
        return $this->apifilename;
    }

    /**
     * Set charset
     *
     * @param string $charset
     * @return PreUcenterApplications
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;

        return $this;
    }

    /**
     * Get charset
     *
     * @return string 
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * Set dbcharset
     *
     * @param string $dbcharset
     * @return PreUcenterApplications
     */
    public function setDbcharset($dbcharset)
    {
        $this->dbcharset = $dbcharset;

        return $this;
    }

    /**
     * Get dbcharset
     *
     * @return string 
     */
    public function getDbcharset()
    {
        return $this->dbcharset;
    }

    /**
     * Set synlogin
     *
     * @param boolean $synlogin
     * @return PreUcenterApplications
     */
    public function setSynlogin($synlogin)
    {
        $this->synlogin = $synlogin;

        return $this;
    }

    /**
     * Get synlogin
     *
     * @return boolean 
     */
    public function getSynlogin()
    {
        return $this->synlogin;
    }

    /**
     * Set recvnote
     *
     * @param boolean $recvnote
     * @return PreUcenterApplications
     */
    public function setRecvnote($recvnote)
    {
        $this->recvnote = $recvnote;

        return $this;
    }

    /**
     * Get recvnote
     *
     * @return boolean 
     */
    public function getRecvnote()
    {
        return $this->recvnote;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PreUcenterApplications
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set tagtemplates
     *
     * @param string $tagtemplates
     * @return PreUcenterApplications
     */
    public function setTagtemplates($tagtemplates)
    {
        $this->tagtemplates = $tagtemplates;

        return $this;
    }

    /**
     * Get tagtemplates
     *
     * @return string 
     */
    public function getTagtemplates()
    {
        return $this->tagtemplates;
    }

    /**
     * Set allowips
     *
     * @param string $allowips
     * @return PreUcenterApplications
     */
    public function setAllowips($allowips)
    {
        $this->allowips = $allowips;

        return $this;
    }

    /**
     * Get allowips
     *
     * @return string 
     */
    public function getAllowips()
    {
        return $this->allowips;
    }
}
