<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseGroup as BaseGroup;

/**
 * User
 *
 * @ORM\Table(name="user_group")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class Group extends BaseGroup
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
