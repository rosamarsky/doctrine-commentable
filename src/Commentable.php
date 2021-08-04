<?php

namespace Rosamarsky\DoctrineCommentable;

use Doctrine\Common\Collections\Collection;
use Rosamarsky\DoctrineCommentable\Contracts\Comment;

trait Commentable
{
    /**
     * @ORM\Column(type="string", name="entity_name")
     *
     * @var string
     */
    private $entityName;

    /**
     * @ORM\ManyToMany(targetEntity=Comment::class)
     * @ORM\JoinTable(name="comments",
     *      joinColumns={
     *          @ORM\JoinColumn(name="object_id", referencedColumnName="id"),
     *          @ORM\JoinColumn(name="object_type", referencedColumnName="entity_type")
     *      },
     *      inverseJoinColumns={
     *          @ORM\JoinColumn(name="id", referencedColumnName="id")
     *      }
     * )
     *
     * @var Collection|Comment[]
     */
    private $comments;

    public function comments(): Collection
    {
        return $this->comments;
    }

    public function entityName(): string
    {
        return $this->entityName;
    }
}
