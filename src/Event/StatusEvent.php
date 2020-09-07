<?php declare(strict_types=1);

namespace PrestaShop\Github\Event;

class StatusEvent extends AbstractGithubEvent
{
    /**
     * {@inheritdoc}
     */
    public static function name(): string
    {
        return 'StatusEvent';
    }

    /**
     * {@inheritdoc}
     */
    public static function getValidationFields(): array
    {
        return ['sha', 'state', 'target_url'];
    }

    /**
     * @param array $data
     *
     * @return static
     */
    public static function createFromArray(array $data)
    {
        return new static($data);
    }
}
