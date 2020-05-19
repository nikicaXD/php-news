<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleid;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getGoogleid(): ?string
    {
        return $this->googleid;
    }

    public function setGoogleid(?string $googleid): self
    {
        $this->googleid = $googleid;

        return $this;
    }
}
