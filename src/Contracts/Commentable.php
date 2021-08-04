<?php

namespace Rosamarsky\DoctrineCommentable\Contracts;

use Doctrine\Common\Collections\Collection;

interface Commentable
{
    /**
     * @return string
     */
    public function entityName(): string;

    /**
     * @return Collection|Comment[]
     */
    public function comments(): Collection;
}
