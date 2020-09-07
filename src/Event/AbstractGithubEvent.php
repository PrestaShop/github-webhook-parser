<?php declare(strict_types=1);

namespace PrestaShop\Github\Event;

use PrestaShop\Github\Entity\Repository;
use PrestaShop\Github\Entity\User;

abstract class AbstractGithubEvent implements GithubEventInterface
{
    /** @var string|null */
    private $action;

    /** @var User */
    private $sender;

    /** @var Repository|null */
    private $repository;

    /** @var array|null */
    private $organization;

    /** @var array|null */
    private $installation;

    public function __construct(array $data)
    {
        $this->action = $data['action'] ?? null;
        $this->sender = new User($data['sender']);
        $this->repository = isset($data['repository']) ? new Repository($data['repository']) : null;
        $this->organization = $data['organization'] ?? null;
        $this->installation = $data['installation'] ?? null;
    }

    /**
     * Returns differentiating keys of each event to determine what kind of event we got
     *
     * @return array
     */
    abstract public static function getValidationFields(): array;

    /**
     * Checks if the data corresponds to this kind of event
     *
     * @param array $data
     *
     * @return bool
     */
    public static function isValid(array $data): bool
    {
        foreach (static::getValidationFields() as $field) {
            if (!array_key_exists($field, $data)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @return User
     */
    public function getSender(): User
    {
        return $this->sender;
    }

    /**
     * @return Repository|null
     */
    public function getRepository(): ?Repository
    {
        return $this->repository;
    }

    /**
     * @return array|null
     */
    public function getOrganization(): ?array
    {
        return $this->organization;
    }

    /**
     * @return array|null
     */
    public function getInstallation(): ?array
    {
        return $this->installation;
    }
}
