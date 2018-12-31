<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Oferta;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if(User::where('email', '=', 'admin@admin.com')->count()){
        	$user = User::where('email', '=', 'admin@admin.com')->first();
        }else{
        	$user = new User;
        }

        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("123456");
        $user->save();

        $oferta = [
            'titulo'=>'arroz',
            'descricao'=>'descição',
            'validade'=>'2018-12-27',
            'valor' => 5.90,
            'valor_f'=>'R$ 5,90',
            'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR457fPXGaOT3kzddaO0JuBoqqwYZZlcrTRnTSdRB7esFrUUftSNw'
        ];

        Oferta::create($oferta);

    }
}
