<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Zend\Stdlib\ArraySerializableInterface;

/**
 * @Entity
 * @Table(name="Roles")
 */
class Role implements ArraySerializableInterface
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
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function exchangeArray(array $data)
    {
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'name':
                    $this->name = $value;
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
            'name' => $this->name,
        ];
    }
}
