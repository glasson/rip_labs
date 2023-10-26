<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Socket\MySocket;

class run_socket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run_socket';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        require dirname(__DIR__, 3) . '/vendor/autoload.php';
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new MySocket()
                )
            ),
            8081
        );
        $server->run();
    }
}
