<?php namespace HackTheDinos\Services;

use HackTheDinos\Repositories\Interfaces;

class LoginChecker implements \OAuth2\Storage\UserCredentialsInterface
{
    /**
     * @var Interfaces\Users
     */
    private $usersRepo;

    public function __construct(Interfaces\Users $usersRepo)
    {
        $this->usersRepo = $usersRepo;
    }

    /**
     * Grant access tokens for basic user credentials.
     *
     * Check the supplied username and password for validity.
     *
     * You can also use the $client_id param to do any checks required based
     * on a client, if you need that.
     *
     * Required for OAuth2::GRANT_TYPE_USER_CREDENTIALS.
     *
     * @param string $username Username to be check with.
     * @param string $password Password to be check with.
     *
     * @return bool TRUE if the username and password are valid, and FALSE if it isn't.
     */
    public function checkUserCredentials($username, $password)
    {
        return !is_null($this->usersRepo->getByEmailAndPassword($username, $password));
    }

    /**
     * @param string $username
     * @return ARRAY the associated "user_id" and optional "scope" values
     * This function MUST return FALSE if the requested user does not exist or is
     * invalid. "scope" is a space-separated list of restricted scopes.
     * @code
     * return array(
     *     "user_id"  => USER_ID,    // REQUIRED user_id to be stored with the authorization code or access token
     *     "scope"    => SCOPE       // OPTIONAL space-separated list of restricted scopes
     * );
     * @endcode
     */
    public function getUserDetails($username)
    {
        $users = $this->usersRepo->getAll(['email' => $username], 1);
        return empty($users) ? false : ['user_id' => $users[0]->id, 'scope' => 'user'];
    }
}
