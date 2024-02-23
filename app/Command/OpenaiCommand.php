<?php

declare(strict_types=1);

namespace App\Command;

use App\RocketMqHttp\Consumer\MessageData\OrderSubmitData;
use App\RocketMqHttp\Producer\OrderSubmitNormalMessage;
use Exception;
use GuzzleHttp\Client;
use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use OpenAI;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

#[Command]
class OpenaiCommand extends HyperfCommand
{
    public function __construct(protected ContainerInterface $container)
    {
        parent::__construct('demo:command');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
    }

    public function handle()
    {
        try {
            $o = new OrderSubmitNormalMessage();
            $o->setOrderNo('order_no');
            producer()->produce($o);
            return;

            $client = OpenAI::factory()
                ->withApiKey('sk-WJpYabu1B5Q3pxdQA87974443fD745CeB74c1066C6Bc725e')
                ->withBaseUri('https://api.xiamoai.top/v1') // default: api.openai.com/v1
                ->withHttpClient($client = new Client()) // default: HTTP client found using PSR-18 HTTP Client Discovery
                ->withStreamHandler(fn (RequestInterface $request): ResponseInterface => $client->send($request, [
                    'stream' => true, // Allows to provide a custom stream handler for the http client.
                ]))
                ->make();
            $result = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => 'Hello!'],
                ],
            ]);
            ddump($result);
            echo $result->choices[0]->message->content; // Hello! How can I assist you today?
        } catch (Exception $exception) {
            ddump($exception);
        }
    }
}
