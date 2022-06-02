<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(15)->sequence(
            [
                'description' => 'Empresas que venden productos de deportes.',
                'name' => 'Deportes',
                'img_url' => 'https://cadenaser00.epimg.net/ser/imagenes/2021/04/06/ser_las_palmas/1617718171_979548_1617718322_noticia_normal_recorte1.jpg'
            ],
            [
                'description' => 'Empresas que venden productos con dulces.',
                'name' => 'Dulces',
                'img_url' => 'https://abasto.com/wp-content/uploads/2021/06/summer-candy-dulces-verano.webp'
            ],
            [
                'description' => 'Empresas de insumos agrícolas, pecuarios y acuícolas.',
                'name' => 'Agricola',
                'img_url' => 'https://cdn.wikifarmer.com/wp-content/uploads/2019/09/que-se-necesita-para-la-agricultura.jpg'
            ],
            [
                'description' => 'Empresas que venden inmuebles o similares.',
                'name' => 'Muebles',
                'img_url' => 'https://marcimex.vteximg.com.br/arquivos/ids/173835-320-320/20535-1.jpg?v=637449506712130000'
            ],
            [
                'description' => 'Empresas que venden consolas de videojuegos.',
                'name' => 'Consolas',
                'img_url' => 'https://media.gcflearnfree.org/content/5ccc48c7e5c6c4116cbd9df7_05_03_2019/consolasjuegos-01_xl.png'
            ],
            [
                'description' => 'Empresas que venden ropa o vestimenta en general.',
                'name' => 'Vestimenta',
                'img_url' => 'https://www.eoi.es/blogs/alfredo-fernandez-lorenzo/files/2017/02/vestimenta-3.jpg'
            ],
            [
                'description' => 'Empresas que venden comida o insumos .',
                'name' => 'Insumos',
                'img_url' => 'https://www.eoi.es/blogs/alfredo-fernandez-lorenzo/files/2017/02/vestimenta-3.jpg'
            ],
            [
                'description' => 'Empresas que venden maquinaria de construcción',
                'name' => 'Construcción',
                'img_url' => 'https://blog.properati.com.ec/wp-content/uploads/2020/08/permiso-construccion-guayaquil.jpg'
            ],
            [
                'description' => 'Empresas que venden mochilas y maletas.',
                'name' => 'Mochilas',
                'img_url' => 'https://s1.eestatic.com/2021/05/20/imprescindibles/582702802_185736363_1706x960.jpg'
            ],
            [
                'description' => 'Empresas que venden herramientas para la construcción.',
                'name' => 'Herramientas',
                'img_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Hand_tools.jpg/220px-Hand_tools.jpg'
            ],
            [
                'description' => 'Empresas que venden productos tecnológicos',
                'name' => 'Tecnología',
                'img_url' => 'https://blogs.iadb.org/conocimiento-abierto/wp-content/uploads/sites/10/2017/11/technology-banner.jpg'
            ],
            [
                'description' => 'Empresas que venden productos para el cuidado de la salud',
                'name' => 'Medicina',
                'img_url' => 'https://www.esan.edu.pe/apuntes-empresariales/2018/08/29/1500x844_medicinas_evidencia.jpg'
            ],
            [
                'description' => 'Empresas que calzado',
                'name' => 'Calzado',
                'img_url' => 'http://www.consolvilar.com/wp-content/uploads/2015/06/Rule-4.png'
            ],
            [
                'description' => 'Empresas que venden productos de consumo de primera necesidad',
                'name' => 'Víveres',
                'img_url' => 'http://importadoracaranqui.com/wp-content/uploads/2018/01/viveres.jpg'
            ],
            [
                'description' => 'Empresas que venden herramientas para mantenimiento del hogar',
                'name' => 'Ferretería',
                'img_url' => 'https://www.giliindustrial.com/blog/wp-content/archivos/2020/12/herramientas-ferreteria-industrial.jpg'
            ]
        )->create();
    }
}
