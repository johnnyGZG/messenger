<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from_id'   => 1,
            'to_id'     => 2,
            'content'   => 'Hola, como estas'
        ]);

        Message::create([
            'from_id'   => 2,
            'to_id'     => 1,
            'content'   => 'Bien, Gracias. Y tú?'
        ]);

        Message::create([
            'from_id'   => 1,
            'to_id'     => 3,
            'content'   => 'Hola Manager, que tal?'
        ]);

        Message::create([
            'from_id'   => 3,
            'to_id'     => 1,
            'content'   => 'Bien Programador, Gracias. Y tú?'
        ]);
    }
}
