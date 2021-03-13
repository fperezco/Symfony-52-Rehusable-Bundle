<?php


namespace App\Services;


use Paco\CustomPacoBundle\MeetingMessageProvider;

class MeetingExternCustom extends MeetingMessageProvider
{
    public function getWordList(): array
    {
        //$words = parent::getWordList();
        $words = ['Hi outside', 'Hi out'];
        return $words;
    }
}