<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumAccess
 *
 * @ORM\Table(name="pre_forum_access", indexes={@ORM\Index(name="listorder", columns={"fid", "dateline"})})
 * @ORM\Entity
 */
class PreForumAccess
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
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowview", type="boolean", nullable=false)
     */
    private $allowview = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpost", type="boolean", nullable=false)
     */
    private $allowpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowreply", type="boolean", nullable=false)
     */
    private $allowreply = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgetattach", type="boolean", nullable=false)
     */
    private $allowgetattach = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgetimage", type="boolean", nullable=false)
     */
    private $allowgetimage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostattach", type="boolean", nullable=false)
     */
    private $allowpostattach = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostimage", type="boolean", nullable=false)
     */
    private $allowpostimage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="adminuser", type="integer", nullable=false)
     */
    private $adminuser = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumAccess
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
     * Set fid
     *
     * @param integer $fid
     * @return PreForumAccess
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set allowview
     *
     * @param boolean $allowview
     * @return PreForumAccess
     */
    public function setAllowview($allowview)
    {
        $this->allowview = $allowview;

        return $this;
    }

    /**
     * Get allowview
     *
     * @return boolean 
     */
    public function getAllowview()
    {
        return $this->allowview;
    }

    /**
     * Set allowpost
     *
     * @param boolean $allowpost
     * @return PreForumAccess
     */
    public function setAllowpost($allowpost)
    {
        $this->allowpost = $allowpost;

        return $this;
    }

    /**
     * Get allowpost
     *
     * @return boolean 
     */
    public function getAllowpost()
    {
        return $this->allowpost;
    }

    /**
     * Set allowreply
     *
     * @param boolean $allowreply
     * @return PreForumAccess
     */
    public function setAllowreply($allowreply)
    {
        $this->allowreply = $allowreply;

        return $this;
    }

    /**
     * Get allowreply
     *
     * @return boolean 
     */
    public function getAllowreply()
    {
        return $this->allowreply;
    }

    /**
     * Set allowgetattach
     *
     * @param boolean $allowgetattach
     * @return PreForumAccess
     */
    public function setAllowgetattach($allowgetattach)
    {
        $this->allowgetattach = $allowgetattach;

        return $this;
    }

    /**
     * Get allowgetattach
     *
     * @return boolean 
     */
    public function getAllowgetattach()
    {
        return $this->allowgetattach;
    }

    /**
     * Set allowgetimage
     *
     * @param boolean $allowgetimage
     * @return PreForumAccess
     */
    public function setAllowgetimage($allowgetimage)
    {
        $this->allowgetimage = $allowgetimage;

        return $this;
    }

    /**
     * Get allowgetimage
     *
     * @return boolean 
     */
    public function getAllowgetimage()
    {
        return $this->allowgetimage;
    }

    /**
     * Set allowpostattach
     *
     * @param boolean $allowpostattach
     * @return PreForumAccess
     */
    public function setAllowpostattach($allowpostattach)
    {
        $this->allowpostattach = $allowpostattach;

        return $this;
    }

    /**
     * Get allowpostattach
     *
     * @return boolean 
     */
    public function getAllowpostattach()
    {
        return $this->allowpostattach;
    }

    /**
     * Set allowpostimage
     *
     * @param boolean $allowpostimage
     * @return PreForumAccess
     */
    public function setAllowpostimage($allowpostimage)
    {
        $this->allowpostimage = $allowpostimage;

        return $this;
    }

    /**
     * Get allowpostimage
     *
     * @return boolean 
     */
    public function getAllowpostimage()
    {
        return $this->allowpostimage;
    }

    /**
     * Set adminuser
     *
     * @param integer $adminuser
     * @return PreForumAccess
     */
    public function setAdminuser($adminuser)
    {
        $this->adminuser = $adminuser;

        return $this;
    }

    /**
     * Get adminuser
     *
     * @return integer 
     */
    public function getAdminuser()
    {
        return $this->adminuser;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumAccess
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
