<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberProfile
 *
 * @ORM\Table(name="pre_common_member_profile")
 * @ORM\Entity
 */
class PreCommonMemberProfile
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
     * @ORM\Column(name="realname", type="string", length=255, nullable=false)
     */
    private $realname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=false)
     */
    private $gender = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="birthyear", type="smallint", nullable=false)
     */
    private $birthyear = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="birthmonth", type="boolean", nullable=false)
     */
    private $birthmonth = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="birthday", type="boolean", nullable=false)
     */
    private $birthday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="constellation", type="string", length=255, nullable=false)
     */
    private $constellation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zodiac", type="string", length=255, nullable=false)
     */
    private $zodiac = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=false)
     */
    private $mobile = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idcardtype", type="string", length=255, nullable=false)
     */
    private $idcardtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="idcard", type="string", length=255, nullable=false)
     */
    private $idcard = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=255, nullable=false)
     */
    private $zipcode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=false)
     */
    private $nationality = '';

    /**
     * @var string
     *
     * @ORM\Column(name="birthprovince", type="string", length=255, nullable=false)
     */
    private $birthprovince = '';

    /**
     * @var string
     *
     * @ORM\Column(name="birthcity", type="string", length=255, nullable=false)
     */
    private $birthcity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="birthdist", type="string", length=20, nullable=false)
     */
    private $birthdist = '';

    /**
     * @var string
     *
     * @ORM\Column(name="birthcommunity", type="string", length=255, nullable=false)
     */
    private $birthcommunity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="resideprovince", type="string", length=255, nullable=false)
     */
    private $resideprovince = '';

    /**
     * @var string
     *
     * @ORM\Column(name="residecity", type="string", length=255, nullable=false)
     */
    private $residecity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="residedist", type="string", length=20, nullable=false)
     */
    private $residedist = '';

    /**
     * @var string
     *
     * @ORM\Column(name="residecommunity", type="string", length=255, nullable=false)
     */
    private $residecommunity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="residesuite", type="string", length=255, nullable=false)
     */
    private $residesuite = '';

    /**
     * @var string
     *
     * @ORM\Column(name="graduateschool", type="string", length=255, nullable=false)
     */
    private $graduateschool = '';

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=false)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255, nullable=false)
     */
    private $education = '';

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=255, nullable=false)
     */
    private $occupation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position = '';

    /**
     * @var string
     *
     * @ORM\Column(name="revenue", type="string", length=255, nullable=false)
     */
    private $revenue = '';

    /**
     * @var string
     *
     * @ORM\Column(name="affectivestatus", type="string", length=255, nullable=false)
     */
    private $affectivestatus = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lookingfor", type="string", length=255, nullable=false)
     */
    private $lookingfor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bloodtype", type="string", length=255, nullable=false)
     */
    private $bloodtype = '';

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=255, nullable=false)
     */
    private $height = '';

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255, nullable=false)
     */
    private $weight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alipay", type="string", length=255, nullable=false)
     */
    private $alipay = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icq", type="string", length=255, nullable=false)
     */
    private $icq = '';

    /**
     * @var string
     *
     * @ORM\Column(name="qq", type="string", length=255, nullable=false)
     */
    private $qq = '';

    /**
     * @var string
     *
     * @ORM\Column(name="yahoo", type="string", length=255, nullable=false)
     */
    private $yahoo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=255, nullable=false)
     */
    private $msn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="taobao", type="string", length=255, nullable=false)
     */
    private $taobao = '';

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=false)
     */
    private $site = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text", nullable=false)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="text", nullable=false)
     */
    private $interest;

    /**
     * @var string
     *
     * @ORM\Column(name="field1", type="text", nullable=false)
     */
    private $field1;

    /**
     * @var string
     *
     * @ORM\Column(name="field2", type="text", nullable=false)
     */
    private $field2;

    /**
     * @var string
     *
     * @ORM\Column(name="field3", type="text", nullable=false)
     */
    private $field3;

    /**
     * @var string
     *
     * @ORM\Column(name="field4", type="text", nullable=false)
     */
    private $field4;

    /**
     * @var string
     *
     * @ORM\Column(name="field5", type="text", nullable=false)
     */
    private $field5;

    /**
     * @var string
     *
     * @ORM\Column(name="field6", type="text", nullable=false)
     */
    private $field6;

    /**
     * @var string
     *
     * @ORM\Column(name="field7", type="text", nullable=false)
     */
    private $field7;

    /**
     * @var string
     *
     * @ORM\Column(name="field8", type="text", nullable=false)
     */
    private $field8;



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
     * Set realname
     *
     * @param string $realname
     * @return PreCommonMemberProfile
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Get realname
     *
     * @return string 
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return PreCommonMemberProfile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthyear
     *
     * @param integer $birthyear
     * @return PreCommonMemberProfile
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Get birthyear
     *
     * @return integer 
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Set birthmonth
     *
     * @param boolean $birthmonth
     * @return PreCommonMemberProfile
     */
    public function setBirthmonth($birthmonth)
    {
        $this->birthmonth = $birthmonth;

        return $this;
    }

    /**
     * Get birthmonth
     *
     * @return boolean 
     */
    public function getBirthmonth()
    {
        return $this->birthmonth;
    }

    /**
     * Set birthday
     *
     * @param boolean $birthday
     * @return PreCommonMemberProfile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return boolean 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set constellation
     *
     * @param string $constellation
     * @return PreCommonMemberProfile
     */
    public function setConstellation($constellation)
    {
        $this->constellation = $constellation;

        return $this;
    }

    /**
     * Get constellation
     *
     * @return string 
     */
    public function getConstellation()
    {
        return $this->constellation;
    }

    /**
     * Set zodiac
     *
     * @param string $zodiac
     * @return PreCommonMemberProfile
     */
    public function setZodiac($zodiac)
    {
        $this->zodiac = $zodiac;

        return $this;
    }

    /**
     * Get zodiac
     *
     * @return string 
     */
    public function getZodiac()
    {
        return $this->zodiac;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return PreCommonMemberProfile
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return PreCommonMemberProfile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set idcardtype
     *
     * @param string $idcardtype
     * @return PreCommonMemberProfile
     */
    public function setIdcardtype($idcardtype)
    {
        $this->idcardtype = $idcardtype;

        return $this;
    }

    /**
     * Get idcardtype
     *
     * @return string 
     */
    public function getIdcardtype()
    {
        return $this->idcardtype;
    }

    /**
     * Set idcard
     *
     * @param string $idcard
     * @return PreCommonMemberProfile
     */
    public function setIdcard($idcard)
    {
        $this->idcard = $idcard;

        return $this;
    }

    /**
     * Get idcard
     *
     * @return string 
     */
    public function getIdcard()
    {
        return $this->idcard;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return PreCommonMemberProfile
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return PreCommonMemberProfile
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return PreCommonMemberProfile
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set birthprovince
     *
     * @param string $birthprovince
     * @return PreCommonMemberProfile
     */
    public function setBirthprovince($birthprovince)
    {
        $this->birthprovince = $birthprovince;

        return $this;
    }

    /**
     * Get birthprovince
     *
     * @return string 
     */
    public function getBirthprovince()
    {
        return $this->birthprovince;
    }

    /**
     * Set birthcity
     *
     * @param string $birthcity
     * @return PreCommonMemberProfile
     */
    public function setBirthcity($birthcity)
    {
        $this->birthcity = $birthcity;

        return $this;
    }

    /**
     * Get birthcity
     *
     * @return string 
     */
    public function getBirthcity()
    {
        return $this->birthcity;
    }

    /**
     * Set birthdist
     *
     * @param string $birthdist
     * @return PreCommonMemberProfile
     */
    public function setBirthdist($birthdist)
    {
        $this->birthdist = $birthdist;

        return $this;
    }

    /**
     * Get birthdist
     *
     * @return string 
     */
    public function getBirthdist()
    {
        return $this->birthdist;
    }

    /**
     * Set birthcommunity
     *
     * @param string $birthcommunity
     * @return PreCommonMemberProfile
     */
    public function setBirthcommunity($birthcommunity)
    {
        $this->birthcommunity = $birthcommunity;

        return $this;
    }

    /**
     * Get birthcommunity
     *
     * @return string 
     */
    public function getBirthcommunity()
    {
        return $this->birthcommunity;
    }

    /**
     * Set resideprovince
     *
     * @param string $resideprovince
     * @return PreCommonMemberProfile
     */
    public function setResideprovince($resideprovince)
    {
        $this->resideprovince = $resideprovince;

        return $this;
    }

    /**
     * Get resideprovince
     *
     * @return string 
     */
    public function getResideprovince()
    {
        return $this->resideprovince;
    }

    /**
     * Set residecity
     *
     * @param string $residecity
     * @return PreCommonMemberProfile
     */
    public function setResidecity($residecity)
    {
        $this->residecity = $residecity;

        return $this;
    }

    /**
     * Get residecity
     *
     * @return string 
     */
    public function getResidecity()
    {
        return $this->residecity;
    }

    /**
     * Set residedist
     *
     * @param string $residedist
     * @return PreCommonMemberProfile
     */
    public function setResidedist($residedist)
    {
        $this->residedist = $residedist;

        return $this;
    }

    /**
     * Get residedist
     *
     * @return string 
     */
    public function getResidedist()
    {
        return $this->residedist;
    }

    /**
     * Set residecommunity
     *
     * @param string $residecommunity
     * @return PreCommonMemberProfile
     */
    public function setResidecommunity($residecommunity)
    {
        $this->residecommunity = $residecommunity;

        return $this;
    }

    /**
     * Get residecommunity
     *
     * @return string 
     */
    public function getResidecommunity()
    {
        return $this->residecommunity;
    }

    /**
     * Set residesuite
     *
     * @param string $residesuite
     * @return PreCommonMemberProfile
     */
    public function setResidesuite($residesuite)
    {
        $this->residesuite = $residesuite;

        return $this;
    }

    /**
     * Get residesuite
     *
     * @return string 
     */
    public function getResidesuite()
    {
        return $this->residesuite;
    }

    /**
     * Set graduateschool
     *
     * @param string $graduateschool
     * @return PreCommonMemberProfile
     */
    public function setGraduateschool($graduateschool)
    {
        $this->graduateschool = $graduateschool;

        return $this;
    }

    /**
     * Get graduateschool
     *
     * @return string 
     */
    public function getGraduateschool()
    {
        return $this->graduateschool;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return PreCommonMemberProfile
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set education
     *
     * @param string $education
     * @return PreCommonMemberProfile
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     * @return PreCommonMemberProfile
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return PreCommonMemberProfile
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set revenue
     *
     * @param string $revenue
     * @return PreCommonMemberProfile
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;

        return $this;
    }

    /**
     * Get revenue
     *
     * @return string 
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Set affectivestatus
     *
     * @param string $affectivestatus
     * @return PreCommonMemberProfile
     */
    public function setAffectivestatus($affectivestatus)
    {
        $this->affectivestatus = $affectivestatus;

        return $this;
    }

    /**
     * Get affectivestatus
     *
     * @return string 
     */
    public function getAffectivestatus()
    {
        return $this->affectivestatus;
    }

    /**
     * Set lookingfor
     *
     * @param string $lookingfor
     * @return PreCommonMemberProfile
     */
    public function setLookingfor($lookingfor)
    {
        $this->lookingfor = $lookingfor;

        return $this;
    }

    /**
     * Get lookingfor
     *
     * @return string 
     */
    public function getLookingfor()
    {
        return $this->lookingfor;
    }

    /**
     * Set bloodtype
     *
     * @param string $bloodtype
     * @return PreCommonMemberProfile
     */
    public function setBloodtype($bloodtype)
    {
        $this->bloodtype = $bloodtype;

        return $this;
    }

    /**
     * Get bloodtype
     *
     * @return string 
     */
    public function getBloodtype()
    {
        return $this->bloodtype;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return PreCommonMemberProfile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return PreCommonMemberProfile
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set alipay
     *
     * @param string $alipay
     * @return PreCommonMemberProfile
     */
    public function setAlipay($alipay)
    {
        $this->alipay = $alipay;

        return $this;
    }

    /**
     * Get alipay
     *
     * @return string 
     */
    public function getAlipay()
    {
        return $this->alipay;
    }

    /**
     * Set icq
     *
     * @param string $icq
     * @return PreCommonMemberProfile
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;

        return $this;
    }

    /**
     * Get icq
     *
     * @return string 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set qq
     *
     * @param string $qq
     * @return PreCommonMemberProfile
     */
    public function setQq($qq)
    {
        $this->qq = $qq;

        return $this;
    }

    /**
     * Get qq
     *
     * @return string 
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set yahoo
     *
     * @param string $yahoo
     * @return PreCommonMemberProfile
     */
    public function setYahoo($yahoo)
    {
        $this->yahoo = $yahoo;

        return $this;
    }

    /**
     * Get yahoo
     *
     * @return string 
     */
    public function getYahoo()
    {
        return $this->yahoo;
    }

    /**
     * Set msn
     *
     * @param string $msn
     * @return PreCommonMemberProfile
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string 
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set taobao
     *
     * @param string $taobao
     * @return PreCommonMemberProfile
     */
    public function setTaobao($taobao)
    {
        $this->taobao = $taobao;

        return $this;
    }

    /**
     * Get taobao
     *
     * @return string 
     */
    public function getTaobao()
    {
        return $this->taobao;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return PreCommonMemberProfile
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return PreCommonMemberProfile
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set interest
     *
     * @param string $interest
     * @return PreCommonMemberProfile
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string 
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set field1
     *
     * @param string $field1
     * @return PreCommonMemberProfile
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get field1
     *
     * @return string 
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set field2
     *
     * @param string $field2
     * @return PreCommonMemberProfile
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Get field2
     *
     * @return string 
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set field3
     *
     * @param string $field3
     * @return PreCommonMemberProfile
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Get field3
     *
     * @return string 
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set field4
     *
     * @param string $field4
     * @return PreCommonMemberProfile
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * Get field4
     *
     * @return string 
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Set field5
     *
     * @param string $field5
     * @return PreCommonMemberProfile
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * Get field5
     *
     * @return string 
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Set field6
     *
     * @param string $field6
     * @return PreCommonMemberProfile
     */
    public function setField6($field6)
    {
        $this->field6 = $field6;

        return $this;
    }

    /**
     * Get field6
     *
     * @return string 
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Set field7
     *
     * @param string $field7
     * @return PreCommonMemberProfile
     */
    public function setField7($field7)
    {
        $this->field7 = $field7;

        return $this;
    }

    /**
     * Get field7
     *
     * @return string 
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Set field8
     *
     * @param string $field8
     * @return PreCommonMemberProfile
     */
    public function setField8($field8)
    {
        $this->field8 = $field8;

        return $this;
    }

    /**
     * Get field8
     *
     * @return string 
     */
    public function getField8()
    {
        return $this->field8;
    }
}
