<?php namespace Stevenmaguire\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\StandardUser;

/**
 * @property array $response
 * @property string $uid
 */
class User extends StandardUser
{
    /**
     * Get user email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get user firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->response['first_name'] ?: null;
    }

    /**
     * Get user imageurl
     *
     * @return string
     */
    public function getImageurl()
    {
        return $this->response['picture'] ?: null;
    }

    /**
     * Get user lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->response['last_name'] ?: null;
    }

    /**
     * Get user userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->uid;
    }
}
