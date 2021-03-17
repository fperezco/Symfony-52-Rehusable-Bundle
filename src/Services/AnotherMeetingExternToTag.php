<?php

namespace App\Services;

use Paco\CustomPacoBundle\Interfaces\MeetingMessageProviderInterface;
use Paco\CustomPacoBundle\MeetingMessageProvider;

class AnotherMeetingExternToTag implements MeetingMessageProviderInterface
{
    public function getWordList(): array
    {
        //$words = parent::getWordList();
        $words = ['Hi another m', 'Hi out AN'];
        return $words;
    }
}