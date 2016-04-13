<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\Table;
use Zend\Stdlib\ArraySerializableInterface;

/**
 * @Entity
 * @Table(name="Users")
 */
class User implements ArraySerializableInterface
{
    /**
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $username;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $password;

    /**
     * @ManyToMany(targetEntity="Application\Entity\Role")
     * @JoinTable(name="UserRoles",
     *     joinColumns={@JoinColumn(name="userId", referencedColumnName="id")},
     *     inverseJoinColumns={@JoinColumn(name="roleId", referencedColumnName="id")})
     **/
    protected $roles;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function exchangeArray(array $data)
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'username':
                    $this->username = $value;
                    break;
                case 'password':
                    $this->password = $value;
                    break;
                case 'roles':
                    $this->roles = $value;
                    break;
                default:
                    break;
            }
        }

        return $this;
    }

    public function getArrayCopy()
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'roles' => $this->roles,
        ];
    }
}
