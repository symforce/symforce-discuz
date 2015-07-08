<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumBbcode
 *
 * @ORM\Table(name="pre_forum_bbcode")
 * @ORM\Entity
 */
class PreForumBbcode
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
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=false)
     */
    private $tag = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="replacement", type="text", nullable=false)
     */
    private $replacement;

    /**
     * @var string
     *
     * @ORM\Column(name="example", type="string", length=255, nullable=false)
     */
    private $example = '';

    /**
     * @var string
     *
     * @ORM\Column(name="explanation", type="text", nullable=false)
     */
    private $explanation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="params", type="boolean", nullable=false)
     */
    private $params = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="prompt", type="text", nullable=false)
     */
    private $prompt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nest", type="boolean", nullable=false)
     */
    private $nest = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="perm", type="text", nullable=false)
     */
    private $perm;



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
     * Set available
     *
     * @param boolean $available
     * @return PreForumBbcode
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return PreForumBbcode
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreForumBbcode
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set replacement
     *
     * @param string $replacement
     * @return PreForumBbcode
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;

        return $this;
    }

    /**
     * Get replacement
     *
     * @return string 
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * Set example
     *
     * @param string $example
     * @return PreForumBbcode
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    /**
     * Get example
     *
     * @return string 
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set explanation
     *
     * @param string $explanation
     * @return PreForumBbcode
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Get explanation
     *
     * @return string 
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Set params
     *
     * @param boolean $params
     * @return PreForumBbcode
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return boolean 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set prompt
     *
     * @param string $prompt
     * @return PreForumBbcode
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * Get prompt
     *
     * @return string 
     */
    public function getPrompt()
    {
        return $this->prompt;
    }

    /**
     * Set nest
     *
     * @param boolean $nest
     * @return PreForumBbcode
     */
    public function setNest($nest)
    {
        $this->nest = $nest;

        return $this;
    }

    /**
     * Get nest
     *
     * @return boolean 
     */
    public function getNest()
    {
        return $this->nest;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumBbcode
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
     * Set perm
     *
     * @param string $perm
     * @return PreForumBbcode
     */
    public function setPerm($perm)
    {
        $this->perm = $perm;

        return $this;
    }

    /**
     * Get perm
     *
     * @return string 
     */
    public function getPerm()
    {
        return $this->perm;
    }
}
