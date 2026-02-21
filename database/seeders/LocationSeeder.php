<?php

namespace Database\Seeders;

use App\Models\Canton;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = ['San José', 'Alajuela', 'Cartago', 'Heredia', 'Guanacaste', 'Puntarenas', 'Limón'];
        foreach ($provinces as $province) {
            Province::create([
                'name' => $province,
            ]);
        }

        // cantones de SJ
        $cantonesSJ = ['San José', 'Escazú',
            'Desamparados', 'Puriscal', 'Tarrazú',
            'Aserrí', 'Mora', 'Goicoechea', 'Santa Ana',
            'Alajuelita', 'Vázquez de Coronado', 'Acosta', 'Tibás', 'Moravia', 'Montes de Oca', 'Turrubares', 'Dota',
            'Curridabat', 'Peréz Zeledón', 'León Cortés Castro'];
        foreach ($cantonesSJ as $cantonSJ) {
            Canton::create([
                'name' => $cantonSJ,
                'province_id' => 1,
            ]);
        }

        // cantones de Alajuela
        $cantonsAlajuela = ['Alajuela', 'San Ramón', 'Grecia', 'San Mateo', 'Atenas', 'Naranjo', 'Palmares', 'Poás',
            'Orotina', 'San Carlos', 'Zarcero', 'Sarchí', 'Upala', 'Los Chiles', 'Guatuso', 'Río Cuarto'];
        foreach ($cantonsAlajuela as $cantonAlajuela) {
            Canton::create([
                'name' => $cantonAlajuela,
                'province_id' => 2,
            ]);
        }
        // cantones de Cartago
        $cantonsCartago = ['Cartago',
            'Paríso', 'La Unión', 'Jiménez', 'Turrialba',
            'Alvarado', 'Oreamundo', 'El Cuarco'];

        foreach ($cantonsCartago as $cantonCartago) {
            Canton::create([
                'name' => $cantonCartago,
                'province_id' => 3,
            ]);
        }
        // Cantones de Heredia
        $cantonsHeredia = ['Heredia', 'Barva', 'Santo Domingo',
            'Santa Bárbara', 'San Rafael', 'San Isidro', 'Belén', 'Flores', 'San Pablo', 'Sarapiquí'];

        foreach ($cantonsHeredia as $cantonHeredia) {
            Canton::create([
                'name' => $cantonHeredia,
                'province_id' => 4,
            ]);
        }

        // cantones de Guanacaste
        $cantonsGuanacaste = ['Liberia', 'Nicoya', 'Santa Cruz', 'Bagaces', 'Carrillo', 'Cañas', 'Abangares', 'Tilarán', 'Nandayure', 'La Cruz', 'Hojancha'];

        foreach ($cantonsGuanacaste as $cantonGuanacaste) {
            Canton::create([
                'name' => $cantonGuanacaste,
                'province_id' => 5,
            ]);
        }

        // cantones de Puntarenas
        $cantonsPuntarenas = ['Puntarenas', 'Esparza', 'Buenos Aires', 'Montes de Oro', 'Osa',
            'Quepos', 'Golfito', 'Coto Brus', 'Parrita', 'Corredores', 'Garabito', 'Monte Verde'];

        foreach ($cantonsPuntarenas as $cantonPuntarenas) {
            Canton::create([
                'name' => $cantonPuntarenas,
                'province_id' => 6,
            ]);
        }

        $cantonsLimon = ['Limón', 'Pococí', 'Siquirres', 'Talamanca', 'Matina', 'Guácimo'];

        foreach ($cantonsLimon as $cantonLimon) {
            Canton::create([
                'name' => $cantonLimon,
                'province_id' => 7,
            ]);
        }

        // cantones de Limón
        Canton::create([
            'name' => 'Limón',
            'province_id' => 7,
        ]);

        // distritos de San José
        $SJDistricts = [
            'Carmen',
            'Merced',
            'Hospital',
            'Catedral',
            'Zapote',
            'San Francisco de Dos Ríos',
            'Uruca',
            'Mata Redonda',
            'Pavas',
            'Hatillo',
            'San Sebastián',
        ];
        foreach ($SJDistricts as $SJDistrict) {
            District::create([
                'name' => $SJDistrict,
                'canton_id' => 1,
            ]);
        }

        // distritos de Escazú
        $EscazuDistricts = [
            'Escazú',
            'San Antonio',
            'San Rafael',
        ];
        foreach ($EscazuDistricts as $EscazuDistrict) {
            District::create([
                'name' => $EscazuDistrict,
                'canton_id' => 2,
            ]);
        }

        // distritos de Desamparados
        $DesamparadosDistricts = [
            'Desamparados',
            'San Miguel',
            'San Juan de Dios',
            'San Rafel Arriba',
            'San Antonio',
            'Frailes',
            'Patarra',
            'San Cristobal',
            'Rosario',
            'Damas',
            'San Rafael Abajo',
            'Gravilias',
            'Los Guido',
        ];
        foreach ($DesamparadosDistricts as $DesamparadosDistrict) {
            District::create([
                'name' => $DesamparadosDistrict,
                'canton_id' => 3,
            ]);
        }

        // distritos de Puriscal
        $PuriscalDistricts = [
            'Santiago',
            'Mercedes Sur',
            'Barbacoas',
            'San Rafael',
            'Candelarita',
            'Desamparaditos',
            'San Antonio',
            'Chires',
        ];
        foreach ($PuriscalDistricts as $PuriscalDistrict) {
            District::create([
                'name' => $PuriscalDistrict,
                'canton_id' => 4,
            ]);
        }
        // distritos de Tarrazú
        $TarrazuDistricts = [
            'San Marcos',
            'San Lorenzo',
            'San Carlos',
        ];
        foreach ($TarrazuDistricts as $TarrazuDistrict) {
            District::create([
                'name' => $TarrazuDistrict,
                'canton_id' => 5,
            ]);
        }

        // distritos de Aserrí
        $AserriDistricts = [
            'San Aserrí',
            'Tabarca',
            'Vuleta del Jorco',
            'San Gabriel',
            'Legua',
            'Monterrey',
            'Salitrillos',
        ];
        foreach ($AserriDistricts as $AserriDistrict) {
            District::create([
                'name' => $AserriDistrict,
                'canton_id' => 6,
            ]);
        }

        // distritos de Mora
        $MoraDistricts = [
            'Colón',
            'Guayabo',
            'Tabarcia',
            'Piedras Negras',
            'Picares',
            'Jaris',
            'Quitirrisí',
        ];
        foreach ($MoraDistricts as $MoraDistrict) {
            District::create([
                'name' => $MoraDistrict,
                'canton_id' => 7,
            ]);
        }

        // distritos de Goicochea
        $GoichocheaDistricts = [
            'Guadalupe',
            'San Francisco',
            'Calle Blancos',
            'Mata de Plátano',
            'Ipis',
            'Rancho Redondo',
            'Purral',
        ];
        foreach ($GoichocheaDistricts as $GoichocheaDistrict) {
            District::create([
                'name' => $GoichocheaDistrict,
                'canton_id' => 8,
            ]);
        }

        // distritos de Santa Ana
        $SantaAnaDistricts = [
            'Santa Ana',
            'Salitral',
            'Pozos',
            'Uruca',
            'Piedades',
            'Brasil',
        ];
        foreach ($SantaAnaDistricts as $SantaAnaDistrict) {
            District::create([
                'name' => $SantaAnaDistrict,
                'canton_id' => 9,
            ]);
        }

        // distritos de Alajuelita
        $AlajuelitaDistricts = [
            'Alajuelita',
            'San Josecito',
            'San Antonio',
            'Concepción',
            'San Felipe',
        ];
        foreach ($AlajuelitaDistricts as $AlajuelitaDistrict) {
            District::create([
                'name' => $AlajuelitaDistrict,
                'canton_id' => 10,
            ]);
        }

        // distritos de Vasquéz de Coronado
        $VCDistricts = [
            'San Isidro',
            'San Rafael ',
            'Dulce Nombre de Jesús',
            'Patalillo',
            'Cascajal',
        ];
        foreach ($VCDistricts as $VCDistrict) {
            District::create([
                'name' => $VCDistrict,
                'canton_id' => 11,
            ]);
        }

        // distritos de Acosta
        $AcostaDistricts = [
            'San Ignacio',
            'Guaitil ',
            'Palmichal',
            'Cangrejal',
            'Sabanillas',
        ];
        foreach ($AcostaDistricts as $AcostaDistrict) {
            District::create([
                'name' => $AcostaDistrict,
                'canton_id' => 12,
            ]);
        }

        // distritos de Tibás
        $TibasDistricts = [
            'San Juan',
            'Cinco Esquinas ',
            'Anselmo Llorente',
            'León XIII',
            'Colima',
        ];
        foreach ($TibasDistricts as $TibasDistrict) {
            District::create([
                'name' => $TibasDistrict,
                'canton_id' => 13,
            ]);
        }

        // distritos de Moravia
        $MoraviaDistricts = [
            'San Vincente',
            'Cinco Jerónimo ',
            'La Trinidad',
        ];
        foreach ($MoraviaDistricts as $MoraviaDistrict) {
            District::create([
                'name' => $MoraviaDistrict,
                'canton_id' => 14,
            ]);
        }

        // distritos de Montes de Oca
        $MODistricts = [
            'San Pedro',
            'Sabanilla ',
            'Mercedes',
            'San Rafael',
        ];
        foreach ($MODistricts as $MODistrict) {
            District::create([
                'name' => $MODistrict,
                'canton_id' => 15,
            ]);
        }

        // distritos de Turrubares
        $TurrubaresDistricts = [
            'San Pablo',
            'San Pedro ',
            'San Juan de Mata ',
            'San Luis',
            'Carara',
        ];
        foreach ($TurrubaresDistricts as $TurrubaresDistrict) {
            District::create([
                'name' => $TurrubaresDistrict,
                'canton_id' => 16,
            ]);
        }

        // distritos de Dota
        $DotaDistricts = [
            'Santa María',
            'Jardín ',
            'Copey',
        ];
        foreach ($DotaDistricts as $DotaDistrict) {
            District::create([
                'name' => $DotaDistrict,
                'canton_id' => 17,
            ]);
        }

        // distritos de Curridabat
        $CurridabatDistricts = [
            'Curridabat',
            'Granadilla ',
            'Sánchez',
            'Tirrases',
        ];
        foreach ($CurridabatDistricts as $CurridabatDistrict) {
            District::create([
                'name' => $CurridabatDistrict,
                'canton_id' => 18,
            ]);
        }

        // distritos de Peréz Zeledón
        $PZDistricts = [
            'San Isidro de El General',
            'El General ',
            'Daniel Flores',
            'Rivas',
            'San Pedro',
            'Platanares',
            'Pejibaye',
            'Cajón',
            'Barú',
            'Río Nuevo',
            'Paramo',
            'La Amistad',
        ];
        foreach ($PZDistricts as $PZDistrict) {
            District::create([
                'name' => $PZDistrict,
                'canton_id' => 19,
            ]);
        }

        // distritos de León Cotes Castro
        $LCCDistricts = [
            'San Pablo',
            'San Andrés',
            'Llano Bonito',
            'San Isidro',
            'Santa Cruz',
            'San Antonio',
        ];
        foreach ($LCCDistricts as $LCCDistrict) {
            District::create([
                'name' => $LCCDistrict,
                'canton_id' => 20,
            ]);
        }

        // distritos de Alajuela
        $AlajuelaDistricts = [
            'Alajuela',
            'San José',
            'Carrizal',
            'San Antonio ',
            'Guácima',
            'San Isidro',
            'Sabanilla',
            'San Rafael ',
            'Río Segundo',
            'Desamparados',
            'Turrucares',
            'Tambor',
            'Garita',
            'Sarapiquí',
        ];
        foreach ($AlajuelaDistricts as $AlajuelaDistrict) {
            District::create([
                'name' => $AlajuelaDistrict,
                'canton_id' => 21,
            ]);
        }

        // distritos de San Ramon
        $SRDistricts = [
            'San Ramón',
            'Santiago',
            'San Juan',
            'Piedades Norte ',
            'Piedades Sur',
            'San Rafael',
            'San Isidro',
            'Ángeles ',
            'Alfaro',
            'Volio',
            'Concepción',
            'Zapotal',
            'Peñas Blancas',
            'San Lorenzo',
        ];
        foreach ($SRDistricts as $SRDistrict) {
            District::create([
                'name' => $SRDistrict,
                'canton_id' => 22,
            ]);
        }

        // distritos de San Ramon
        $GreciaDistricts = [
            'Grecia',
            'San Isidro',
            'San José',
            'San Roque',
            'Tacares',
            'Puente de Piedra',
            'Bolivar',
        ];
        foreach ($GreciaDistricts as $GreciaDistrict) {
            District::create([
                'name' => $GreciaDistrict,
                'canton_id' => 23,
            ]);
        }

        // distritos de San Mateo
        $SMDistricts = [
            'San Mateo',
            'Desmonte',
            'Jesús María',
            'Labrador',
        ];
        foreach ($SMDistricts as $SMDistrict) {
            District::create([
                'name' => $SMDistrict,
                'canton_id' => 24,
            ]);
        }

        // distritos de Atenas
        $AtenasDistricts = [
            'Atenas',
            'Jesús',
            'Mercedes',
            'San Isidro',
            'Concepción',
            'San José',
            'Santa Eulalia',
            'Escobal',
        ];
        foreach ($AtenasDistricts as $AtenasDistrict) {
            District::create([
                'name' => $AtenasDistrict,
                'canton_id' => 25,
            ]);
        }

        // distritos de Naranjo
        $NaranjoDistricts = [
            'Naranjo',
            'San Miguel ',
            'San José',
            'Cirrí Sur',
            'San Jerónimo',
            'San Juan',
            'El Rosario',
            'Palmitos',
        ];
        foreach ($NaranjoDistricts as $NaranjoDistrict) {
            District::create([
                'name' => $NaranjoDistrict,
                'canton_id' => 26,
            ]);
        }

        // distritos de Palmares
        $PalmaresDistricts = [
            'Palmares',
            'Zaragoza ',
            'Buenos Aires',
            'Santiago',
            'Candelaria',
            'Esquipulas',
            'La Granja',
        ];
        foreach ($PalmaresDistricts as $PalmaresDistrict) {
            District::create([
                'name' => $PalmaresDistrict,
                'canton_id' => 27,
            ]);
        }

        // distritos de Póas
        $PoasDistricts = [
            'San perdro',
            'San Juan ',
            'San Rafael',
            'Carrillos',
            'Sabana Redonda ',
        ];
        foreach ($PoasDistricts as $PoasDistrict) {
            District::create([
                'name' => $PoasDistrict,
                'canton_id' => 28,
            ]);
        }

        // distritos de Póas
        $OrotinaDistricts = [
            'Orotina',
            'El Mastate',
            'Hacienda Vieja',
            'Coyolar',
            'La Ceiba',
        ];
        foreach ($OrotinaDistricts as $OrotinaDistrict) {
            District::create([
                'name' => $OrotinaDistrict,
                'canton_id' => 29,
            ]);
        }

        // distritos de San Carlos
        $SCDistricts = [
            'Quesada',
            'Florencia',
            'Buenavista',
            'Aguas Zarcas',
            'Venecia',
            'Pital',
            'La Fortuna',
            'La Tigra',
            'La Palmera',
            'Venado',
            'Cutris',
            'Monterrey',
            'Pocosol',
        ];
        foreach ($SCDistricts as $SCDistrict) {
            District::create([
                'name' => $SCDistrict,
                'canton_id' => 30,
            ]);
        }

        // distritos de Zarcero
        $ZarceroDistricts = [
            'Zarcero',
            'Laguna',
            'Tapesco',
            'Guadalupe',
            'Palmira',
            'Zapote',
            'Brisas',
        ];
        foreach ($ZarceroDistricts as $ZarceroDistrict) {
            District::create([
                'name' => $ZarceroDistrict,
                'canton_id' => 31,
            ]);
        }

        // distritos de Zarcero
        $SarchiDistricts = [
            'Sarchí Norte',
            'Sarchí Sur',
            'Toro Amarillo',
            'San Pedro',
            'Rodríguez',
        ];
        foreach ($SarchiDistricts as $SarchiDistrict) {
            District::create([
                'name' => $SarchiDistrict,
                'canton_id' => 32,
            ]);
        }

        // distritos de Upala
        $UpalaDistricts = [
            'Upala',
            'Aguas Claras',
            'San José de Upala (Pizote)',
            'Bijagua',
            'Delicias',
            'Dos Ríos',
            'Yolillal',
            'Canalete',
        ];
        foreach ($UpalaDistricts as $UpalaDistrict) {
            District::create([
                'name' => $UpalaDistrict,
                'canton_id' => 33,
            ]);
        }

        // distritos de los chiles
        $LCDistricts = [
            'Los Chiles',
            'Caño Negro',
            'El Amparo',
            'San Jorge',
        ];
        foreach ($LCDistricts as $LCDistrict) {
            District::create([
                'name' => $LCDistrict,
                'canton_id' => 34,
            ]);
        }

        // distritos de los Guatuso
        $GuatusoDistricts = [
            'San Rafael',
            'Buenavista',
            'Cote',
            'Katira',
        ];
        foreach ($GuatusoDistricts as $GuatusoDistrict) {
            District::create([
                'name' => $GuatusoDistrict,
                'canton_id' => 35,
            ]);
        }

        // distritos de los Rio Cuarto
        $RCDistricts = [
            'Río Cuarto',
            'Santa Rita',
            'Santa Isabel',
        ];
        foreach ($RCDistricts as $RCDistrict) {
            District::create([
                'name' => $RCDistrict,
                'canton_id' => 36,
            ]);
        }

        // distritos de Cartago
        $CartagoDistricts = [
            'Oriental',
            'Occidental',
            'Carmen',
            'San Nicolás',
            'Aguacaliente o San Francisco',
            'Guadalupe o Arenilla',
            'Corralillo',
            'Tierra Blanca',
            'Dulce Nombre',
            'Llano Grande',
            'Quebradilla',
        ];
        foreach ($CartagoDistricts as $CartagoDistrict) {
            District::create([
                'name' => $CartagoDistrict,
                'canton_id' => 37,
            ]);
        }

        // distritos de Paraíso
        $ParaisoDistricts = [
            'Paraíso',
            'Santiago',
            'Orosi',
            'Cachí',
            'Llanos de Santa Lucía',
            'Birrisito',
        ];
        foreach ($ParaisoDistricts as $ParaisoDistrict) {
            District::create([
                'name' => $ParaisoDistrict,
                'canton_id' => 38,
            ]);
        }

        // distritos de la Unión
        $UnionDistricts = [
            'Tres Ríos',
            'San Diego',
            'San Juan',
            'San Rafael',
            'Concepción',
            'Dulce Nombre',
            'San Ramón',
            'Río Azul',
        ];
        foreach ($UnionDistricts as $UnionDistrict) {
            District::create([
                'name' => $UnionDistrict,
                'canton_id' => 39,
            ]);
        }

        // distritos de Jimenez
        $JDistricts = [
            'Juan Viñas',
            'Tucurrique',
            'Pejibaye',
        ];
        foreach ($JDistricts as $JDistrict) {
            District::create([
                'name' => $JDistrict,
                'canton_id' => 40,
            ]);
        }

        // distritos de Turrialba
        $TurrialbaDistricts = [
            'Turrialba',
            'La Suiza',
            'Peralta',
            'Santa Cruz',
            'Santa Teresita',
            'Pavones',
            'Tuis',
            'Tayutic',
            'Santa Rosa',
            'Tres Equis',
            'La Isabel',
            'Chirripó',
        ];
        foreach ($TurrialbaDistricts as $TurrialbaDistrict) {
            District::create([
                'name' => $TurrialbaDistrict,
                'canton_id' => 41,
            ]);
        }

        // distritos de Alvarado
        $AlvaradoDistricts = [
            'Pacayas',
            'Cervantes',
            'Capellades',
        ];
        foreach ($AlvaradoDistricts as $AlvaradoDistrict) {
            District::create([
                'name' => $AlvaradoDistrict,
                'canton_id' => 42,
            ]);
        }

        // distritos de Oreamundo
        $OreamundoDistricts = [
            'San Rafael',
            'Cot',
            'Potrero Cerrado',
            'Cipreses',
            'Santa Rosa',
        ];
        foreach ($OreamundoDistricts as $OreamundoDistrict) {
            District::create([
                'name' => $OreamundoDistrict,
                'canton_id' => 43,
            ]);
        }

        // distritos de El Guarco
        $ElGuarcoDistricts = [
            'Tejar',
            'San Isidro',
            'Tobosi',
            'Patio de Agua',
        ];

        foreach ($ElGuarcoDistricts as $ElGuarcoDistrict) {
            District::create([
                'name' => $ElGuarcoDistrict,
                'canton_id' => 44,
            ]);
        }

        // distritos del cantón de Heredia
        $HerediaDistricts = [
            'Heredia',
            'Mercedes',
            'San Francisco',
            'Ulloa',
            'Varablanca',
        ];

        foreach ($HerediaDistricts as $HerediaDistrict) {
            District::create([
                'name' => $HerediaDistrict,
                'canton_id' => 45,
            ]);
        }

        // distritos del cantón de Barva
        $BarvaDistricts = [
            'Barva',
            'San Pedro',
            'San Pablo',
            'San Roque',
            'Santa Lucía',
            'San José de la Montaña',
        ];

        foreach ($BarvaDistricts as $BarvaDistrict) {
            District::create([
                'name' => $BarvaDistrict,
                'canton_id' => 46,
            ]);
        }
        // distritos del cantón de Santo Domingo
        $SantoDomingoDistricts = [
            'Santo Domingo',
            'San Vicente',
            'San Miguel',
            'Paracito',
            'Santo Tomás',
            'Santa Rosa',
            'Tures',
            'Pará',
        ];

        foreach ($SantoDomingoDistricts as $SantoDomingoDistrict) {
            District::create([
                'name' => $SantoDomingoDistrict,
                'canton_id' => 47,
            ]);
        }

        // distritos del cantón de Santa Bárbara
        $SantaBarbaraDistricts = [
            'Santa Bárbara',
            'San Pedro',
            'San Juan',
            'Jesús',
            'Santo Domingo',
            'Purabá',
        ];

        foreach ($SantaBarbaraDistricts as $SantaBarbaraDistrict) {
            District::create([
                'name' => $SantaBarbaraDistrict,
                'canton_id' => 48,
            ]);
        }

        // distritos del cantón de San Rafael
        $SanRafaelDistricts = [
            'San Rafael',
            'San Josecito',
            'Santiago',
            'Ángeles',
            'Concepción',
        ];

        foreach ($SanRafaelDistricts as $SanRafaelDistrict) {
            District::create([
                'name' => $SanRafaelDistrict,
                'canton_id' => 49,
            ]);
        }

        // distritos del cantón de San Isidro
        $SanIsidroDistricts = [
            'San Isidro',
            'San José',
            'Concepción',
            'San Francisco',
        ];

        foreach ($SanIsidroDistricts as $SanIsidroDistrict) {
            District::create([
                'name' => $SanIsidroDistrict,
                'canton_id' => 50,
            ]);
        }

        // distritos del cantón de Belén
        $BelenDistricts = [
            'San Antonio',
            'La Ribera',
            'La Asunción',
        ];

        foreach ($BelenDistricts as $BelenDistrict) {
            District::create([
                'name' => $BelenDistrict,
                'canton_id' => 51,
            ]);
        }

        // distritos del cantón de Flores
        $FloresDistricts = [
            'San Joaquín',
            'Barrantes',
            'Llorente',
        ];

        foreach ($FloresDistricts as $FloresDistrict) {
            District::create([
                'name' => $FloresDistrict,
                'canton_id' => 52,
            ]);
        }

        // distritos del cantón de San Pablo
        $SanPabloDistricts = [
            'San Pablo',
            'Rincón de Sabanilla',
        ];

        foreach ($SanPabloDistricts as $SanPabloDistrict) {
            District::create([
                'name' => $SanPabloDistrict,
                'canton_id' => 53,
            ]);
        }

        // distritos del cantón de Sarapiquí
        $SarapiquiDistricts = [
            'Puerto Viejo',
            'La Virgen',
            'Horquetas',
            'Llanuras del Gaspar',
            'Cureña',
        ];

        foreach ($SarapiquiDistricts as $SarapiquiDistrict) {
            District::create([
                'name' => $SarapiquiDistrict,
                'canton_id' => 54,
            ]);
        }

        // distritos del cantón de Liberia
        $LiberiaDistricts = [
            'Liberia',
            'Cañas Dulces',
            'Mayorga',
            'Nacascolo',
            'Curubandé',
        ];

        foreach ($LiberiaDistricts as $LiberiaDistrict) {
            District::create([
                'name' => $LiberiaDistrict,
                'canton_id' => 55,
            ]);
        }

        // distritos del cantón de Nicoya
        $NicoyaDistricts = [
            'Nicoya',
            'Mansión',
            'San Antonio',
            'Quebrada Honda',
            'Sámara',
            'Nosara',
            'Belén de Nosarita',
        ];

        foreach ($NicoyaDistricts as $NicoyaDistrict) {
            District::create([
                'name' => $NicoyaDistrict,
                'canton_id' => 56,
            ]);
        }

        // distritos del cantón de Santa Cruz
        $SantaCruzDistricts = [
            'Santa Cruz',
            'Bolsón',
            'Veintisiete de Abril',
            'Tempate',
            'Cartagena',
            'Cuajiniquil',
            'Diriá',
            'Cabo Velas',
            'Tamarindo',
        ];

        foreach ($SantaCruzDistricts as $SantaCruzDistrict) {
            District::create([
                'name' => $SantaCruzDistrict,
                'canton_id' => 57,
            ]);
        }

        // distritos del cantón de Bagaces
        $BagacesDistricts = [
            'Bagaces',
            'La Fortuna',
            'Mogote',
            'Río Naranjo',
        ];

        foreach ($BagacesDistricts as $BagacesDistrict) {
            District::create([
                'name' => $BagacesDistrict,
                'canton_id' => 58,
            ]);
        }

        // distritos del cantón de Carrillo
        $CarrilloDistricts = [
            'Filadelfia',
            'Palmira',
            'Sardinal',
            'Belén',
        ];

        foreach ($CarrilloDistricts as $CarrilloDistrict) {
            District::create([
                'name' => $CarrilloDistrict,
                'canton_id' => 59,
            ]);
        }

        // distritos del cantón de Abangares
        $AbangaresDistricts = [
            'Las Juntas',
            'Sierra',
            'San Juan',
            'Colorado',
        ];

        foreach ($AbangaresDistricts as $AbangaresDistrict) {
            District::create([
                'name' => $AbangaresDistrict,
                'canton_id' => 60,
            ]);
        }

        // distritos del cantón de Tilarán
        $TilaranDistricts = [
            'Tilarán',
            'Quebrada Grande',
            'Tronadora',
            'Santa Rosa',
            'Líbano',
            'Tierras Morenas',
            'Arenal',
            'Cabeceras',
        ];

        foreach ($TilaranDistricts as $TilaranDistrict) {
            District::create([
                'name' => $TilaranDistrict,
                'canton_id' => 61,
            ]);
        }

        // distritos del cantón de Nandayure
        $NandayureDistricts = [
            'Carmona',
            'Santa Rita',
            'Zapotal',
            'San Pablo',
            'Porvenir',
            'Bejuco',
        ];

        foreach ($NandayureDistricts as $NandayureDistrict) {
            District::create([
                'name' => $NandayureDistrict,
                'canton_id' => 62,
            ]);
        }

        // distritos del cantón de La Cruz
        $LaCruzDistricts = [
            'La Cruz',
            'Santa Cecilia',
            'La Garita',
            'Santa Elena',
        ];

        foreach ($LaCruzDistricts as $LaCruzDistrict) {
            District::create([
                'name' => $LaCruzDistrict,
                'canton_id' => 63,
            ]);
        }

        // distritos del cantón de Hojancha
        $HojanchaDistricts = [
            'Hojancha',
            'Monte Romo',
            'Puerto Carrillo',
            'Huacas',
            'Matambú',
        ];

        foreach ($HojanchaDistricts as $HojanchaDistrict) {
            District::create([
                'name' => $HojanchaDistrict,
                'canton_id' => 64,
            ]);
        }

        // distritos del cantón de Puntarenas
        $PuntarenasDistricts = [
            'Puntarenas',
            'Pitahaya',
            'Chomes',
            'Lepanto',
            'Paquera',
            'Manzanillo',
            'Guacimal',
            'Barranca',
            'Monte Verde',
            'Isla del Coco',
            'Cóbano',
        ];

        foreach ($PuntarenasDistricts as $PuntarenasDistrict) {
            District::create([
                'name' => $PuntarenasDistrict,
                'canton_id' => 65,
            ]);
        }

        // distritos del cantón de Esparza
        $EsparzaDistricts = [
            'Espíritu Santo',
            'San Juan Grande',
            'San Rafael',
            'San Jerónimo',
            'Caldera',
            'Macacona',
        ];

        foreach ($EsparzaDistricts as $EsparzaDistrict) {
            District::create([
                'name' => $EsparzaDistrict,
                'canton_id' => 66,
            ]);
        }

        // distritos del cantón de Buenos Aires
        $BuenosAiresDistricts = [
            'Buenos Aires',
            'Volcán',
            'Potrero Grande',
            'Boruca',
            'Pilas',
            'Colinas',
            'Chánguena',
            'Biolley',
            'Brunka',
        ];

        foreach ($BuenosAiresDistricts as $BuenosAiresDistrict) {
            District::create([
                'name' => $BuenosAiresDistrict,
                'canton_id' => 67,
            ]);
        }

        // distritos del cantón de Montes de Oro
        $MontesDeOroDistricts = [
            'Miramar',
            'La Unión',
            'San Isidro',
        ];

        foreach ($MontesDeOroDistricts as $MontesDeOroDistrict) {
            District::create([
                'name' => $MontesDeOroDistrict,
                'canton_id' => 68,
            ]);
        }

        // distritos del cantón de Osa
        $OsaDistricts = [
            'Ciudad Cortés',
            'Palmar',
            'Sierpe',
            'Bahía Ballena',
            'Piedras Blancas',
        ];

        foreach ($OsaDistricts as $OsaDistrict) {
            District::create([
                'name' => $OsaDistrict,
                'canton_id' => 69,
            ]);
        }
        // distritos del cantón de Quepos
        $QueposDistricts = [
            'Quepos',
            'Savegre',
            'Naranjito',
            'Manuel Antonio',
        ];

        foreach ($QueposDistricts as $QueposDistrict) {
            District::create([
                'name' => $QueposDistrict,
                'canton_id' => 70,
            ]);
        }

        // distritos del cantón de Golfito
        $GolfitoDistricts = [
            'Golfito',
            'Guaycará',
            'Pavón',
            'Puerto Jiménez',
            'La Palma',
        ];

        foreach ($GolfitoDistricts as $GolfitoDistrict) {
            District::create([
                'name' => $GolfitoDistrict,
                'canton_id' => 71,
            ]);
        }

        // distritos del cantón de Coto Brus
        $CotoBrusDistricts = [
            'San Vito',
            'Sabalito',
            'Aguabuena',
            'Limoncito',
            'Pittier',
            'Gutiérrez Braun',
        ];

        foreach ($CotoBrusDistricts as $CotoBrusDistrict) {
            District::create([
                'name' => $CotoBrusDistrict,
                'canton_id' => 72,
            ]);
        }

        // distritos del cantón de Pirra
        $PirraBrusDistricts = [
            'Pirrita',

        ];

        foreach ($PirraBrusDistricts as $PirraBrusDistrict) {
            District::create([
                'name' => $PirraBrusDistrict,
                'canton_id' => 73,
            ]);
        }
        // distritos del cantón de Corredores
        $CorredoresDistricts = [
            'Corredores',
            'La Cuesta',
            'Canoas',
            'Laurel',
            'San Juan',
        ];

        foreach ($CorredoresDistricts as $CorredoresDistrict) {
            District::create([
                'name' => $CorredoresDistrict,
                'canton_id' => 74,
            ]);
        }

        // distritos del cantón de Garabito
        $GarabitoDistricts = [
            'Jacó',
            'Tárcoles',
        ];

        foreach ($GarabitoDistricts as $GarabitoDistrict) {
            District::create([
                'name' => $GarabitoDistrict,
                'canton_id' => 75,
            ]);
        }

        // distritos del cantón de Monteverde
        $MonteverdeDistricts = [
            'Monteverde',
        ];

        foreach ($MonteverdeDistricts as $MonteverdeDistrict) {
            District::create([
                'name' => $MonteverdeDistrict,
                'canton_id' => 76,
            ]);
        }

        // distritos del cantón de Limón
        $LimonDistricts = [
            'Limón',
            'Valle La Estrella',
            'Río Blanco',
            'Matama',
            'Bataan',
            'Moin',
        ];

        foreach ($LimonDistricts as $LimonDistrict) {
            District::create([
                'name' => $LimonDistrict,
                'canton_id' => 77,
            ]);
        }

        // distritos del cantón de Pococí
        $PocociDistricts = [
            'Guápiles',
            'Jiménez',
            'La Rita',
            'Roxana',
            'Cariari',
            'Colorado',
            'La Colonia',
            'Berlin',
        ];

        foreach ($PocociDistricts as $PocociDistrict) {
            District::create([
                'name' => $PocociDistrict,
                'canton_id' => 78,
            ]);
        }

        // distritos del cantón de Siquirres
        $SiquirresDistricts = [
            'Siquirres',
            'Pacuarito',
            'Florida',
            'Germania',
            'Cairo',
            'Alegría',
            'Reventazón',
        ];

        foreach ($SiquirresDistricts as $SiquirresDistrict) {
            District::create([
                'name' => $SiquirresDistrict,
                'canton_id' => 79,
            ]);
        }
        // distritos del cantón de Talamanca
        $TalamancaDistricts = [
            'Bratsi',
            'Sixaola',
            'Cahuita',
            'Telire',
            'Barriada',
        ];

        foreach ($TalamancaDistricts as $TalamancaDistrict) {
            District::create([
                'name' => $TalamancaDistrict,
                'canton_id' => 80,
            ]);
        }

        // distritos del cantón de Matina
        $MatinaDistricts = [
            'Matina',
            'Batán',
            'Carrandí',
        ];

        foreach ($MatinaDistricts as $MatinaDistrict) {
            District::create([
                'name' => $MatinaDistrict,
                'canton_id' => 81,
            ]);
        }

        // distritos del cantón de Guácimo
        $GuacimoDistricts = [
            'Guácimo',
            'Mercedes',
            'Pocora',
            'Río Jiménez',
            'Duacarí',
        ];

        foreach ($GuacimoDistricts as $GuacimoDistrict) {
            District::create([
                'name' => $GuacimoDistrict,
                'canton_id' => 82,
            ]);
        }

    }
}
