<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * @ORM\Entity
 * @ORM\Table(name="pre_forum_forum_medal")
 * Author  Morgan
 */
class PreForumForumMedal
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", length=8, options={"default":0})
     */
    public $medalid = 0;

    /**
     * @ORM\Column(type="integer", length=8, options={"default":0})
     */
    public $fid = 0;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreForumForumMedal
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreForumForumMedal", inversedBy="forum", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="medalid", referencedColumnName="medalid")
     */
    public $medal;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreForumForum
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreForumForum", inversedBy="forummedal", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="fid", referencedColumnName="fid")
     */
    public $forumforum;

    public function getId() {
        return $this->id ;
    }

    public  function  setMedal(\Symforce\DiscuzBundle\Entity\PreForumForumMedal $medal){
            $this->medalid = $medal->getId();
            $this->medal = $medal;
    }

    public  function  setForumForum(\Symforce\DiscuzBundle\Entity\PreForumForum $Forum){
        $this->fid = $Forum->getFid();
        $this->forumforum = $Forum;
    }

}