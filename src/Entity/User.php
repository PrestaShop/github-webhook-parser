<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class User
{
    /** @var string */
    private $login;

    /** @var int */
    private $id;

    /** @var string */
    private $nodeId;

    /** @var string */
    private $avatarUrl;

    /** @var string */
    private $gravatarId;

    /** @var string */
    private $url;

    /** @var string */
    private $htmlUrl;

    /** @var string */
    private $followersUrl;

    /** @var string */
    private $followingUrl;

    /** @var string */
    private $gistsUrl;

    /** @var string */
    private $starredUrl;

    /** @var string */
    private $subscriptionsUrl;

    /** @var string */
    private $organizationsUrl;

    /** @var string */
    private $reposUrl;

    /** @var string */
    private $eventsUrl;

    /** @var string */
    private $receivedEventsUrl;

    /** @var string */
    private $type;

    /** @var bool */
    private $siteAdmin;

    public function __construct(array $data)
    {
        $this->login = $data['login'];
        $this->id = $data['id'];
        $this->nodeId = $data['node_id'];
        $this->avatarUrl = $data['avatar_url'];
        $this->gravatarId = $data['gravatar_id'];
        $this->url = $data['url'];
        $this->htmlUrl = $data['html_url'];
        $this->followersUrl = $data['followers_url'];
        $this->followingUrl = $data['following_url'];
        $this->gistsUrl = $data['gists_url'];
        $this->starredUrl = $data['starred_url'];
        $this->subscriptionsUrl = $data['subscriptions_url'];
        $this->organizationsUrl = $data['organizations_url'];
        $this->reposUrl = $data['repos_url'];
        $this->eventsUrl = $data['events_url'];
        $this->receivedEventsUrl = $data['received_events_url'];
        $this->type = $data['type'];
        $this->siteAdmin = $data['site_admin'];
    }

    public static function createArrayFromArray(array $data): array
    {
        $users = [];
        foreach ($data as $datum) {
            $users[] = new static($datum);
        }

        return $users;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
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
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getGravatarId(): string
    {
        return $this->gravatarId;
    }

    /**
     * @param string $gravatarId
     */
    public function setGravatarId(string $gravatarId): void
    {
        $this->gravatarId = $gravatarId;
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
     * @return string
     */
    public function getFollowersUrl(): string
    {
        return $this->followersUrl;
    }

    /**
     * @param string $followersUrl
     */
    public function setFollowersUrl(string $followersUrl): void
    {
        $this->followersUrl = $followersUrl;
    }

    /**
     * @return string
     */
    public function getFollowingUrl(): string
    {
        return $this->followingUrl;
    }

    /**
     * @param string $followingUrl
     */
    public function setFollowingUrl(string $followingUrl): void
    {
        $this->followingUrl = $followingUrl;
    }

    /**
     * @return string
     */
    public function getGistsUrl(): string
    {
        return $this->gistsUrl;
    }

    /**
     * @param string $gistsUrl
     */
    public function setGistsUrl(string $gistsUrl): void
    {
        $this->gistsUrl = $gistsUrl;
    }

    /**
     * @return string
     */
    public function getStarredUrl(): string
    {
        return $this->starredUrl;
    }

    /**
     * @param string $starredUrl
     */
    public function setStarredUrl(string $starredUrl): void
    {
        $this->starredUrl = $starredUrl;
    }

    /**
     * @return string
     */
    public function getSubscriptionsUrl(): string
    {
        return $this->subscriptionsUrl;
    }

    /**
     * @param string $subscriptionsUrl
     */
    public function setSubscriptionsUrl(string $subscriptionsUrl): void
    {
        $this->subscriptionsUrl = $subscriptionsUrl;
    }

    /**
     * @return string
     */
    public function getOrganizationsUrl(): string
    {
        return $this->organizationsUrl;
    }

    /**
     * @param string $organizationsUrl
     */
    public function setOrganizationsUrl(string $organizationsUrl): void
    {
        $this->organizationsUrl = $organizationsUrl;
    }

    /**
     * @return string
     */
    public function getReposUrl(): string
    {
        return $this->reposUrl;
    }

    /**
     * @param string $reposUrl
     */
    public function setReposUrl(string $reposUrl): void
    {
        $this->reposUrl = $reposUrl;
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
    public function getReceivedEventsUrl(): string
    {
        return $this->receivedEventsUrl;
    }

    /**
     * @param string $receivedEventsUrl
     */
    public function setReceivedEventsUrl(string $receivedEventsUrl): void
    {
        $this->receivedEventsUrl = $receivedEventsUrl;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isSiteAdmin(): bool
    {
        return $this->siteAdmin;
    }

    /**
     * @param bool $siteAdmin
     */
    public function setSiteAdmin(bool $siteAdmin): void
    {
        $this->siteAdmin = $siteAdmin;
    }
}
