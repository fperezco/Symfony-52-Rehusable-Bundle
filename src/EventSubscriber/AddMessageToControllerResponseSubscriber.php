<?php


namespace App\EventSubscriber;


use Paco\CustomPacoBundle\Event\PacoNumberGeneratorEvents;
use Paco\CustomPacoBundle\Event\FilterApiResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddMessageToControllerResponseSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            PacoNumberGeneratorEvents::FILTER_API => 'onFilterApi',
        ];
    }
    public function onFilterApi(FilterApiResponseEvent $event)
    {
        $data = $event->getData();
        $data['message'] = 'Message Added on subscriber!';
        $event->setData($data);
    }
}