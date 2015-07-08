<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumTrade
 *
 * @ORM\Table(name="pre_forum_trade", indexes={@ORM\Index(name="pid", columns={"pid"}), @ORM\Index(name="sellerid", columns={"sellerid"}), @ORM\Index(name="totalitems", columns={"totalitems"}), @ORM\Index(name="tradesum", columns={"tradesum"}), @ORM\Index(name="displayorder", columns={"tid", "displayorder"}), @ORM\Index(name="sellertrades", columns={"sellerid", "tradesum", "totalitems"}), @ORM\Index(name="typeid", columns={"typeid"}), @ORM\Index(name="credittradesum", columns={"credittradesum"}), @ORM\Index(name="expiration", columns={"expiration"})})
 * @ORM\Entity
 */
class PreForumTrade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="smallint", nullable=false)
     */
    private $typeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sellerid", type="integer", nullable=false)
     */
    private $sellerid;

    /**
     * @var string
     *
     * @ORM\Column(name="seller", type="string", length=15, nullable=false)
     */
    private $seller;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=50, nullable=false)
     */
    private $account;

    /**
     * @var string
     *
     * @ORM\Column(name="tenpayaccount", type="string", length=20, nullable=false)
     */
    private $tenpayaccount = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=100, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="smallint", nullable=false)
     */
    private $amount = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="quality", type="boolean", nullable=false)
     */
    private $quality = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="locus", type="string", length=20, nullable=false)
     */
    private $locus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="transport", type="boolean", nullable=false)
     */
    private $transport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ordinaryfee", type="smallint", nullable=false)
     */
    private $ordinaryfee = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expressfee", type="smallint", nullable=false)
     */
    private $expressfee = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="emsfee", type="smallint", nullable=false)
     */
    private $emsfee = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="itemtype", type="boolean", nullable=false)
     */
    private $itemtype = '0';

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
     * @ORM\Column(name="lastbuyer", type="string", length=15, nullable=false)
     */
    private $lastbuyer;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalitems", type="smallint", nullable=false)
     */
    private $totalitems = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tradesum", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $tradesum = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="closed", type="boolean", nullable=false)
     */
    private $closed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder;

    /**
     * @var string
     *
     * @ORM\Column(name="costprice", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $costprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=false)
     */
    private $credit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="costcredit", type="integer", nullable=false)
     */
    private $costcredit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="credittradesum", type="integer", nullable=false)
     */
    private $credittradesum = '0';



    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumTrade
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumTrade
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     * @return PreForumTrade
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set sellerid
     *
     * @param integer $sellerid
     * @return PreForumTrade
     */
    public function setSellerid($sellerid)
    {
        $this->sellerid = $sellerid;

        return $this;
    }

    /**
     * Get sellerid
     *
     * @return integer 
     */
    public function getSellerid()
    {
        return $this->sellerid;
    }

    /**
     * Set seller
     *
     * @param string $seller
     * @return PreForumTrade
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return string 
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Set account
     *
     * @param string $account
     * @return PreForumTrade
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string 
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set tenpayaccount
     *
     * @param string $tenpayaccount
     * @return PreForumTrade
     */
    public function setTenpayaccount($tenpayaccount)
    {
        $this->tenpayaccount = $tenpayaccount;

        return $this;
    }

    /**
     * Get tenpayaccount
     *
     * @return string 
     */
    public function getTenpayaccount()
    {
        return $this->tenpayaccount;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return PreForumTrade
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return PreForumTrade
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return PreForumTrade
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set quality
     *
     * @param boolean $quality
     * @return PreForumTrade
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return boolean 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set locus
     *
     * @param string $locus
     * @return PreForumTrade
     */
    public function setLocus($locus)
    {
        $this->locus = $locus;

        return $this;
    }

    /**
     * Get locus
     *
     * @return string 
     */
    public function getLocus()
    {
        return $this->locus;
    }

    /**
     * Set transport
     *
     * @param boolean $transport
     * @return PreForumTrade
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return boolean 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set ordinaryfee
     *
     * @param integer $ordinaryfee
     * @return PreForumTrade
     */
    public function setOrdinaryfee($ordinaryfee)
    {
        $this->ordinaryfee = $ordinaryfee;

        return $this;
    }

    /**
     * Get ordinaryfee
     *
     * @return integer 
     */
    public function getOrdinaryfee()
    {
        return $this->ordinaryfee;
    }

    /**
     * Set expressfee
     *
     * @param integer $expressfee
     * @return PreForumTrade
     */
    public function setExpressfee($expressfee)
    {
        $this->expressfee = $expressfee;

        return $this;
    }

    /**
     * Get expressfee
     *
     * @return integer 
     */
    public function getExpressfee()
    {
        return $this->expressfee;
    }

    /**
     * Set emsfee
     *
     * @param integer $emsfee
     * @return PreForumTrade
     */
    public function setEmsfee($emsfee)
    {
        $this->emsfee = $emsfee;

        return $this;
    }

    /**
     * Get emsfee
     *
     * @return integer 
     */
    public function getEmsfee()
    {
        return $this->emsfee;
    }

    /**
     * Set itemtype
     *
     * @param boolean $itemtype
     * @return PreForumTrade
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return boolean 
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumTrade
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
     * @return PreForumTrade
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
     * Set lastbuyer
     *
     * @param string $lastbuyer
     * @return PreForumTrade
     */
    public function setLastbuyer($lastbuyer)
    {
        $this->lastbuyer = $lastbuyer;

        return $this;
    }

    /**
     * Get lastbuyer
     *
     * @return string 
     */
    public function getLastbuyer()
    {
        return $this->lastbuyer;
    }

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreForumTrade
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set totalitems
     *
     * @param integer $totalitems
     * @return PreForumTrade
     */
    public function setTotalitems($totalitems)
    {
        $this->totalitems = $totalitems;

        return $this;
    }

    /**
     * Get totalitems
     *
     * @return integer 
     */
    public function getTotalitems()
    {
        return $this->totalitems;
    }

    /**
     * Set tradesum
     *
     * @param string $tradesum
     * @return PreForumTrade
     */
    public function setTradesum($tradesum)
    {
        $this->tradesum = $tradesum;

        return $this;
    }

    /**
     * Get tradesum
     *
     * @return string 
     */
    public function getTradesum()
    {
        return $this->tradesum;
    }

    /**
     * Set closed
     *
     * @param boolean $closed
     * @return PreForumTrade
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set aid
     *
     * @param integer $aid
     * @return PreForumTrade
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumTrade
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set costprice
     *
     * @param string $costprice
     * @return PreForumTrade
     */
    public function setCostprice($costprice)
    {
        $this->costprice = $costprice;

        return $this;
    }

    /**
     * Get costprice
     *
     * @return string 
     */
    public function getCostprice()
    {
        return $this->costprice;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return PreForumTrade
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set costcredit
     *
     * @param integer $costcredit
     * @return PreForumTrade
     */
    public function setCostcredit($costcredit)
    {
        $this->costcredit = $costcredit;

        return $this;
    }

    /**
     * Get costcredit
     *
     * @return integer 
     */
    public function getCostcredit()
    {
        return $this->costcredit;
    }

    /**
     * Set credittradesum
     *
     * @param integer $credittradesum
     * @return PreForumTrade
     */
    public function setCredittradesum($credittradesum)
    {
        $this->credittradesum = $credittradesum;

        return $this;
    }

    /**
     * Get credittradesum
     *
     * @return integer 
     */
    public function getCredittradesum()
    {
        return $this->credittradesum;
    }
}
