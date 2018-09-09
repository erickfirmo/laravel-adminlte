<?php

use Illuminate\Database\Seeder;

class UfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ufs = [
            ['12', 'AC', 'Acre'],
            ['27', 'AL', 'Alagoas'],
            ['13', 'AM', 'Amazonas'],
            ['16', 'AP', 'Amapá'],
            ['29', 'BA', 'Bahia'],
            ['23', 'CE', 'Ceará'],
            ['53', 'DF', 'Distrito Federal'],
            ['32', 'ES', 'Espírito Santo'],
            ['52', 'GO', 'Goiás'],
            ['21', 'MA', 'Maranhão'],
            ['31', 'MG', 'Minas Gerais'],
            ['50', 'MS', 'Mato Grosso do Sul'],
            ['51', 'MT', 'Mato Grosso'],
            ['15', 'PA', 'Pará'],
            ['25', 'PB', 'Paraíba'],
            ['26', 'PE', 'Pernambuco'],
            ['22', 'PI', 'Piauí'],
            ['41', 'PR', 'Paraná'],
            ['33', 'RJ', 'Rio de Janeiro'],
            ['24', 'RN', 'Rio Grande do Norte'],
            ['11', 'RO', 'Rondônia'],
            ['14', 'RR', 'Roraima'],
            ['43', 'RS', 'Rio Grande do Sul'],
            ['42', 'SC', 'Santa Catarina'],
            ['28', 'SE', 'Sergipe'],
            ['35', 'SP', 'São Paulo'],
            ['17', 'TO', 'Tocantins']
        ];
       
        foreach ($ufs as $uf)
        {
            $obj = new App\Uf;
            $obj->codigo_ibge = $uf[0];
            $obj->sigla = $uf[1];
            $obj->nome = $uf[2];
            $obj->save();
        }
    }
}
