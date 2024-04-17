<?php

namespace App\Http\Service;

use Mailjet\Client;
use Mailjet\Resources;

class MailAPi {


    public $privateKey = "d9ada119befb31a0b3f682a2ba77cd8b";
    public $pubKey = "7a7c3abd5255c3bd7e329ff6de8ff5d9";

    public function sendMail($to, $name, $content) {


        $mj = new Client($this->pubKey, $this->privateKey, true,['version' => 'v3.1']);

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "jordan@stradmob.agency",
                        'Name' => "Divorce Rapide - Demande"
                    ],
                    'To' => [
                        [
                            'Email' => $to,
                            'Name' => $name
                        ]
                    ],
                    'Subject' => 'Demande de Divorce',
                    'TextPart' => $content
                ]
            ]
        ];
          $response = $mj->post(Resources::$Email, ['body' => $body]);
          //$response->success() && var_dump($response->getData());
    }
}