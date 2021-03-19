<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait timeStapable
{
    /**
     * @var \DateTimeInterface
     * @ORM\Column (type="datetime")
     */
    private \DateTimeInterface $createdAt;

    /**
     * @var \DateTimeInterface
     * @ORM\Column (type="datetime", nullable=true)
     */

    private \DateTimeInterface  $updatedAt;


    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }


    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }


    public function setUpdatedAt(?\DateTimeInterface $updatedAt): timeStapable
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }


}
 