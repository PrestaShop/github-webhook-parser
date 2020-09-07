<?php declare(strict_types=1);

namespace PrestaShop\Github;

use PrestaShop\Github\Event\GithubEventInterface;
use PrestaShop\Github\Event\IssueEvent;
use PrestaShop\Github\Event\PullRequestEvent;
use PrestaShop\Github\Event\StatusEvent;
use PrestaShop\Github\Exception\EventNotHandledException;

class WebhookHandler
{
    /**
     * @param array $data
     *
     * @return GithubEventInterface
     *
     * @throws EventNotHandledException
     */
    public function handle(array $data)
    {
        foreach ($this->getEventTypes() as $eventType) {
            if ($eventType::isValid($data)) {
                return $eventType::createFromArray($data);
            }
        }

        throw new EventNotHandledException('Not Found');
    }

    /**
     * @return GithubEventInterface[]
     */
    private function getEventTypes(): array
    {
        return [
            PullRequestEvent::class,
            IssueEvent::class,
            StatusEvent::class,
        ];
    }
}
