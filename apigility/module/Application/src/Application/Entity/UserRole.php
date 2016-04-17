<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * @Entity
 * @Table(name="UserRoles")
 */
class UserRole
{
    /**
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Application\Entity\User", inversedBy="roles")
     * @JoinColumn(name="userId", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ManyToOne(targetEntity="Application\Entity\User")
     * @JoinColumn(name="roleId", referencedColumnName="id")
     */
    protected $role;

    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}
