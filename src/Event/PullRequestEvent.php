<?php declare(strict_types=1);

namespace PrestaShop\Github\Event;

use PrestaShop\Github\Entity\PullRequest;

class PullRequestEvent extends AbstractGithubEvent
{
    /** @var PullRequest */
    private $pullRequest;

    /** @var array|null */
    private $label;

    /**
     * {@inheritdoc}
     */
    public static function name(): string
    {
        return 'PullRequestEvent';
    }

    /**
     * {@inheritdoc}
     */
    public static function getValidationFields(): array
    {
        return ['pull_request', 'number'];
    }

    /**
     * @param array $data
     *
     * @return static
     */
    public static function createFromArray(array $data)
    {
        $event = new static($data);
        $event->pullRequest = new PullRequest($data['pull_request']);
        $event->label = $data['label'] ?? null;

        return $event;
    }

    /**
     * @return PullRequest
     */
    public function getPullRequest(): PullRequest
    {
        return $this->pullRequest;
    }

    /**
     * @return array|null
     */
    public function getLabel(): ?array
    {
        return $this->label;
    }
}
