<?php

class EventServiceProvider extends ServiceProvider
{
    // In real life scenarios,
    //  we'd automatically resolve and cache all subscribers
    //  instead of using a manual array.
    private array $subscribers = [
        ProductSubscriber::class,
    ];

    public function register(): void
    {
        // The event dispatcher is resolved from the container
        $eventDispatcher = $this->app->make(EventDispatcher::class);

        foreach ($this->subscribers as $subscriber) {
            // We'll resolve all listeners registered
            //  in the subscriber class,
            //  and add them to the dispatcher.
            foreach (
                $this->resolveListeners($subscriber)
                as [$event, $listener]
            ) {
                $eventDispatcher->listen($event, $listener);
            }
        }
    }

    /**
     * @param string $subscriberClass
     * @return array
     * @throws ReflectionException
     */
    private function resolveListeners(string $subscriberClass): array
    {
        $reflectionClass = new ReflectionClass($subscriberClass);

        $listeners = [];

        foreach ($reflectionClass->getMethods() as $method) {
            $attributes = $method->getAttributes(ListensTo::class);

            foreach ($attributes as $attribute) {
                $listener = $attribute->newInstance();

                $listeners[] = [
                    // The event that's configured on the attribute
                    $listener->event,

                    // The listener for this event
                    [$subscriberClass, $method->getName()],
                ];
            }
        }

        return $listeners;
    }
}
