<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate;

use Jadessoriano\Mobivate\Requests\Sms\Message;
use Jadessoriano\Mobivate\Responses\MessageResponse;

final readonly class LaravelMobivateService
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Jadessoriano\Mobivate\Exceptions\ConfigException
     */
    public static function sendSingle(
        string $recipient,
        string $body,
        ?string $originator = null,
        ?string $reference = null,
        ?string $campaignId = null,
    ): MessageResponse {

        /**
         * @phpstan-var ?string $originator
         */
        $originator = $originator ?? config('mobivate-sdk.originator');

        return app(LaravelMobivate::class)
            ->sendSingle()
            ->execute(
                new Message(
                    originator: $originator,
                    recipient: $recipient,
                    body: $body,
                    routeId: 'mglobal',
                    reference: $reference,
                    campaignId: $campaignId
                )
            );
    }
}
