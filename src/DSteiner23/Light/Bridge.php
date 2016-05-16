<?php

namespace DSteiner23\Light;

/**
 * Class Bridge
 * @package DSteiner23\Light
 */
class Bridge
{
    //@todo: fill bridge infos from configuration file
    /**
     * @var string
     */
    private $id = "001788fffe2894cf";

    /**
     * @var string
     */
    private $ip = "192.168.0.100";

    /**
     * @var string
     */
    private $user = "rYKVugZyal4cIdMHAfVY9Vd-BPOXKlklr5u4HslQ";

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}