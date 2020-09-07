<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class Comment
{
    /** @var int */
    private $id;

    /** @var string */
    private $nodeId;

    /** @var string */
    private $url;

    /** @var string */
    private $htmlUrl;

    /** @var string */
    private $body;

    /** @var User */
    private $user;

    /** @var string */
    private $createdAt;

    /** @var string|null */
    private $updatedAt;

    /** @var string */
    private $authorAssociation;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->nodeId = $data['node_id'];
        $this->url = $data['url'];
        $this->htmlUrl = $data['html_url'];
        $this->body = $data['body'];
        $this->user = new User($data['user']);
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
        $this->authorAssociation = $data['author_association'];
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
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
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
}
