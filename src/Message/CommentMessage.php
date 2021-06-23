<?php


namespace App\Message;


class CommentMessage
{
    private $id;
    private $context;
    private $reviewUrl;

    public function __construct(int $id, string $reviewUrl, array $context = [])
    {
        $this->id = $id;
        $this->context = $context;
        $this->reviewUrl = $reviewUrl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function getReviewUrl(): string
    {
        return $this->reviewUrl;
    }
}