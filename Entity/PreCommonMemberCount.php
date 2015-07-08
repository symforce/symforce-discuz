<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberCount
 *
 * @ORM\Table(name="pre_common_member_count", indexes={@ORM\Index(name="posts", columns={"posts"})})
 * @ORM\Entity
 */
class PreCommonMemberCount
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
     * @ORM\Column(name="extcredits1", type="integer", nullable=false)
     */
    private $extcredits1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits2", type="integer", nullable=false)
     */
    private $extcredits2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits3", type="integer", nullable=false)
     */
    private $extcredits3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits4", type="integer", nullable=false)
     */
    private $extcredits4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits5", type="integer", nullable=false)
     */
    private $extcredits5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits6", type="integer", nullable=false)
     */
    private $extcredits6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits7", type="integer", nullable=false)
     */
    private $extcredits7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits8", type="integer", nullable=false)
     */
    private $extcredits8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="friends", type="smallint", nullable=false)
     */
    private $friends = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=false)
     */
    private $posts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="threads", type="integer", nullable=false)
     */
    private $threads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="digestposts", type="smallint", nullable=false)
     */
    private $digestposts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="doings", type="smallint", nullable=false)
     */
    private $doings = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blogs", type="smallint", nullable=false)
     */
    private $blogs = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="albums", type="smallint", nullable=false)
     */
    private $albums = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharings", type="smallint", nullable=false)
     */
    private $sharings = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attachsize", type="integer", nullable=false)
     */
    private $attachsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="oltime", type="smallint", nullable=false)
     */
    private $oltime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="todayattachs", type="smallint", nullable=false)
     */
    private $todayattachs = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="todayattachsize", type="integer", nullable=false)
     */
    private $todayattachsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="feeds", type="integer", nullable=false)
     */
    private $feeds = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="follower", type="integer", nullable=false)
     */
    private $follower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="following", type="integer", nullable=false)
     */
    private $following = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="newfollower", type="integer", nullable=false)
     */
    private $newfollower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blacklist", type="integer", nullable=false)
     */
    private $blacklist = '0';

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreCommonMember
     * @ORM\OneToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonMember", mappedBy="common_member_count", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $common_member ;

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
     * Set UID
     * DC增加项
     * @param $uid
     * @return PreCommonMemberCount
     */
    public function setUid($uid){
        $this->uid = $uid;
        return $this;
    }

    /**
     * Set extcredits1
     *
     * @param integer $extcredits1
     * @return PreCommonMemberCount
     */
    public function setExtcredits1($extcredits1)
    {
        $this->extcredits1 = $extcredits1;

        return $this;
    }

    /**
     * Get extcredits1
     *
     * @return integer 
     */
    public function getExtcredits1()
    {
        return $this->extcredits1;
    }

    /**
     * Set extcredits2
     *
     * @param integer $extcredits2
     * @return PreCommonMemberCount
     */
    public function setExtcredits2($extcredits2)
    {
        $this->extcredits2 = $extcredits2;

        return $this;
    }

    /**
     * Get extcredits2
     *
     * @return integer 
     */
    public function getExtcredits2()
    {
        return $this->extcredits2;
    }

    /**
     * Set extcredits3
     *
     * @param integer $extcredits3
     * @return PreCommonMemberCount
     */
    public function setExtcredits3($extcredits3)
    {
        $this->extcredits3 = $extcredits3;

        return $this;
    }

    /**
     * Get extcredits3
     *
     * @return integer 
     */
    public function getExtcredits3()
    {
        return $this->extcredits3;
    }

    /**
     * Set extcredits4
     *
     * @param integer $extcredits4
     * @return PreCommonMemberCount
     */
    public function setExtcredits4($extcredits4)
    {
        $this->extcredits4 = $extcredits4;

        return $this;
    }

    /**
     * Get extcredits4
     *
     * @return integer 
     */
    public function getExtcredits4()
    {
        return $this->extcredits4;
    }

    /**
     * Set extcredits5
     *
     * @param integer $extcredits5
     * @return PreCommonMemberCount
     */
    public function setExtcredits5($extcredits5)
    {
        $this->extcredits5 = $extcredits5;

        return $this;
    }

    /**
     * Get extcredits5
     *
     * @return integer 
     */
    public function getExtcredits5()
    {
        return $this->extcredits5;
    }

    /**
     * Set extcredits6
     *
     * @param integer $extcredits6
     * @return PreCommonMemberCount
     */
    public function setExtcredits6($extcredits6)
    {
        $this->extcredits6 = $extcredits6;

        return $this;
    }

    /**
     * Get extcredits6
     *
     * @return integer 
     */
    public function getExtcredits6()
    {
        return $this->extcredits6;
    }

    /**
     * Set extcredits7
     *
     * @param integer $extcredits7
     * @return PreCommonMemberCount
     */
    public function setExtcredits7($extcredits7)
    {
        $this->extcredits7 = $extcredits7;

        return $this;
    }

    /**
     * Get extcredits7
     *
     * @return integer 
     */
    public function getExtcredits7()
    {
        return $this->extcredits7;
    }

    /**
     * Set extcredits8
     *
     * @param integer $extcredits8
     * @return PreCommonMemberCount
     */
    public function setExtcredits8($extcredits8)
    {
        $this->extcredits8 = $extcredits8;

        return $this;
    }

    /**
     * Get extcredits8
     *
     * @return integer 
     */
    public function getExtcredits8()
    {
        return $this->extcredits8;
    }

    /**
     * Set friends
     *
     * @param integer $friends
     * @return PreCommonMemberCount
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return integer 
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     * @return PreCommonMemberCount
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set threads
     *
     * @param integer $threads
     * @return PreCommonMemberCount
     */
    public function setThreads($threads)
    {
        $this->threads = $threads;

        return $this;
    }

    /**
     * Get threads
     *
     * @return integer 
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set digestposts
     *
     * @param integer $digestposts
     * @return PreCommonMemberCount
     */
    public function setDigestposts($digestposts)
    {
        $this->digestposts = $digestposts;

        return $this;
    }

    /**
     * Get digestposts
     *
     * @return integer 
     */
    public function getDigestposts()
    {
        return $this->digestposts;
    }

    /**
     * Set doings
     *
     * @param integer $doings
     * @return PreCommonMemberCount
     */
    public function setDoings($doings)
    {
        $this->doings = $doings;

        return $this;
    }

    /**
     * Get doings
     *
     * @return integer 
     */
    public function getDoings()
    {
        return $this->doings;
    }

    /**
     * Set blogs
     *
     * @param integer $blogs
     * @return PreCommonMemberCount
     */
    public function setBlogs($blogs)
    {
        $this->blogs = $blogs;

        return $this;
    }

    /**
     * Get blogs
     *
     * @return integer 
     */
    public function getBlogs()
    {
        return $this->blogs;
    }

    /**
     * Set albums
     *
     * @param integer $albums
     * @return PreCommonMemberCount
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;

        return $this;
    }

    /**
     * Get albums
     *
     * @return integer 
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Set sharings
     *
     * @param integer $sharings
     * @return PreCommonMemberCount
     */
    public function setSharings($sharings)
    {
        $this->sharings = $sharings;

        return $this;
    }

    /**
     * Get sharings
     *
     * @return integer 
     */
    public function getSharings()
    {
        return $this->sharings;
    }

    /**
     * Set attachsize
     *
     * @param integer $attachsize
     * @return PreCommonMemberCount
     */
    public function setAttachsize($attachsize)
    {
        $this->attachsize = $attachsize;

        return $this;
    }

    /**
     * Get attachsize
     *
     * @return integer 
     */
    public function getAttachsize()
    {
        return $this->attachsize;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return PreCommonMemberCount
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set oltime
     *
     * @param integer $oltime
     * @return PreCommonMemberCount
     */
    public function setOltime($oltime)
    {
        $this->oltime = $oltime;

        return $this;
    }

    /**
     * Get oltime
     *
     * @return integer 
     */
    public function getOltime()
    {
        return $this->oltime;
    }

    /**
     * Set todayattachs
     *
     * @param integer $todayattachs
     * @return PreCommonMemberCount
     */
    public function setTodayattachs($todayattachs)
    {
        $this->todayattachs = $todayattachs;

        return $this;
    }

    /**
     * Get todayattachs
     *
     * @return integer 
     */
    public function getTodayattachs()
    {
        return $this->todayattachs;
    }

    /**
     * Set todayattachsize
     *
     * @param integer $todayattachsize
     * @return PreCommonMemberCount
     */
    public function setTodayattachsize($todayattachsize)
    {
        $this->todayattachsize = $todayattachsize;

        return $this;
    }

    /**
     * Get todayattachsize
     *
     * @return integer 
     */
    public function getTodayattachsize()
    {
        return $this->todayattachsize;
    }

    /**
     * Set feeds
     *
     * @param integer $feeds
     * @return PreCommonMemberCount
     */
    public function setFeeds($feeds)
    {
        $this->feeds = $feeds;

        return $this;
    }

    /**
     * Get feeds
     *
     * @return integer 
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * Set follower
     *
     * @param integer $follower
     * @return PreCommonMemberCount
     */
    public function setFollower($follower)
    {
        $this->follower = $follower;

        return $this;
    }

    /**
     * Get follower
     *
     * @return integer 
     */
    public function getFollower()
    {
        return $this->follower;
    }

    /**
     * Set following
     *
     * @param integer $following
     * @return PreCommonMemberCount
     */
    public function setFollowing($following)
    {
        $this->following = $following;

        return $this;
    }

    /**
     * Get following
     *
     * @return integer 
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * Set newfollower
     *
     * @param integer $newfollower
     * @return PreCommonMemberCount
     */
    public function setNewfollower($newfollower)
    {
        $this->newfollower = $newfollower;

        return $this;
    }

    /**
     * Get newfollower
     *
     * @return integer 
     */
    public function getNewfollower()
    {
        return $this->newfollower;
    }

    /**
     * Set blacklist
     *
     * @param integer $blacklist
     * @return PreCommonMemberCount
     */
    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    /**
     * Get blacklist
     *
     * @return integer 
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }
}
