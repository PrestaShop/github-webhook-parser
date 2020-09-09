<?php declare(strict_types=1);

namespace Test\PrestaShop\Github;

use PHPUnit\Framework\TestCase;
use PrestaShop\Github\Event\IssueEvent;
use PrestaShop\Github\Event\PullRequestEvent;
use PrestaShop\Github\Event\StatusEvent;
use PrestaShop\Github\Exception\EventNotHandledException;
use PrestaShop\Github\WebhookHandler;

class WebhookHandlerTest extends TestCase
{
    private $webhookHandler;

    public function setUp(): void
    {
        $this->webhookHandler = new WebhookHandler();
    }

    public function testPullRequestOpened()
    {
        $payload = json_decode(file_get_contents(__DIR__.'/stubs/pull_request_opened_event.json'), true);
        $event = $this->webhookHandler->handle($payload);

        $this->assertInstanceOf(PullRequestEvent::class, $event);
        $this->assertNotNull($event->getPullRequest());
    }

    public function testIssueEdited()
    {
        $payload = json_decode(file_get_contents(__DIR__.'/stubs/issue_edited_event.json'), true);
        $event = $this->webhookHandler->handle($payload);

        $this->assertInstanceOf(IssueEvent::class, $event);
        $this->assertNotNull($event->getIssue());
    }

    public function testStatus()
    {
        $payload = json_decode(file_get_contents(__DIR__.'/stubs/status_event.json'), true);
        $event = $this->webhookHandler->handle($payload);

        $this->assertInstanceOf(StatusEvent::class, $event);
        $this->assertNull($event->getAction());
    }

    public function testNotHandledEvent()
    {
        $payload = json_decode(file_get_contents(__DIR__.'/stubs/project_event.json'), true);
        $this->expectException(EventNotHandledException::class);
        $this->webhookHandler->handle($payload);
    }
}
