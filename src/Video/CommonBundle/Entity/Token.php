<?php

namespace Video\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Token
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apply_name", type="string", length=50)
     */
    private $applyName;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token", type="string", length=255)
     */
    private $accessToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime")
     */
    private $createTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="limit_time", type="datetime")
     */
    private $limitTime;

    private $state;

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
     * Set applyName
     *
     * @param string $applyName
     * @return Token
     */
    public function setApplyName($applyName)
    {
        $this->applyName = $applyName;

        return $this;
    }

    /**
     * Get applyName
     *
     * @return string 
     */
    public function getApplyName()
    {
        return $this->applyName;
    }

    /**
     * Set accessToken
     *
     * @param string $accessToken
     * @return Token
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Get accessToken
     *
     * @return string 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set limitTime
     *
     * @param \DateTime $limitTime
     * @return Token
     */
    public function setLimitTime($limitTime)
    {
        $this->limitTime = $limitTime;

        return $this;
    }

    /**
     * Get limitTime
     *
     * @return \DateTime 
     */
    public function getLimitTime()
    {
        return $this->limitTime;
    }
        /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Token
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Token
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }
}
