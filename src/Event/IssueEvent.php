<?php declare(strict_types=1);

namespace PrestaShop\Github\Event;

use PrestaShop\Github\Entity\Issue;

class IssueEvent extends AbstractGithubEvent
{
    /** @var Issue */
    private $issue;

    /**
     * {@inheritdoc}
     */
    public static function name(): string
    {
        return 'IssueEvent';
    }

    /**
     * {@inheritdoc}
     */
    public static function getValidationFields(): array
    {
        return ['issue'];
    }

    /**
     * @param array $data
     *
     * @return static
     */
    public static function createFromArray(array $data)
    {
        $event = new static($data);
        $event->issue = new Issue($data['issue']);

        return $event;
    }

    /**
     * @return Issue
     */
    public function getIssue(): Issue
    {
        return $this->issue;
    }
}
