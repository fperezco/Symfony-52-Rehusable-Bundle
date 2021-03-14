<?php

namespace Paco\CustomPacoBundle\Interfaces;

interface MeetingMessageInterface
{
    /**
     * Return an array of words to use for the fake text.
     *
     * @return array
     */
    public function getWordList(): array;
}