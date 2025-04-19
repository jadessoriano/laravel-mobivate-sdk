<?php

declare(strict_types=1);

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jadessoriano\LaravelMobivate\Facades\MobivateFacade;
use Jadessoriano\Mobivate\Responses\BatchMessageResponse;
use Jadessoriano\Mobivate\Tests\TestHelper;

use function PHPUnit\Framework\assertInstanceOf;

it('send batch message', function () {
    $responseData = TestHelper::jsonBatchSendMessage();

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

    $response = MobivateFacade::sendBatch()->execute(TestHelper::buildBatchMessage());

    assertInstanceOf(BatchMessageResponse::class, $response);
});
