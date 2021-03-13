<?php

namespace Paco\CustomPacoBundle;

class PacoNumberGenerator
{
    private $baseNumber;
    private $topNumber;
    private $meetingMessageProvider;

    public function __construct(MeetingMessageProvider $meetingMessageProvider, $baseNumber = 0, $topNumber = 100)
    {
        $this->baseNumber = $baseNumber;
        $this->topNumber = $topNumber;
        $this->meetingMessageProvider = $meetingMessageProvider;
    }

    public function getNumber()
    {
        $randomMeetingIndex = array_rand($this->meetingMessageProvider->getWordList(), 1);
        $randomNumber = random_int($this->baseNumber, $this->topNumber);
        $randomMeetingWord = $this->meetingMessageProvider->getWordList()[$randomMeetingIndex];
        return $randomMeetingWord." ". $randomNumber;
    }

    private function getWordList(): array
    {
        return $this->meetingMessageProvider->getWordList();
    }
}