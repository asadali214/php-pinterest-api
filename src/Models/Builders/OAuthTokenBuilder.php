<?php

declare(strict_types=1);

/*
 * PinterestAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PinterestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PinterestAPILib\Models\OAuthToken;

/**
 * Builder for model OAuthToken
 *
 * @see OAuthToken
 */
class OAuthTokenBuilder
{
    /**
     * @var OAuthToken
     */
    private $instance;

    private function __construct(OAuthToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new oauth token Builder object.
     */
    public static function init(string $accessToken, string $tokenType): self
    {
        return new self(new OAuthToken($accessToken, $tokenType));
    }

    /**
     * Sets expires in field.
     */
    public function expiresIn(?int $value): self
    {
        $this->instance->setExpiresIn($value);
        return $this;
    }

    /**
     * Sets scope field.
     */
    public function scope(?string $value): self
    {
        $this->instance->setScope($value);
        return $this;
    }

    /**
     * Sets expiry field.
     */
    public function expiry(?int $value): self
    {
        $this->instance->setExpiry($value);
        return $this;
    }

    /**
     * Sets refresh token field.
     */
    public function refreshToken(?string $value): self
    {
        $this->instance->setRefreshToken($value);
        return $this;
    }

    /**
     * Initializes a new oauth token object.
     */
    public function build(): OAuthToken
    {
        return CoreHelper::clone($this->instance);
    }
}
