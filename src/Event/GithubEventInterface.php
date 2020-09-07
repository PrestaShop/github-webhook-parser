<?php

namespace PrestaShop\Github\Event;

interface GithubEventInterface
{
    /**
     * @return string
     */
    public static function name(): string;

    /**
     * @return bool
     */
    public static function isValid(array $data): bool;

    /**
     * @param array $data
     *
     * @return GithubEventInterface
     */
    public static function createFromArray(array $data);
}
