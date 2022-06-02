<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(100)->sequence(
            [
                'enterprise_id' => 1,
                'name' => 'Quattro Escritorio',
                'price' => 65.00,
                'description' => 'Obtén lo que necesitas para tu oficina con los muebles de la prestigiosa marca Quattro hoy con su modelo de escritorio AZ1007 ideal para tu oficina o estudio casero, fabricado en color blanco nogal, su estilo contemporáneo le dará un toque moderno y elegante a tu lugar.',
                'img_url' => 'https://gollo-prod-grupounicomer.netdna-ssl.com/media/catalog/product/cache/7536f51f1dcaf1415428fad840de9edd/5/5/55820_2_1.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 1,
                'name' => 'Pure Clean Aspiradora Robot',
                'price' => 229.00,
                'description' => 'Con la aspiradora robot Pure Clean podrás realizar la limpieza de pisos, alfombras y pisos de madera de forma rápida y sencilla, para ello cuenta con 2 cepillos barredores que extienden el alcance de la aspiradora y rotan para captar la suciedad hasta en las esquinas y un tamaño lo suficientemente bajo (2.9" de altura) para moverse a través de cualquier habitación y pasar debajo de los muebles de sala o cama en tu habitación.',
                'img_url' => 'https://gollo-prod-grupounicomer.netdna-ssl.com/media/catalog/product/cache/112f96ea3a7dc43d93137b545a4a9b45/1/2/121535_01.jpg',
                'like_counter' => 200,
            ],
            [
                'enterprise_id' => 2,
                'name' => ' IPHONE SE 64GB',
                'price' => 1080.00,
                'description' => 'El celular iphone SE tiene una pantalla de tamaño: 4.7 Retina HD Resolución: 1334 x 750 Cámara principal: 12MP Cámara frontal: 7MP Memoria interna: 64 GB',
                'img_url' => 'https://www.almaceneslaganga.com/pedidos-en-linea/img/productos/606_1.jpg',
                'like_counter' => 402,
            ],
            [
                'enterprise_id' => 2,
                'name' => 'TV LED SMART SAMSUNG HD',
                'price' => 343.68,
                'description' => 'Este televisor cuenta con Wide Colour Enhancer un algoritmo que mejora radicalmente la calidad de cualquier imagen y revela los detalles',
                'img_url' => 'https://www.almaceneslaganga.com/pedidos-en-linea/img/productos/302_1.jpg',
                'like_counter' => 2231,
            ],
            [
                'enterprise_id' => 3,
                'name' => 'Nebulizadora Ducati ',
                'price' => 465.95,
                'description' => 'Nebulizadora diseñada para una aplicación superior de líquidos y sólidos, equipo marca DUCATI',
                'img_url' => 'https://www.jaher.com.ec/724-large_default/nebulizadora-ducati-dmd8300-20l.jpg',
                'like_counter' => 123,
            ],
            [
                'enterprise_id' => 3,
                'name' => 'Audífonos Bluetooth Headset',
                'price' => 44.03,
                'description' => 'Escucha tu música con la función de cancelación de sonido externo, batería de larga duración',
                'img_url' => 'https://www.jaher.com.ec/500-home_default/aud%C3%ADfonos-bluetooth-headset-kr168.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 4,
                'name' => 'Barra de Sonido Diggio',
                'price' => 131.4,
                'description' => 'Escucha tu música favorita con este sistema de sonido 2.1 ch 40w de la marca Diggio.',
                'img_url' => 'https://crecos.vteximg.com.br/arquivos/ids/172331-385-385/DG-PQ5S.jpg?v=637001189224730000',
                'like_counter' => 1231,
            ],
            [
                'enterprise_id' => 4,
                'name' => 'Silla Marriott Gaming',
                'price' => 324.00,
                'description' => 'Silla ergonómica para juegos Dos cojines desmontables para soporte lumbar y cervical Sistema de ajuste del asiento de la mariposa Respaldo ajustable (incluyendo acostado) Altura ajustable 100 mm Girar 360 grados',
                'img_url' => 'https://crecos.vteximg.com.br/arquivos/ids/202909-385-385/J11097-W.jpg?v=637484180055530000',
                'like_counter' => 3381,
            ],
            [
                'enterprise_id' => 5,
                'name' => 'Mckinley Family',
                'price' =>  399.90,
                'description' => 'Toma un descanso fuera de casa en la tienda de campaña Mckinley Family',
                'img_url' => 'https://www.intersport.es/dw/image/v2/BBWT_PRD/on/demandware.static/-/Sites-intersport-master-catalog/default/dw6dee4087/images/iic-mckinley-289474-900-hero-x-0001.jpg',
                'like_counter' => 452,
            ],
            [
                'enterprise_id' => 5,
                'name' => 'Nike Flight',
                'price' => 169.90,
                'description' => 'El balón de fútbol Nike Flight perfeccionado durante 8 años y 1.700 horas de prueba es la evolución del vuelo constante.',
                'img_url' => 'https://i.ebayimg.com/images/g/Af4AAOSwRvFe~eWl/s-l1600.jpg',
                'like_counter' => 3663,
            ],
            [
                'enterprise_id' => 6,
                'name' => 'Mochila Portacomputador Sumbi - Negro',
                'price' => 65.70,
                'description' => '¡Que nunca te falte nada vayas donde vayas! Mochila adaptable para todos tus viajes porta PC con vivos reflectivos y hebilla de seguridad para que nunca dudes llevarlo contigo, con organizador de documentos y celular para estar siempre en sintonía con lo necesario y bolsillo secreto para mayor libertad.',
                'img_url' => 'https://tottobo.vteximg.com.br/arquivos/ids/196526-1000-1000/totto-Morral-porta-pc-sumbi-negro-n01_1.jpg',
                'like_counter' => 4234,
            ],
            [
                'enterprise_id' => 6,
                'name' => 'Universitario Para Hombre Caspio - Verde',
                'price' => 45.00,
                'description' => 'Hermosa mochila universitaria para hombre super confortable ligera y de facil maniobra',
                'img_url' => 'https://tottoecuador.vteximg.com.br/arquivos/ids/248081-292-292/MA07YAT001-2010B-V5T-1.jpg',
                'like_counter' => 1231,
            ],
            [
                'enterprise_id' => 7,
                'name' => 'Monitor de Estudio',
                'price' => 726.97,
                'description' => 'Respuesta de frecuencia de 22Hz - 150Hz, Conmutador LOW CUT, control LOW CUT (80-120Hz) control HIGH CUT (80-120 Hz), LR y TRS de jack telefónico para entradas y XLR para salidas',
                'img_url' => 'https://tuhomestudio.com/wp-content/uploads/2016/08/krk_rokit_g3_powered_studio_monitor_family-300x197.jpg',
                'like_counter' => 5631,
            ],
            [
                'enterprise_id' => 7,
                'name' => 'Consola Análoga MG16XU',
                'price' =>  813.23,
                'description' => 'El mezclador analógico Yamaha MG16XU es muy adecuado para equipos portátiles o instalaciones permanentes, con sus características avanzadas y excelente calidad de sonido. El amplificador operacional de calidad del MG16XU garantiza que su mezcla suene transparente y articulada. ',
                'img_url' => 'https://fareisa.com/image/cache/catalog/Productos/YAMAHA/270246/1-800x800.jpg',
                'like_counter' => 124,
            ],
            [
                'enterprise_id' => 8,
                'name' => 'Taladro pedestal TRUPER',
                'price' => 185.86,
                'description' => '5 Velocidades. Mesa con ajuste de elevación e inclinación de 0° a 45° izquierda o derecha. Canales para sujetar la pieza. Botón de encendido con llave de seguridad. Para perforar, pulir y desbastar metal, madera y plástico. 110 V. Velocidades: 760 – 3070 RPM. Mesa de trabajo: 16 x 16 cm. Truper',
                'img_url' => 'https://kywitiendaenlinea.com/wp-content/uploads/2020/04/500259-1-150x150.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 8,
                'name' => 'Caladora Skill VV',
                'price' => 52.99,
                'description' => 'SIERRA CALADORA 400W, velocidad variable, placa base regulable, botón traba de velocidad, adaptador para aspiración de polvo, soft grip, polea guía. Encaje T y U. Incluye: 1 lámina + 1 llave allen. Reemplaza a F 012 417 0AA.',
                'img_url' => 'https://kywitiendaenlinea.com/wp-content/uploads/2020/05/688959-150x150.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 9,
                'name' => 'Cemento Holcim',
                'price' => 8.00,
                'description' => 'Cemento Chimborazo Sacos de 50KG Tipo GU Alta Resistencia',
                'img_url' => 'https://disensa.com.ec/wp-content/uploads/2020/10/cemento-fuerte-tipo-gu.jpg',
                'like_counter' => 1222,
            ],
            [
                'enterprise_id' => 10,
                'name' => 'Centro de entretimiento',
                'price' => 200.00,
                'description' => 'Espectacular mueble armable para TV de 60" fácil de montar',
                'img_url' => 'https://www.megamaxi.com/wp-content/uploads/2020/11/7862113770989-0.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 10,
                'name' => 'Sombrilla Beige',
                'price' => 103.20,
                'description' => '1095 SOMBRILLA BEIGE ESTRUCTURA METALICA LONA UV SEMIPERMEABLE',
                'img_url' => 'https://www.megamaxi.com/wp-content/uploads/2020/11/840101811095-0.jpg',
                'like_counter' => 122,
            ],
            [
                'enterprise_id' => 10,
                'name' => 'Candado de acero combinación',
                'price' => 3.84,
                'description' => 'Super candado de acero ultra-resistente y seguro contra golpes',
                'img_url' => 'https://www.megamaxi.com/wp-content/uploads/2021/05/7501206662465-0.jpg',
                'like_counter' => 133,
            ],
            [
                'enterprise_id' => 11,
                'name' => 'Cereal Trix',
                'price' => 5.50,
                'description' => 'Cereal basico para el desayuno',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Gte4Qm5ddbjFLagHg08I9_S79Ai4H5OlYg&usqp=CAU',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 11,
                'name' => 'Arroz Envejecido Santa Maria',
                'price' => 10.50,
                'description' => 'Arroz envejecido marca santa Maria para mayo rendimiento',
                'img_url' => 'https://images.rappi.com.ec/products/72461-1585093536299.png?d=200x200',
                'like_counter' => 1200,
            ],
            //for Tia
            [
                'enterprise_id' => 12,
                'name' => 'Deja',
                'price' => 3.50,
                'description' => 'Productos de limpieza de baños y Ropa',
                'img_url' => 'https://www.tia.com.ec/arquivos/mini%20banner%20limpieza.jpg?v=637193621514800000',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 12,
                'name' => 'Helados Pinguino',
                'price' => 10.50,
                'description' => 'Helados de marca pinguino de diferentes sabores',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9eX00sNi8kHqdMMU1po3vpyjOTfsbJpyakA&usqp=CAU',
                'like_counter' => 1200,
            ],
            //For confiteca
            [
                'enterprise_id' => 13,
                'name' => 'ChicleBola super hiper ácido',
                'price' => 4.30,
                'description' => 'Chicles de sabor limon-ácido',
                'img_url' => 'https://confiteriaminerva.com/inicio/wp-content/uploads/ACIDO.100-300x300.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 13,
                'name' => 'CARAMELO LECHE MIEL X 100',
                'price' => 1.80,
                'description' => 'carmaelops leche miel clasicos',
                'img_url' => 'https://confiteriaminerva.com/inicio/wp-content/uploads/LECHE.MIEL_.jpg',
                'like_counter' => 1200,
            ],
            //For de Prati
            [
                'enterprise_id' => 14,
                'name' => 'Blusa Manga Bombacha Vero Moda',
                'price' => 4.30,
                'description' => 'camisa para mujer',
                'img_url' => 'https://images.deprati.com.ec/sys-master/images/h1d/h79/10071881154590/5714927655698-0_product_300Wx450H',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 14,
                'name' => 'Blusa Manga Bombacha Vero Moda',
                'price' => 36.99,
                'description' => 'camisa para mujeres',
                'img_url' => 'https://images.deprati.com.ec/sys-master/images/h83/h39/10093654638622/16110274-0_product_300Wx450H',
                'like_counter' => 1200,
            ],
            //Farmacias Cruz Azul
            [
                'enterprise_id' => 15,
                'name' => 'Gelicart',
                'price' => 6.30,
                'description' => 'Regenerador de colageno',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8XkXQlRnBcQo371OjDSWJRtDSDmcWZycUDg&usqp=CAU',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 15,
                'name' => 'Bcomplex',
                'price' => 7.50,
                'description' => 'Jarabe para la tos',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFvOBLkVdsXaf82SRkfRGJmepfDsD648rCqQ&usqp=CAU',
                'like_counter' => 1200,
            ],
            //Farmacias Sana Sana
            [
                'enterprise_id' => 16,
                'name' => 'Kaloba',
                'price' => 7.15,
                'description' => 'Regenerador de ojos',
                'img_url' => 'https://www.sanasana.com.ec/PreciosDeLocura/images/p8.png',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 16,
                'name' => 'Vaporal',
                'price' => 1.99,
                'description' => 'descongestionante nasal',
                'img_url' => 'https://www.sanasana.com.ec/PreciosDeLocura/images/p15.png',
                'like_counter' => 1200,
            ],
            //Agripac
            [
                'enterprise_id' => 17,
                'name' => 'AGRAL 90',
                'price' => 5.50,
                'description' => 'Se utiliza en mezcla con herbicidas, insecticidas y fungicidas en todos los cultivos.',
                'img_url' => 'https://agripac.com.ec/wp-content/uploads/2020/11/4000408-1-1200x1200.jpg.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 17,
                'name' => 'TERCO EMULSIFICANTE',
                'price' => 7.50,
                'description' => 'Disminuye la tensión superficial del agua facilitando la mezcla completa de los agroquímicos, en
                especial de las formulaciones con base en aceite.
                Estabiliza las emulsiones por tiempo prolongado.',
                'img_url' => 'https://agripac.com.ec/wp-content/uploads/2020/11/4000414-1-1200x1200.jpg',
                'like_counter' => 1200,
            ],
            //Farmacias Fybeca
            [
                'enterprise_id' => 18,
                'name' => 'Alchol Weir',
                'price' => 15.50,
                'description' => 'alchol de uso domestico',
                'img_url' => 'https://fybeca.com/GDCFybeca/pages/20-large.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 18,
                'name' => 'Ensure Plus',
                'price' => 5.50,
                'description' => 'Bebida simple ensure',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTP5OZWV5_SwcGpmiu75dzYoDwgKYRIRBhoA&usqp=CAU',
                'like_counter' => 1200,
            ],
            //Pyca
            [
                'enterprise_id' => 19,
                'name' => 'Árbol de Navidad Tokio 240 cm',
                'price' => 59.50,
                'description' => 'El Árbol de Navidad Tokio trae un diseño clásico, con
                altura de 240 cm.',
                'img_url' => 'https://pycca.vteximg.com.br/arquivos/ids/177871-250-250/Arbol-W21673.png?v=637062284672200000',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 19,
                'name' => 'Tablet Amazon Fire HD8 Negro',
                'price' => 157.02,
                'description' => 'Procesador: MediaTek MT8163V 2GHz
                Pantalla: 8" 1280 x 800
                RAM: 2 GB',
                'img_url' => 'https://pycca.vteximg.com.br/arquivos/ids/201668-600-600/D02650.png?v=637593941890730000',
                'like_counter' => 1200,
            ],
            //boayaca
            [
                'enterprise_id' => 20,
                'name' => 'UPS FORZA 800VA/480W 120V 6-NEMA',
                'price' => 93.32,
                'description' => ' Software de gestión: Forza Tracker',
                'img_url' => 'https://boyaca.com/wp-content/themes/boyaca/vista/imagenes/grafpeqs/99207.jpg',
                'like_counter' => 1200,
            ],
            [
                'enterprise_id' => 20,
                'name' => 'PRO SPIN BIKE LYCAN WITHOUT CONSOLE',
                'price' => 1279.02,
                'description' => 'PRO SPIN BIKE LYCAN WITHOUT CONSOLE',
                'img_url' => 'https://boyaca.com/wp-content/themes/boyaca/vista/imagenes/grafpeqs/80751.jpg',
                'like_counter' => 1200,
            ],
        )->create();
    }
}
