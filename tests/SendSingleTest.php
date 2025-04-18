<?php

declare(strict_types=1);

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jadessoriano\LaravelMobivate\Facades\MobivateFacade;
use Jadessoriano\Mobivate\Requests\Sms\Message;
use Jadessoriano\Mobivate\Responses\MessageResponse;

use function PHPUnit\Framework\assertInstanceOf;

it('send single message', function () {
    $responseData = '{
        "id":"ef5796ce-e326-4a09-9033-6b457039b1ba",
        "originator":"Test",
        "recipient":"44700011122",
        "body":"This is a test message",
        "routeId":"mglobal",
        "reference":null,
        "campaignId":null
    }';

    $mock = new MockHandler(
        [
            new Response(
                200,
                [],
                $responseData,
            ),
        ]
    );

    $handlerStack = HandlerStack::create(
        $mock
    );

    MobivateFacade::client()->setHandlerStack($handlerStack);

    $response = MobivateFacade::sendSingle()->execute(
        (new Message)
            ->setOriginator('Test')
            ->setRecipient('44700011122')
            ->setBody('This is a test message')
    );

    assertInstanceOf(MessageResponse::class, $response);
});
