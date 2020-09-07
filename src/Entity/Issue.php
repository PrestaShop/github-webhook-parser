<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class Issue
{
    /** @var string */
    private $url;

    /** @var string */
    private $repositoryUrl;

    /** @var string */
    private $labelsUrl;

    /** @var string */
    private $commentsUrl;

    /** @var string */
    private $eventsUrl;

    /** @var string */
    private $htmlUrl;

    /** @var int */
    private $id;

    /** @var string */
    private $nodeId;

    /** @var int */
    private $number;

    /** @var string */
    private $title;

    /** @var User */
    private $user;

    /** @var array */
    private $labels;

    /** @var string */
    private $state;

    /** @var bool */
    private $locked;

    /** @var User|null */
    private $assignee;

    /** @var User[] */
    private $assignees;

    /** @var array|null */
    private $milestone;

    /** @var int */
    private $comments;

    /** @var string */
    private $createdAt;

    /** @var string|null */
    private $updatedAt;

    /** @var string|null */
    private $closedAt;

    /** @var string */
    private $authorAssociation;

    /** @var string|null */
    private $body;

    public function __construct(array $data)
    {
        $this->url = $data['url'];
        $this->repositoryUrl = $data['repository_url'];
        $this->labelsUrl = $data['labels_url'];
        $this->commentsUrl = $data['comments_url'];
        $this->eventsUrl = $data['events_url'];
        $this->htmlUrl = $data['html_url'];
        $this->id = $data['id'];
        $this->nodeId = $data['node_id'];
        $this->number = $data['number'];
        $this->title = $data['title'];
        $this->user = new User($data['user']);
        $this->labels = $data['labels'];
        $this->state = $data['state'];
        $this->locked = $data['locked'];
        $this->assignee = isset($data['assignee']) ? new User($data['assignee']) : null;
        $this->assignees = User::createArrayFromArray($data['assignees']);
        $this->milestone = $data['milestone'];
        $this->comments = $data['comments'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
        $this->closedAt = $data['closed_at'];
        $this->authorAssociation = $data['author_association'];
        $this->body = $data['body'];
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getRepositoryUrl(): string
    {
        return $this->repositoryUrl;
    }

    /**
     * @param string $repositoryUrl
     */
    public function setRepositoryUrl(string $repositoryUrl): void
    {
        $this->repositoryUrl = $repositoryUrl;
    }

    /**
     * @return string
     */
    public function getLabelsUrl(): string
    {
        return $this->labelsUrl;
    }

    /**
     * @param string $labelsUrl
     */
    public function setLabelsUrl(string $labelsUrl): void
    {
        $this->labelsUrl = $labelsUrl;
    }

    /**
     * @return string
     */
    public function getCommentsUrl(): string
    {
        return $this->commentsUrl;
    }

    /**
     * @param string $commentsUrl
     */
    public function setCommentsUrl(string $commentsUrl): void
    {
        $this->commentsUrl = $commentsUrl;
    }

    /**
     * @return string
     */
    public function getEventsUrl(): string
    {
        return $this->eventsUrl;
    }

    /**
     * @param string $eventsUrl
     */
    public function setEventsUrl(string $eventsUrl): void
    {
        $this->eventsUrl = $eventsUrl;
    }

    /**
     * @return string
     */
    public function getHtmlUrl(): string
    {
        return $this->htmlUrl;
    }

    /**
     * @param string $htmlUrl
     */
    public function setHtmlUrl(string $htmlUrl): void
    {
        $this->htmlUrl = $htmlUrl;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNodeId(): string
    {
        return $this->nodeId;
    }

    /**
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels(array $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     */
    public function setLocked(bool $locked): void
    {
        $this->locked = $locked;
    }

    /**
     * @return User|null
     */
    public function getAssignee(): ?User
    {
        return $this->assignee;
    }

    /**
     * @param User|null $assignee
     */
    public function setAssignee(?User $assignee): void
    {
        $this->assignee = $assignee;
    }

    /**
     * @return User[]
     */
    public function getAssignees(): array
    {
        return $this->assignees;
    }

    /**
     * @param array $assignees
     */
    public function setAssignees(array $assignees): void
    {
        $this->assignees = $assignees;
    }

    /**
     * @return array|null
     */
    public function getMilestone(): ?array
    {
        return $this->milestone;
    }

    /**
     * @param array|null $milestone
     */
    public function setMilestone(?array $milestone): void
    {
        $this->milestone = $milestone;
    }

    /**
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     */
    public function setComments(int $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string|null $updatedAt
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string|null
     */
    public function getClosedAt(): ?string
    {
        return $this->closedAt;
    }

    /**
     * @param string|null $closedAt
     */
    public function setClosedAt(?string $closedAt): void
    {
        $this->closedAt = $closedAt;
    }

    /**
     * @return string
     */
    public function getAuthorAssociation(): string
    {
        return $this->authorAssociation;
    }

    /**
     * @param string $authorAssociation
     */
    public function setAuthorAssociation(string $authorAssociation): void
    {
        $this->authorAssociation = $authorAssociation;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }
}
