<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class PullRequest
{
    /** @var String */
    private $url;

    /** @var int */
    private $id;

    /** @var string */
    private $nodeId;

    /** @var string */
    private $htmlUrl;

    /** @var string|null */
    private $diffUrl;

    /** @var string|null */
    private $patchUrl;

    /** @var string|null */
    private $issueUrl;

    /** @var string|null */
    private $commitsUrl;

    /** @var string|null */
    private $reviewCommentsUrl;

    /** @var string|null */
    private $reviewCommentUrl;

    /** @var string */
    private $commentsUrl;

    /** @var string|null */
    private $statuesUrl;

    /** @var int */
    private $number;

    /** @var string */
    private $state;

    /** @var bool */
    private $locked;

    /** @var string */
    private $title;

    /** @var User */
    private $user;

    /** @var string|null */
    private $body;

    /** @var array */
    private $labels;

    /** @var array|null */
    private $milestone;

    /** @var string */
    private $createdAt;

    /** @var string|null */
    private $updatedAt;

    /** @var string|null */
    private $closedAt;

    /** @var string|null */
    private $mergedAt;

    /** @var string|null */
    private $mergeCommitSha;

    /** @var User|null */
    private $assignee;

    /** @var User[] */
    private $assignees;

    /** @var User[] */
    private $requestedReviewers;

    /** @var array */
    private $requestedTeams;

    /** @var array|null */
    private $head;

    /** @var array|null */
    private $base;

    /** @var string */
    private $authorAssociation;

    /** @var bool */
    private $draft;

    /** @var bool|null */
    private $merged;

    /** @var bool|null */
    private $mergeable;

    /** @var bool|null */
    private $rebaseable;

    /** @var string|null */
    private $mergeableState;

    /** @var User|null */
    private $mergedBy;

    /** @var int|null */
    private $comments;

    /** @var int|null */
    private $reviewComments;

    /** @var bool|null */
    private $maintainerCanModify;

    /** @var int|null */
    private $commits;

    /** @var int|null */
    private $additions;

    /** @var int|null */
    private $deletions;

    /** @var int|null */
    private $changedFiles;

    public function __construct(array $data)
    {
        $this->url = $data['url'];
        $this->id = $data['id'];
        $this->nodeId = $data['node_id'];
        $this->htmlUrl = $data['html_url'];
        $this->diffUrl = $data['diff_url'] ?? null;
        $this->patchUrl = $data['patch_url'] ?? null;
        $this->issueUrl = $data['issue_url'] ?? null;
        $this->commitsUrl = $data['commits_url'] ?? null;
        $this->reviewCommentsUrl = $data['review_comments_url'] ?? null;
        $this->reviewCommentUrl = $data['review_comment_url'] ?? null;
        $this->commentsUrl = $data['comments_url'];
        $this->statuesUrl = $data['statuses_url'] ?? null;
        $this->number = $data['number'];
        $this->state = $data['state'];
        $this->locked = $data['locked'];
        $this->title = $data['title'];
        $this->user = new User($data['user']);
        $this->body = $data['body'] ?? null;
        $this->labels = $data['labels'] ?? null;
        $this->milestone = $data['milestone'] ?? null;
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->closedAt = $data['closed_at'] ?? null;
        $this->mergedAt = $data['merged_at'] ?? null;
        $this->mergeCommitSha = $data['merge_commit_sha'] ?? null;
        $this->assignee = isset($data['assignee']) ? new User($data['assignee']) : null;
        $this->assignees = User::createArrayFromArray($data['assignees'] ?? []);
        $this->requestedReviewers = User::createArrayFromArray($data['requested_reviewers'] ?? []);
        $this->requestedTeams = $data['requested_teams'] ?? [];
        $this->head = $data['head'] ?? null;
        $this->base = $data['base'] ?? null;
        $this->authorAssociation = $data['author_association'];
        $this->draft = $data['draft'];
        $this->merged = $data['merged'] ?? null;
        $this->mergeable = $data['mergeable'] ?? null;
        $this->rebaseable = $data['rebaseable'] ?? null;
        $this->mergeableState = $data['merge_state'] ?? null;
        $this->mergedBy = isset($data['merged_by']) ? new User($data['merged_by']) : null;
        $this->comments = $data['comments'] ?? null;
        $this->reviewComments = $data['review_comments'] ?? null;
        $this->maintainerCanModify = $data['maintainer_can_modify'] ?? null;
        $this->commits = $data['commits'] ?? null;
        $this->additions = $data['additions'] ?? null;
        $this->deletions = $data['deletions'] ?? null;
        $this->changedFiles = $data['changed_files'] ?? null;
    }

    /**
     * @return String
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param String $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
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
     * @return string|null
     */
    public function getDiffUrl(): ?string
    {
        return $this->diffUrl;
    }

    /**
     * @param string|null $diffUrl
     */
    public function setDiffUrl(?string $diffUrl): void
    {
        $this->diffUrl = $diffUrl;
    }

    /**
     * @return string|null
     */
    public function getPatchUrl(): ?string
    {
        return $this->patchUrl;
    }

    /**
     * @param string|null $patchUrl
     */
    public function setPatchUrl(?string $patchUrl): void
    {
        $this->patchUrl = $patchUrl;
    }

    /**
     * @return string|null
     */
    public function getIssueUrl(): ?string
    {
        return $this->issueUrl;
    }

    /**
     * @param string|null $issueUrl
     */
    public function setIssueUrl(?string $issueUrl): void
    {
        $this->issueUrl = $issueUrl;
    }

    /**
     * @return string|null
     */
    public function getCommitsUrl(): ?string
    {
        return $this->commitsUrl;
    }

    /**
     * @param string|null $commitsUrl
     */
    public function setCommitsUrl(?string $commitsUrl): void
    {
        $this->commitsUrl = $commitsUrl;
    }

    /**
     * @return string|null
     */
    public function getReviewCommentsUrl(): ?string
    {
        return $this->reviewCommentsUrl;
    }

    /**
     * @param string|null $reviewCommentsUrl
     */
    public function setReviewCommentsUrl(?string $reviewCommentsUrl): void
    {
        $this->reviewCommentsUrl = $reviewCommentsUrl;
    }

    /**
     * @return string|null
     */
    public function getReviewCommentUrl(): ?string
    {
        return $this->reviewCommentUrl;
    }

    /**
     * @param string|null $reviewCommentUrl
     */
    public function setReviewCommentUrl(?string $reviewCommentUrl): void
    {
        $this->reviewCommentUrl = $reviewCommentUrl;
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
     * @return string|null
     */
    public function getStatuesUrl(): ?string
    {
        return $this->statuesUrl;
    }

    /**
     * @param string|null $statuesUrl
     */
    public function setStatuesUrl(?string $statuesUrl): void
    {
        $this->statuesUrl = $statuesUrl;
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
     * @return string|null
     */
    public function getMergedAt(): ?string
    {
        return $this->mergedAt;
    }

    /**
     * @param string|null $mergedAt
     */
    public function setMergedAt(?string $mergedAt): void
    {
        $this->mergedAt = $mergedAt;
    }

    /**
     * @return string|null
     */
    public function getMergeCommitSha(): ?string
    {
        return $this->mergeCommitSha;
    }

    /**
     * @param string|null $mergeCommitSha
     */
    public function setMergeCommitSha(?string $mergeCommitSha): void
    {
        $this->mergeCommitSha = $mergeCommitSha;
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
     * @param User[] $assignees
     */
    public function setAssignees(array $assignees): void
    {
        $this->assignees = $assignees;
    }

    /**
     * @return User[]
     */
    public function getRequestedReviewers(): array
    {
        return $this->requestedReviewers;
    }

    /**
     * @param User[] $requestedReviewers
     */
    public function setRequestedReviewers(array $requestedReviewers): void
    {
        $this->requestedReviewers = $requestedReviewers;
    }

    /**
     * @return array
     */
    public function getRequestedTeams(): array
    {
        return $this->requestedTeams;
    }

    /**
     * @param array $requestedTeams
     */
    public function setRequestedTeams(array $requestedTeams): void
    {
        $this->requestedTeams = $requestedTeams;
    }

    /**
     * @return array|null
     */
    public function getHead(): ?array
    {
        return $this->head;
    }

    /**
     * @param array|null $head
     */
    public function setHead(?array $head): void
    {
        $this->head = $head;
    }

    /**
     * @return array|null
     */
    public function getBase(): ?array
    {
        return $this->base;
    }

    /**
     * @param array|null $base
     */
    public function setBase(?array $base): void
    {
        $this->base = $base;
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
     * @return bool
     */
    public function isDraft(): bool
    {
        return $this->draft;
    }

    /**
     * @param bool $draft
     */
    public function setDraft(bool $draft): void
    {
        $this->draft = $draft;
    }

    /**
     * @return bool|null
     */
    public function getMerged(): ?bool
    {
        return $this->merged;
    }

    /**
     * @param bool|null $merged
     */
    public function setMerged(?bool $merged): void
    {
        $this->merged = $merged;
    }

    /**
     * @return bool|null
     */
    public function getMergeable(): ?bool
    {
        return $this->mergeable;
    }

    /**
     * @param bool|null $mergeable
     */
    public function setMergeable(?bool $mergeable): void
    {
        $this->mergeable = $mergeable;
    }

    /**
     * @return bool|null
     */
    public function getRebaseable(): ?bool
    {
        return $this->rebaseable;
    }

    /**
     * @param bool|null $rebaseable
     */
    public function setRebaseable(?bool $rebaseable): void
    {
        $this->rebaseable = $rebaseable;
    }

    /**
     * @return string|null
     */
    public function getMergeableState(): ?string
    {
        return $this->mergeableState;
    }

    /**
     * @param string|null $mergeableState
     */
    public function setMergeableState(?string $mergeableState): void
    {
        $this->mergeableState = $mergeableState;
    }

    /**
     * @return User|null
     */
    public function getMergedBy(): ?User
    {
        return $this->mergedBy;
    }

    /**
     * @param User|null $mergedBy
     */
    public function setMergedBy(?User $mergedBy): void
    {
        $this->mergedBy = $mergedBy;
    }

    /**
     * @return int|null
     */
    public function getComments(): ?int
    {
        return $this->comments;
    }

    /**
     * @param int|null $comments
     */
    public function setComments(?int $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return int|null
     */
    public function getReviewComments(): ?int
    {
        return $this->reviewComments;
    }

    /**
     * @param int|null $reviewComments
     */
    public function setReviewComments(?int $reviewComments): void
    {
        $this->reviewComments = $reviewComments;
    }

    /**
     * @return bool|null
     */
    public function getMaintainerCanModify(): ?bool
    {
        return $this->maintainerCanModify;
    }

    /**
     * @param bool|null $maintainerCanModify
     */
    public function setMaintainerCanModify(?bool $maintainerCanModify): void
    {
        $this->maintainerCanModify = $maintainerCanModify;
    }

    /**
     * @return int|null
     */
    public function getCommits(): ?int
    {
        return $this->commits;
    }

    /**
     * @param int|null $commits
     */
    public function setCommits(?int $commits): void
    {
        $this->commits = $commits;
    }

    /**
     * @return int|null
     */
    public function getAdditions(): ?int
    {
        return $this->additions;
    }

    /**
     * @param int|null $additions
     */
    public function setAdditions(?int $additions): void
    {
        $this->additions = $additions;
    }

    /**
     * @return int|null
     */
    public function getDeletions(): ?int
    {
        return $this->deletions;
    }

    /**
     * @param int|null $deletions
     */
    public function setDeletions(?int $deletions): void
    {
        $this->deletions = $deletions;
    }

    /**
     * @return int|null
     */
    public function getChangedFiles(): ?int
    {
        return $this->changedFiles;
    }

    /**
     * @param int|null $changedFiles
     */
    public function setChangedFiles(?int $changedFiles): void
    {
        $this->changedFiles = $changedFiles;
    }

    public function isClosed(): bool
    {
        return 'closed' === $this->state;
    }
}
