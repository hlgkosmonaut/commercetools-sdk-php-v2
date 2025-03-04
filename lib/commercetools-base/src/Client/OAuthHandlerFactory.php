<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\Client;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Simple\FilesystemCache;

class OAuthHandlerFactory
{
    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     * @psalm-return CacheItemPoolInterface|CacheInterface
     */
    private static function validateCache($cache = null)
    {
        if ($cache instanceof CacheItemPoolInterface || $cache instanceof CacheInterface) {
            return $cache;
        }

        if (class_exists('Symfony\Component\Cache\Simple\FilesystemCache')) {
            /** @psalm-suppress all */
            /** @var CacheItemPoolInterface $cache */
            $cache = new FilesystemCache('', 0, getcwd() . "/cache");
        } else {
            /** @psalm-suppress all */
            /** @var CacheItemPoolInterface $cache */
            $cache = new FilesystemAdapter('', 0, getcwd() . "/cache");
        }

        return $cache;
    }

    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     */
    public static function ofAuthConfig(AuthConfig $authConfig, $cache = null): OAuth2Handler
    {
        $cache = self::validateCache($cache);
        switch (true) {
            case $authConfig instanceof ClientCredentialsConfig:
                $provider = new CachedTokenProvider(
                    new ClientCredentialTokenProvider(
                        new Client($authConfig->getOptions()),
                        $authConfig->getAuthUri(),
                        $authConfig->getCredentials()
                    ),
                    $cache,
                    $authConfig->getCredentials()->getCacheKey()
                );
                break;
            default:
                throw new InvalidArgumentException('Unknown authorization configuration');

        }
        return self::ofProvider($provider);
    }

    public static function ofProvider(TokenProvider $provider): OAuth2Handler
    {
        return new OAuth2Handler($provider);
    }
}
