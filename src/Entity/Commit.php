<?php declare(strict_types=1);

namespace PrestaShop\Github\Entity;

class Commit
{
    /** @var string */
    private $message;

    /** @var string */
    private $authorName;

    /** @var string */
    private $authorEmail;

    /** @var string */
    private $url;

    public function __construct(array $data)
    {
        $this->message = $data['message'];
        $this->authorName = $data['author']['name'];
        $this->authorEmail = $data['author']['email'];
        $this->url = $data['url'];
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    /**
     * @param string $authorName
     */
    public function setAuthorName(string $authorName): void
    {
        $this->authorName = $authorName;
    }

    /**
     * @return string
     */
    public function getAuthorEmail(): string
    {
        return $this->authorEmail;
    }

    /**
     * @param string $authorEmail
     */
    public function setAuthorEmail(string $authorEmail): void
    {
        $this->authorEmail = $authorEmail;
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
}
