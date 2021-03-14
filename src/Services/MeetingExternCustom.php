<?php


namespace App\Services;


use Paco\CustomPacoBundle\Interfaces\MeetingMessageProviderInterface;
use Paco\CustomPacoBundle\MeetingMessageProvider;

class MeetingExternCustom implements MeetingMessageProviderInterface
{
    public function getWordList(): array
    {
        //$words = parent::getWordList();
        $words = ['Hi outside', 'Hi out'];
        return $words;
    }
}