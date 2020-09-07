<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class Repository
{
    /** @var int */
    private $id;

    /** @var string */
    private $nodeId;

    /** @var string */
    private $name;

    /** @var string */
    private $fullName;

    /** @var bool */
    private $private;

    /** @var User */
    private $owner;

    /** @var string */
    private $htmlUrl;

    /** @var string|null */
    private $description;

    /** @var bool */
    private $fork;

    /** @var string */
    private $url;

    /** @var string */
    private $forksUrl;

    /** @var string */
    private $keysUrl;

    /** @var string */
    private $collaboratorsUrl;

    /** @var string */
    private $teamsUrl;

    /** @var string */
    private $hooksUrl;

    /** @var string */
    private $issueEventsUrl;

    /** @var string */
    private $eventsUrl;

    /** @var string */
    private $assigneesUrl;

    /** @var string */
    private $branchesUrl;

    /** @var string */
    private $tagsUrl;

    /** @var string */
    private $blobsUrl;

    /** @var string */
    private $gitTagsUrl;

    /** @var string */
    private $gitRefsUrl;

    /** @var string */
    private $treesUrl;

    /** @var string */
    private $statusesUrl;

    /** @var string */
    private $languagesUrl;

    /** @var string */
    private $stargazersUrl;

    /** @var string */
    private $contributorsUrl;

    /** @var string */
    private $subscribersUrl;

    /** @var string */
    private $subscriptionUrl;

    /** @var string */
    private $commitsUrl;

    /** @var string */
    private $gitCommitsUrl;

    /** @var string */
    private $commentsUrl;

    /** @var string */
    private $issueCommentUrl;

    /** @var string */
    private $contentsUrl;

    /** @var string */
    private $compareUrl;

    /** @var string */
    private $mergesUrl;

    /** @var string */
    private $archiveUrl;

    /** @var string */
    private $downloadsUrl;

    /** @var string */
    private $issuesUrl;

    /** @var string */
    private $pullsUrl;

    /** @var string */
    private $milestonesUrl;

    /** @var string */
    private $notificationsUrl;

    /** @var string */
    private $labelsUrl;

    /** @var string */
    private $releasesUrl;

    /** @var string */
    private $deploymentsUrl;

    /** @var string */
    private $createdAt;

    /** @var string|null */
    private $updatedAt;

    /** @var string|null */
    private $pushedAt;

    /** @var string */
    private $gitUrl;

    /** @var string */
    private $sshUrl;

    /** @var string */
    private $cloneUrl;

    /** @var string */
    private $svnUrl;

    /** @var string|null */
    private $homepage;

    /** @var int */
    private $size;

    /** @var int */
    private $stargazersCount;

    /** @var int */
    private $watchersCount;

    /** @var string|null */
    private $language;

    /** @var bool */
    private $hasIssues;

    /** @var bool */
    private $hasProjects;

    /** @var bool */
    private $hasDownloads;

    /** @var bool */
    private $hasWiki;

    /** @var bool */
    private $hasPages;

    /** @var int */
    private $forksCount;

    /** @var string|null */
    private $mirrorUrl;

    /** @var bool */
    private $archived;

    /** @var bool */
    private $disabled;

    /** @var int */
    private $openIssuesCount;

    /** @var string|null */
    private $license;

    /** @var int */
    private $forks;

    /** @var int */
    private $openIssues;

    /** @var int */
    private $watchers;

    /** @var string */
    private $defaultBranch;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->nodeId = $data['node_id'];
        $this->name = $data['name'];
        $this->fullName = $data['full_name'];
        $this->private = $data['private'];
        $this->owner = $data['owner'];
        $this->htmlUrl = $data['html_url'];
        $this->description = $data['description'];
        $this->fork = $data['fork'];
        $this->url = $data['url'];
        $this->forksUrl = $data['forks_url'];
        $this->keysUrl = $data['keys_url'];
        $this->collaboratorsUrl = $data['collaborators_url'];
        $this->teamsUrl = $data['teams_url'];
        $this->hooksUrl = $data['hooks_url'];
        $this->issueEventsUrl = $data['issue_events_url'];
        $this->eventsUrl = $data['events_url'];
        $this->assigneesUrl = $data['assignees_url'];
        $this->branchesUrl = $data['branches_url'];
        $this->tagsUrl = $data['tags_url'];
        $this->blobsUrl = $data['blobs_url'];
        $this->gitTagsUrl = $data['git_tags_url'];
        $this->gitRefsUrl = $data['git_refs_url'];
        $this->treesUrl = $data['trees_url'];
        $this->statusesUrl = $data['statuses_url'];
        $this->languagesUrl = $data['languages_url'];
        $this->stargazersUrl = $data['stargazers_url'];
        $this->contributorsUrl = $data['contributors_url'];
        $this->subscribersUrl = $data['subscribers_url'];
        $this->subscriptionUrl = $data['subscription_url'];
        $this->commitsUrl = $data['commits_url'];
        $this->gitCommitsUrl = $data['git_commits_url'];
        $this->commentsUrl = $data['comments_url'];
        $this->issueCommentUrl = $data['issue_comment_url'];
        $this->contentsUrl = $data['contents_url'];
        $this->compareUrl = $data['compare_url'];
        $this->mergesUrl = $data['merges_url'];
        $this->archiveUrl = $data['archive_url'];
        $this->downloadsUrl = $data['downloads_url'];
        $this->issuesUrl = $data['issues_url'];
        $this->pullsUrl = $data['pulls_url'];
        $this->milestonesUrl = $data['milestones_url'];
        $this->notificationsUrl = $data['notifications_url'];
        $this->labelsUrl = $data['labels_url'];
        $this->releasesUrl = $data['releases_url'];
        $this->deploymentsUrl = $data['deployments_url'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
        $this->pushedAt = $data['pushed_at'];
        $this->gitUrl = $data['git_url'];
        $this->sshUrl = $data['ssh_url'];
        $this->cloneUrl = $data['clone_url'];
        $this->svnUrl = $data['svn_url'];
        $this->homepage = $data['homepage'];
        $this->size = $data['size'];
        $this->stargazersCount = $data['stargazers_count'];
        $this->watchersCount = $data['watchers_count'];
        $this->language = $data['language'];
        $this->hasIssues = $data['has_issues'];
        $this->hasProjects = $data['has_projects'];
        $this->hasDownloads = $data['has_downloads'];
        $this->hasWiki = $data['has_wiki'];
        $this->hasPages = $data['has_pages'];
        $this->forksCount = $data['forks_count'];
        $this->mirrorUrl = $data['mirror_url'];
        $this->archived = $data['archived'];
        $this->disabled = $data['disabled'];
        $this->openIssuesCount = $data['open_issues_count'];
        $this->license = $data['license'];
        $this->forks = $data['forks'];
        $this->openIssues = $data['open_issues'];
        $this->watchers = $data['watchers'];
        $this->defaultBranch = $data['default_branch'];
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param bool $private
     */
    public function setPrivate(bool $private): void
    {
        $this->private = $private;
    }

    /**
     * @return User
     */
    public function getOwner(): User
    {
        return $this->owner;
    }

    /**
     * @param User $owner
     */
    public function setOwner(User $owner): void
    {
        $this->owner = $owner;
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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isFork(): bool
    {
        return $this->fork;
    }

    /**
     * @param bool $fork
     */
    public function setFork(bool $fork): void
    {
        $this->fork = $fork;
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
    public function getForksUrl(): string
    {
        return $this->forksUrl;
    }

    /**
     * @param string $forksUrl
     */
    public function setForksUrl(string $forksUrl): void
    {
        $this->forksUrl = $forksUrl;
    }

    /**
     * @return string
     */
    public function getKeysUrl(): string
    {
        return $this->keysUrl;
    }

    /**
     * @param string $keysUrl
     */
    public function setKeysUrl(string $keysUrl): void
    {
        $this->keysUrl = $keysUrl;
    }

    /**
     * @return string
     */
    public function getCollaboratorsUrl(): string
    {
        return $this->collaboratorsUrl;
    }

    /**
     * @param string $collaboratorsUrl
     */
    public function setCollaboratorsUrl(string $collaboratorsUrl): void
    {
        $this->collaboratorsUrl = $collaboratorsUrl;
    }

    /**
     * @return string
     */
    public function getTeamsUrl(): string
    {
        return $this->teamsUrl;
    }

    /**
     * @param string $teamsUrl
     */
    public function setTeamsUrl(string $teamsUrl): void
    {
        $this->teamsUrl = $teamsUrl;
    }

    /**
     * @return string
     */
    public function getHooksUrl(): string
    {
        return $this->hooksUrl;
    }

    /**
     * @param string $hooksUrl
     */
    public function setHooksUrl(string $hooksUrl): void
    {
        $this->hooksUrl = $hooksUrl;
    }

    /**
     * @return string
     */
    public function getIssueEventsUrl(): string
    {
        return $this->issueEventsUrl;
    }

    /**
     * @param string $issueEventsUrl
     */
    public function setIssueEventsUrl(string $issueEventsUrl): void
    {
        $this->issueEventsUrl = $issueEventsUrl;
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
    public function getAssigneesUrl(): string
    {
        return $this->assigneesUrl;
    }

    /**
     * @param string $assigneesUrl
     */
    public function setAssigneesUrl(string $assigneesUrl): void
    {
        $this->assigneesUrl = $assigneesUrl;
    }

    /**
     * @return string
     */
    public function getBranchesUrl(): string
    {
        return $this->branchesUrl;
    }

    /**
     * @param string $branchesUrl
     */
    public function setBranchesUrl(string $branchesUrl): void
    {
        $this->branchesUrl = $branchesUrl;
    }

    /**
     * @return string
     */
    public function getTagsUrl(): string
    {
        return $this->tagsUrl;
    }

    /**
     * @param string $tagsUrl
     */
    public function setTagsUrl(string $tagsUrl): void
    {
        $this->tagsUrl = $tagsUrl;
    }

    /**
     * @return string
     */
    public function getBlobsUrl(): string
    {
        return $this->blobsUrl;
    }

    /**
     * @param string $blobsUrl
     */
    public function setBlobsUrl(string $blobsUrl): void
    {
        $this->blobsUrl = $blobsUrl;
    }

    /**
     * @return string
     */
    public function getGitTagsUrl(): string
    {
        return $this->gitTagsUrl;
    }

    /**
     * @param string $gitTagsUrl
     */
    public function setGitTagsUrl(string $gitTagsUrl): void
    {
        $this->gitTagsUrl = $gitTagsUrl;
    }

    /**
     * @return string
     */
    public function getGitRefsUrl(): string
    {
        return $this->gitRefsUrl;
    }

    /**
     * @param string $gitRefsUrl
     */
    public function setGitRefsUrl(string $gitRefsUrl): void
    {
        $this->gitRefsUrl = $gitRefsUrl;
    }

    /**
     * @return string
     */
    public function getTreesUrl(): string
    {
        return $this->treesUrl;
    }

    /**
     * @param string $treesUrl
     */
    public function setTreesUrl(string $treesUrl): void
    {
        $this->treesUrl = $treesUrl;
    }

    /**
     * @return string
     */
    public function getStatusesUrl(): string
    {
        return $this->statusesUrl;
    }

    /**
     * @param string $statusesUrl
     */
    public function setStatusesUrl(string $statusesUrl): void
    {
        $this->statusesUrl = $statusesUrl;
    }

    /**
     * @return string
     */
    public function getLanguagesUrl(): string
    {
        return $this->languagesUrl;
    }

    /**
     * @param string $languagesUrl
     */
    public function setLanguagesUrl(string $languagesUrl): void
    {
        $this->languagesUrl = $languagesUrl;
    }

    /**
     * @return string
     */
    public function getStargazersUrl(): string
    {
        return $this->stargazersUrl;
    }

    /**
     * @param string $stargazersUrl
     */
    public function setStargazersUrl(string $stargazersUrl): void
    {
        $this->stargazersUrl = $stargazersUrl;
    }

    /**
     * @return string
     */
    public function getContributorsUrl(): string
    {
        return $this->contributorsUrl;
    }

    /**
     * @param string $contributorsUrl
     */
    public function setContributorsUrl(string $contributorsUrl): void
    {
        $this->contributorsUrl = $contributorsUrl;
    }

    /**
     * @return string
     */
    public function getSubscribersUrl(): string
    {
        return $this->subscribersUrl;
    }

    /**
     * @param string $subscribersUrl
     */
    public function setSubscribersUrl(string $subscribersUrl): void
    {
        $this->subscribersUrl = $subscribersUrl;
    }

    /**
     * @return string
     */
    public function getSubscriptionUrl(): string
    {
        return $this->subscriptionUrl;
    }

    /**
     * @param string $subscriptionUrl
     */
    public function setSubscriptionUrl(string $subscriptionUrl): void
    {
        $this->subscriptionUrl = $subscriptionUrl;
    }

    /**
     * @return string
     */
    public function getCommitsUrl(): string
    {
        return $this->commitsUrl;
    }

    /**
     * @param string $commitsUrl
     */
    public function setCommitsUrl(string $commitsUrl): void
    {
        $this->commitsUrl = $commitsUrl;
    }

    /**
     * @return string
     */
    public function getGitCommitsUrl(): string
    {
        return $this->gitCommitsUrl;
    }

    /**
     * @param string $gitCommitsUrl
     */
    public function setGitCommitsUrl(string $gitCommitsUrl): void
    {
        $this->gitCommitsUrl = $gitCommitsUrl;
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
    public function getIssueCommentUrl(): string
    {
        return $this->issueCommentUrl;
    }

    /**
     * @param string $issueCommentUrl
     */
    public function setIssueCommentUrl(string $issueCommentUrl): void
    {
        $this->issueCommentUrl = $issueCommentUrl;
    }

    /**
     * @return string
     */
    public function getContentsUrl(): string
    {
        return $this->contentsUrl;
    }

    /**
     * @param string $contentsUrl
     */
    public function setContentsUrl(string $contentsUrl): void
    {
        $this->contentsUrl = $contentsUrl;
    }

    /**
     * @return string
     */
    public function getCompareUrl(): string
    {
        return $this->compareUrl;
    }

    /**
     * @param string $compareUrl
     */
    public function setCompareUrl(string $compareUrl): void
    {
        $this->compareUrl = $compareUrl;
    }

    /**
     * @return string
     */
    public function getMergesUrl(): string
    {
        return $this->mergesUrl;
    }

    /**
     * @param string $mergesUrl
     */
    public function setMergesUrl(string $mergesUrl): void
    {
        $this->mergesUrl = $mergesUrl;
    }

    /**
     * @return string
     */
    public function getArchiveUrl(): string
    {
        return $this->archiveUrl;
    }

    /**
     * @param string $archiveUrl
     */
    public function setArchiveUrl(string $archiveUrl): void
    {
        $this->archiveUrl = $archiveUrl;
    }

    /**
     * @return string
     */
    public function getDownloadsUrl(): string
    {
        return $this->downloadsUrl;
    }

    /**
     * @param string $downloadsUrl
     */
    public function setDownloadsUrl(string $downloadsUrl): void
    {
        $this->downloadsUrl = $downloadsUrl;
    }

    /**
     * @return string
     */
    public function getIssuesUrl(): string
    {
        return $this->issuesUrl;
    }

    /**
     * @param string $issuesUrl
     */
    public function setIssuesUrl(string $issuesUrl): void
    {
        $this->issuesUrl = $issuesUrl;
    }

    /**
     * @return string
     */
    public function getPullsUrl(): string
    {
        return $this->pullsUrl;
    }

    /**
     * @param string $pullsUrl
     */
    public function setPullsUrl(string $pullsUrl): void
    {
        $this->pullsUrl = $pullsUrl;
    }

    /**
     * @return string
     */
    public function getMilestonesUrl(): string
    {
        return $this->milestonesUrl;
    }

    /**
     * @param string $milestonesUrl
     */
    public function setMilestonesUrl(string $milestonesUrl): void
    {
        $this->milestonesUrl = $milestonesUrl;
    }

    /**
     * @return string
     */
    public function getNotificationsUrl(): string
    {
        return $this->notificationsUrl;
    }

    /**
     * @param string $notificationsUrl
     */
    public function setNotificationsUrl(string $notificationsUrl): void
    {
        $this->notificationsUrl = $notificationsUrl;
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
    public function getReleasesUrl(): string
    {
        return $this->releasesUrl;
    }

    /**
     * @param string $releasesUrl
     */
    public function setReleasesUrl(string $releasesUrl): void
    {
        $this->releasesUrl = $releasesUrl;
    }

    /**
     * @return string
     */
    public function getDeploymentsUrl(): string
    {
        return $this->deploymentsUrl;
    }

    /**
     * @param string $deploymentsUrl
     */
    public function setDeploymentsUrl(string $deploymentsUrl): void
    {
        $this->deploymentsUrl = $deploymentsUrl;
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
    public function getPushedAt(): ?string
    {
        return $this->pushedAt;
    }

    /**
     * @param string|null $pushedAt
     */
    public function setPushedAt(?string $pushedAt): void
    {
        $this->pushedAt = $pushedAt;
    }

    /**
     * @return string
     */
    public function getGitUrl(): string
    {
        return $this->gitUrl;
    }

    /**
     * @param string $gitUrl
     */
    public function setGitUrl(string $gitUrl): void
    {
        $this->gitUrl = $gitUrl;
    }

    /**
     * @return string
     */
    public function getSshUrl(): string
    {
        return $this->sshUrl;
    }

    /**
     * @param string $sshUrl
     */
    public function setSshUrl(string $sshUrl): void
    {
        $this->sshUrl = $sshUrl;
    }

    /**
     * @return string
     */
    public function getCloneUrl(): string
    {
        return $this->cloneUrl;
    }

    /**
     * @param string $cloneUrl
     */
    public function setCloneUrl(string $cloneUrl): void
    {
        $this->cloneUrl = $cloneUrl;
    }

    /**
     * @return string
     */
    public function getSvnUrl(): string
    {
        return $this->svnUrl;
    }

    /**
     * @param string $svnUrl
     */
    public function setSvnUrl(string $svnUrl): void
    {
        $this->svnUrl = $svnUrl;
    }

    /**
     * @return string|null
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param string|null $homepage
     */
    public function setHomepage(?string $homepage): void
    {
        $this->homepage = $homepage;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getStargazersCount(): int
    {
        return $this->stargazersCount;
    }

    /**
     * @param int $stargazersCount
     */
    public function setStargazersCount(int $stargazersCount): void
    {
        $this->stargazersCount = $stargazersCount;
    }

    /**
     * @return int
     */
    public function getWatchersCount(): int
    {
        return $this->watchersCount;
    }

    /**
     * @param int $watchersCount
     */
    public function setWatchersCount(int $watchersCount): void
    {
        $this->watchersCount = $watchersCount;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return bool
     */
    public function isHasIssues(): bool
    {
        return $this->hasIssues;
    }

    /**
     * @param bool $hasIssues
     */
    public function setHasIssues(bool $hasIssues): void
    {
        $this->hasIssues = $hasIssues;
    }

    /**
     * @return bool
     */
    public function isHasProjects(): bool
    {
        return $this->hasProjects;
    }

    /**
     * @param bool $hasProjects
     */
    public function setHasProjects(bool $hasProjects): void
    {
        $this->hasProjects = $hasProjects;
    }

    /**
     * @return bool
     */
    public function isHasDownloads(): bool
    {
        return $this->hasDownloads;
    }

    /**
     * @param bool $hasDownloads
     */
    public function setHasDownloads(bool $hasDownloads): void
    {
        $this->hasDownloads = $hasDownloads;
    }

    /**
     * @return bool
     */
    public function isHasWiki(): bool
    {
        return $this->hasWiki;
    }

    /**
     * @param bool $hasWiki
     */
    public function setHasWiki(bool $hasWiki): void
    {
        $this->hasWiki = $hasWiki;
    }

    /**
     * @return bool
     */
    public function isHasPages(): bool
    {
        return $this->hasPages;
    }

    /**
     * @param bool $hasPages
     */
    public function setHasPages(bool $hasPages): void
    {
        $this->hasPages = $hasPages;
    }

    /**
     * @return int
     */
    public function getForksCount(): int
    {
        return $this->forksCount;
    }

    /**
     * @param int $forksCount
     */
    public function setForksCount(int $forksCount): void
    {
        $this->forksCount = $forksCount;
    }

    /**
     * @return string|null
     */
    public function getMirrorUrl(): ?string
    {
        return $this->mirrorUrl;
    }

    /**
     * @param string|null $mirrorUrl
     */
    public function setMirrorUrl(?string $mirrorUrl): void
    {
        $this->mirrorUrl = $mirrorUrl;
    }

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }

    /**
     * @param bool $archived
     */
    public function setArchived(bool $archived): void
    {
        $this->archived = $archived;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     */
    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return int
     */
    public function getOpenIssuesCount(): int
    {
        return $this->openIssuesCount;
    }

    /**
     * @param int $openIssuesCount
     */
    public function setOpenIssuesCount(int $openIssuesCount): void
    {
        $this->openIssuesCount = $openIssuesCount;
    }

    /**
     * @return string|null
     */
    public function getLicense(): ?string
    {
        return $this->license;
    }

    /**
     * @param string|null $license
     */
    public function setLicense(?string $license): void
    {
        $this->license = $license;
    }

    /**
     * @return int
     */
    public function getForks(): int
    {
        return $this->forks;
    }

    /**
     * @param int $forks
     */
    public function setForks(int $forks): void
    {
        $this->forks = $forks;
    }

    /**
     * @return int
     */
    public function getOpenIssues(): int
    {
        return $this->openIssues;
    }

    /**
     * @param int $openIssues
     */
    public function setOpenIssues(int $openIssues): void
    {
        $this->openIssues = $openIssues;
    }

    /**
     * @return int
     */
    public function getWatchers(): int
    {
        return $this->watchers;
    }

    /**
     * @param int $watchers
     */
    public function setWatchers(int $watchers): void
    {
        $this->watchers = $watchers;
    }

    /**
     * @return string
     */
    public function getDefaultBranch(): string
    {
        return $this->defaultBranch;
    }

    /**
     * @param string $defaultBranch
     */
    public function setDefaultBranch(string $defaultBranch): void
    {
        $this->defaultBranch = $defaultBranch;
    }
}
