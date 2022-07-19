<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\UserNotFoundException;

class AccountUsernameExistsWithoutGitHubException extends UserNotFoundException
{
    public function __construct(private string $username)
    {
    }

    public function getMessageKey(): string
    {
        return 'An account with your GitHub username ('.$this->username.') already exists on Packagist.org but it is not linked to your GitHub account. '
            . 'Please log in to it via username/password and then connect your GitHub account from the Profile > Settings page.';
    }
}
