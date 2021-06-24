<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles =  [
                        [
                            'veiculo' => 'Civic',
                            'marca' => 'Honda',
                            'ano' => '2021',
                            'descricao' => 'Garantia de fábrica, IPVA 2021 pago e todas revisões realizadas na concessionária!',
                            'vendido' => 0
                        ],
                        [
                            'veiculo' => 'Corola',
                            'marca' => 'Toyota',
                            'ano' => '2018',
                            'descricao' => 'Garantia de fábrica, IPVA 2021 pago e todas revisões realizadas na concessionária!',
                            'vendido' => 0
                        ],
                        [
                            'veiculo' => 'Hb20x',
                            'marca' => 'Hyundai',
                            'ano' => '2017',
                            'descricao' => 'HB20X 16/16 STYLE MOTOR 1.6 128CV Todas revisões na concessionária. Direção Elétrica. 6 marchas.',
                            'vendido' => 0
                        ],
                        [
                            'veiculo' => 'Fusca',
                            'marca' => 'VW',
                            'ano' => '1991',
                            'descricao' => 'Reliquia, único dono... já tem até nétos',
                            'vendido' => 0
                        ],
                        [
                            'veiculo' => 'Cruze',
                            'marca' => 'Chevrolet',
                            'ano' => '2019',
                            'descricao' => 'Desgaste natural na parte de pintura e pneus, alguns arranhões e amassados. Parte mecânica, elétrica e interior em perfeito estado',
                            'vendido' => 0
                        ],
                        [
                            'veiculo' => 'Onix',
                            'marca' => 'Chevrolet',
                            'ano' => '2020',
                            'descricao' => 'Raridade. PARA CONTATO SOBRE ESSE VEÍCULO ACESSE EXCLUSIVAMENTE NOSSO SITE OFICIAL. Aceitamos veículos na troca, consórcios e financiamentos',
                            'vendido' => 0
                        ],
                    ];
        DB::table('veiculo')->insert($vehicles);
    }
}
