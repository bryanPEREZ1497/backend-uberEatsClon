<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enterprise = Enterprise::factory(20)->sequence(
            [
                'address' => 'Avenida Naciones Unidas E7-13 Y, Quito 170102',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://gollo-prod-grupounicomer.netdna-ssl.com/static/version1626900239/frontend/Artefacta/default/es_EC/images/logo-big.png',
                'name' => 'Artefacta',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Quicentro, Av MoráN Valverde Y, Av. Quitumbe Ñan, Quito',
                'calification' => 5,
                'country' => 'Ecuador',
                'img_url' => 'https://www.almaceneslaganga.com/images/logo.png',
                'name' => 'La Ganga',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Quitus 71-19, Quito 170202',
                'calification' => 3,
                'country' => 'Ecuador',
                'img_url' => 'http://www.malldelrio.com/administrador/_lib/file/imgmarcas/jaher.jpg',
                'name' => 'Almacenes Jaher',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. Mariscal Sucre 3120 y Calle Chillogallo, Av. Mariscal Antonio José de Sucre, Quito 170105',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://pbs.twimg.com/profile_images/1378082880761511939/8OrbfE_F_400x400.png',
                'name' => 'Créditos Económicos',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Quicentro Sur, Ave Moran Valverde, Quito 170146',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXw0szwcKVteRTevUkLy4dHv92KRc_wGbfriaaQk7UtQBdybGiP9uKynuqXy1sWqXX8tU&usqp=CAU',
                'name' => 'Marathon Sports',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Local 203-283, Mall El Jardin, Av. Río Amazonas N16-114, Quito',
                'calification' => 5,
                'country' => 'Ecuador',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR_UNdVnzUj8JBF5OLq-jJpVlOdcYtui5MV5X6CdlpUDD-Eak2I0WySgV2D-CBiAqzTRk&usqp=CAU',
                'name' => 'Totto',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. 10 de Agosto, Quito 170129',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://ccplazaamericas.com/images/juaneljuri.jpg',
                'name' => 'Almacenes Juan Eljuri',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. de La Prensa, Quito 170104',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoRruch5PaH6UooD_xBCnOuzDkJEBfuhk7hhuGXF8yV58ZltYjBWZf2L8A1-92tkFDchQ&usqp=CAU',
                'name' => 'Kiwi',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Manuel Zambrano, Quito 170138',
                'calification' => 3,
                'country' => 'Ecuador',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-fuL6z0YhUjQi8qFmYqJW9bUuv6lecxEtdHrapFsUykUxEPIoa0HPsydCiW1aEz-xKy4&usqp=CAU',
                'name' => 'Holcim Ecuador',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Gaspar de Carvajal s/n y, Av. la Gasca, Quito 170521',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://www.corporacionfavorita.com/wp-content/uploads/2020/03/cf-logos-supermaxi.jpg',
                'name' => 'SuperMaxi',
                'ranking' => rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            //add for mau
            [
                'address' => 'Av. la Ecuatoriana, Quito 170707',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://www.banco-solidario.com/sites/default/files/2019-03/24552%20-%20SUPERMERCADO%20SANTA%20MARIA.jpg',
                'name' => 'SantaMaria',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. Maldonado entre Alamor y, Calvas, Quito 170604',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Tia_Supermarket-Logo.svg/1200px-Tia_Supermarket-Logo.svg.png',
                'name' => 'Tia',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Panamericana Nte, Quito 170146',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://www.deltaglobal.com.ec/wp-content/uploads/2019/10/logo-confiteca.png',
                'name' => 'Confiteca',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Centro Comercial Quicentro Sur, Av. Morán Valverde, Quito',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://farras.live/wp-content/uploads/2018/11/De-Prati-790x445.jpg',
                'name' => 'De Pratti',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. Pedro Vicente Maldonado, Quito 170126',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'http://ccplazasur.com.ec/wp-content/uploads/2015/11/Logo_CruzAzul.png',
                'name' => 'Farmacias Cruz Azul',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Calle, Av. Pedro Vicente Maldonado, Quito 170606',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://www.ccelrecreo.com/wp-content/uploads/2020/09/farmarcias-sana-sana-600x600-1.png',
                'name' => 'Farmacias Sana Sana',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'AVS.MORÁN VALVERDE 1040 Y TNTE.HUGO ORTIZ',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://agripac.com.ec/wp-content/uploads/2020/12/agripac-logo-700x-838.png',
                'name' => 'Agripac',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'y, Quitumbe Ñan & Ave Moran Valverde, Quito',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://cdn.advantis.co/wp-content/uploads/2018/06/Fybeca-e1529762409250.png',
                'name' => 'Farmacias Fybeca',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. la Ecuatoriana, Quito 170707',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://www.pycca.com/arquivos/logo_pycca.svg?v=637583371496400000',
                'name' => 'Pycca',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
            [
                'address' => 'Av. la Ecuatoriana, Quito 170707',
                'calification' => 4,
                'country' => 'Ecuador',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTpXaBgmAddMHvKLEwkSqNJz1MzdNXB1tGAg&usqp=CAU',
                'name' => 'Almacenes Boyacá',
                'ranking' =>   rand(100, 999),
                'time_close' => '21:00',
                'time_open' => '9:00',
            ],
        )->create();
    }
}
