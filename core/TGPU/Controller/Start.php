<?php
namespace TGPU\Controller;


class Start extends Base
{
    public function index()
    {
        // тут что-нибудь считаем
        return $this->render(
            'test/test',
            [
                'basket' => [
                    'price' => '12 000'
                ]
            ]
        );
    }
}