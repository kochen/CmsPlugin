<?php

namespace Tests\Lakion\CmsPlugin\Behat\Context\Transform;

use Behat\Behat\Context\Context;
use Sylius\Component\Resource\Repository\RepositoryInterface;

final class ProductBlockContext implements Context
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * @param RepositoryInterface $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Transform :productBlock
     */
    public function nameToDocument($name)
    {
        return $this->repository->findOneBy(['name' => $name]);
    }
}
