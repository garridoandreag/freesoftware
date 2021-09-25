<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BranchofficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* & CAFE */
        DB::table('branchoffice')->insert([
            'name' => '& Café Antigua',
            'zone' => '1',
            'address' => 'Calle de Los Nazarenos',
            'vendor_id' => 1,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '& Café Zona 15',
            'zone' => '15',
            'address' => '2a. Calle 19-45 Zona 15, Vista Hermosa I',
            'vendor_id' => 1,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '& Café Obelisco',
            'zone' => '10',
            'address' => '16 Calle 1-01 Zona 10 C.C. Plaza Obelisco',
            'vendor_id' => 1,
            'town_id' => 4,
        ]);

        /* POLLO PINULITO */

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito San Jose Pinula I',
            'zone' => '3',
            'address' => '1 calle 1 Avenida zona 3, San José Pinula',
            'vendor_id' => 2,
            'town_id' => 9,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito San Jose Pinula II',
            'zone' => '3',
            'address' => '1 calle 3 Avenida zona 3, San José Pinula',
            'vendor_id' => 2,
            'town_id' => 9,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito Don Justo',
            'zone' => '0',
            'address' => 'Carretera a San José Pinula Km. 16.6, Santa Catarina Pinula',
            'vendor_id' => 2,
            'town_id' => 15,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito Puerto de San Jose',
            'zone' => '0',
            'address' => 'Ave 30 de Junio, Puerto de San José, San José',
            'vendor_id' => 2,
            'town_id' => 163,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito Carretera a El Salvador',
            'zone' => '0',
            'address' => 'Carretera a El Salvador Km. 13.5, Centro Comercial Plaza Express, Santa Catarina Pinula',
            'vendor_id' => 2,
            'town_id' => 15,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito 11 Avenida Zona 10',
            'zone' => '10',
            'address' => '19 calle 11 Avenida zona 10, Guatemala',
            'vendor_id' => 2,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito 13 Calle Zona 10',
            'zone' => '10',
            'address' => '13 calle 2 Avenida zona 10, Guatemala',
            'vendor_id' => 2,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito Zona 14',
            'zone' => '14',
            'address' => '9 calle 18 Avenida zona 14, Guatemala',
            'vendor_id' => 2,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Pinulito San Cristóbal',
            'zone' => '8',
            'address' => 'Bulevar Principal de Ciudad San Cristóbal, Zona 8',
            'vendor_id' => 2,
            'town_id' => 6,
        ]);

        /* 7 CALDOS */

        DB::table('branchoffice')->insert([
            'name' => '7 Caldos Antigua',
            'zone' => '1',
            'address' => '3a. Calle Oriente, entre Calle de los Duelos y 1ra',
            'vendor_id' => 3,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '7 Caldos Cardales de Cayalá',
            'zone' => '16',
            'address' => 'Blvd. Austriaco, Diagonal 35, 16-25 Zona 16 C.C. Cardales de Cayalá',
            'vendor_id' => 3,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '7 Caldos Zona 11',
            'zone' => '11',
            'address' => '23 ave 0-18 zona 11',
            'vendor_id' => 3,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '7 Caldos MetroNorte',
            'zone' => '17',
            'address' => 'Km. 5 Carr Al Atlantico Zona 17',
            'vendor_id' => 3,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => '7 Caldos Zona 10',
            'zone' => '10',
            'address' => '4ta avenida 7-00 zona 10',
            'vendor_id' => 3,
            'town_id' => 4,
        ]);

        /* AL MACARONE */

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Mixco',
            'zone' => '1',
            'address' => '6ta avenida 6-30 zona 1 Mixco',
            'vendor_id' => 4,
            'town_id' => 6,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Antigua Guatemala',
            'zone' => '1',
            'address' => '4 calle poniente',
            'vendor_id' => 4,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Escuintla',
            'zone' => '1',
            'address' => '4 avenida 6-103, zona 1',
            'vendor_id' => 4,
            'town_id' => 160,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Mazatenango',
            'zone' => '1',
            'address' => '1 avenida 6-24, zona 1',
            'vendor_id' => 4,
            'town_id' => 176,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Villa Nueva',
            'zone' => '1',
            'address' => '5ta avenida 1-93 zona 1 Villa Nueva',
            'vendor_id' => 4,
            'town_id' => 17,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Amatitlán',
            'zone' => '1',
            'address' => '6ta calle 3-26 Amatitlan',
            'vendor_id' => 4,
            'town_id' => 1,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Chimaltenango',
            'zone' => '2',
            'address' => '5 avenida 2-35, zona 2',
            'vendor_id' => 4,
            'town_id' => 97,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Xela',
            'zone' => '1',
            'address' => 'Calle Rodolfo Robles',
            'vendor_id' => 4,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Xela Terminal',
            'zone' => '3',
            'address' => 'Terminal Minerva, zona 3',
            'vendor_id' => 4,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Barberena',
            'zone' => '1',
            'address' => '5 calle 5-04, zona 1',
            'vendor_id' => 4,
            'town_id' => 159,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Puerto San José',
            'zone' => '0',
            'address' => 'Avenida 30 de junio y 11 calle',
            'vendor_id' => 4,
            'town_id' => 163,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone Plaza Palmeras, Escuintla',
            'zone' => '1',
            'address' => 'Centro Comercial Plaza Palmeras',
            'vendor_id' => 4,
            'town_id' => 160,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Al Macarone San Lucas',
            'zone' => '1',
            'address' => 'Centro Comercial Las Puertas',
            'vendor_id' => 4,
            'town_id' => 121,
        ]);

        /* SAN MARTÍN */
        DB::table('branchoffice')->insert([
            'name' => 'San Martín San Nicolás',
            'zone' => '4',
            'address' => '41 Avenida 3-10 Zona 4 C.C. Plaza San Nicolás, Local 108-109',
            'vendor_id' => 5,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'San Martín Xela Minerva',
            'zone' => '3',
            'address' => '23 avenida 4-14 zona 3',
            'vendor_id' => 5,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'San Martín Santa Amelia',
            'zone' => '16',
            'address' => 'Blvd. Centro Médico Militar, 12-05 Zona 16 C.C. Santa Amelia, Local 8-9',
            'vendor_id' => 5,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'San Martín Las Puertas, San Lucas',
            'zone' => '0',
            'address' => 'Kilómetro 29.5 Carretera Interamericana',
            'vendor_id' => 5,
            'town_id' => 121,
        ]);

        /* ANFORA */

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Escuintla',
            'zone' => '1',
            'address' => 'Centro Comercial Pradera Escuintla',
            'vendor_id' => 6,
            'town_id' => 160,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Xela',
            'zone' => '3',
            'address' => '20 avenida 3-95, zona 3',
            'vendor_id' => 6,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Chimaltenango',
            'zone' => '2',
            'address' => '1 calle 7-27, zona 2 Centro Comercial Pradera',
            'vendor_id' => 6,
            'town_id' => 97,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Retalhuleu',
            'zone' => '5',
            'address' => '1 calle y 5 avenida, zona 5 Centro Comercial La Trinidad Retalhuleu',
            'vendor_id' => 6,
            'town_id' => 198,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Mazatenango',
            'zone' => '1',
            'address' => '1 avenida, 5 calle, zona 1',
            'vendor_id' => 6,
            'town_id' => 176,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Antigua',
            'zone' => '1',
            'address' => '4a. Calle Poniente No. 24',
            'vendor_id' => 6,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Anfora Zona 15',
            'zone' => '15',
            'address' => 'Blvd. Vista Hermosa, 2a. Calle 16-76 Zona 15 Local B',
            'vendor_id' => 6,
            'town_id' => 4,
        ]);

        /* APPLEBEE'S */

        DB::table('branchoffice')->insert([
            'name' => 'Applebee\'s Portales',
            'zone' => '17',
            'address' => 'Km. 4.5 Carretera al Atlántico, C.C Portales 2 Nivel Local L-235',
            'vendor_id' => 7,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Applebee\'s Zona 15',
            'zone' => '15',
            'address' => 'Blvd. Vista Hermosa, zona 15 Vista Hermosa I',
            'vendor_id' => 7,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Applebee\'s Zona 10',
            'zone' => '10',
            'address' => '2a. Avenida 12-55 Zona 10',
            'vendor_id' => 7,
            'town_id' => 4,
        ]);

        /* Kentucky Fried Chicken */

        DB::table('branchoffice')->insert([
            'name' => 'Kentucky Fried Chicken Miraflores',
            'zone' => '11',
            'address' => 'Calz. Roosevelt, 21 Avenida 4-32 Zona 11 C.C. Paseo Miraflores',
            'vendor_id' => 8,
            'town_id' => 4,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Kentucky Fried Chicken Miraflores Z 9',
            'zone' => '9',
            'address' => '7a. Avenida 14-00 Zona 9',
            'vendor_id' => 8,
            'town_id' => 4,
        ]);

        /* Pollo Brujo */

        DB::table('branchoffice')->insert([
            'name' => 'Pollo Brujo Arkadia',
            'zone' => '10',
            'address' => 'Boulevard Los Próceres Zona 10, Arkadia Shopping',
            'vendor_id' => 9,
            'town_id' => 4,
        ]);

        
        DB::table('branchoffice')->insert([
            'name' => 'Pollo Brujo Miraflores',
            'zone' => '11',
            'address' => 'Calzada Roosevelt, C.C. Miraflores',
            'vendor_id' => 9,
            'town_id' => 4,
        ]);

        /* FOTOLAB */

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Chiquimula',
            'zone' => '1',
            'address' => '10 avenida 2-10 Apto. A zona 1, Chiquimula',
            'vendor_id' => 10,
            'town_id' => 220,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Huehuetenango',
            'zone' => '1',
            'address' => '4 Calle 4-13 zona 1',
            'vendor_id' => 10,
            'town_id' => 278,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Petén',
            'zone' => '0',
            'address' => 'Callejón El Crucero, calle 30 de Junio Isla de Flores',
            'vendor_id' => 10,
            'town_id' => 43,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Quiché',
            'zone' => '1',
            'address' => '2a. avenida 7-03 Zona 1',
            'vendor_id' => 10,
            'town_id' => 57,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Retalhuleu',
            'zone' => '1',
            'address' => '5a. avenida A 4-97',
            'vendor_id' => 10,
            'town_id' => 198,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Malacatán',
            'zone' => '1',
            'address' => '5a. Calle 2-60 Zona 1',
            'vendor_id' => 10,
            'town_id' => 322,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Coatepeque',
            'zone' => '1',
            'address' => '4 avenida 4-43 zona 1',
            'vendor_id' => 10,
            'town_id' => 251,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Mazatenango',
            'zone' => '1',
            'address' => '7ma. Calle 4-16 Zona 1',
            'vendor_id' => 10,
            'town_id' => 176,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab Santa Lucía Cotzumalguapa',
            'zone' => '0',
            'address' => '3a. Avenida 3-71',
            'vendor_id' => 10,
            'town_id' => 161,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Fotolab San Pedro Sacatépequez',
            'zone' => '1',
            'address' => '4ta. Calle 5-49 Zona 1, Edificio Maranatha',
            'vendor_id' => 10,
            'town_id' => 13,
        ]);

        /* PIZZA HUT */

        DB::table('branchoffice')->insert([
            'name' => 'Pizza Hut Xela',
            'zone' => '3',
            'address' => 'Avenida Las Américas, 7-12, zona 3 Centro Comercial Pradera Xela',
            'vendor_id' => 11,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Pizza Hut Portales',
            'zone' => '17',
            'address' => 'CA-9 Norte Ruta al Atlántico, 03-20 Zona 17 C.C. Portales, 3er. Nivel,',
            'vendor_id' => 11,
            'town_id' => 4,
        ]);

        /* MCDONALDS */

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s Cobán',
            'zone' => '2',
            'address' => '1 calle 15-12, zona 2',
            'vendor_id' => 12,
            'town_id' => 18,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s El Rancho',
            'zone' => '0',
            'address' => 'Aldea El Rancho, San Agustín Acasaguastlán',
            'vendor_id' => 12,
            'town_id' => 243,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s Pradera Chimaltenango',
            'zone' => '2',
            'address' => '7 calle 2-02, zona 2 Centro Comercial Pradera Chimaltenango',
            'vendor_id' => 12,
            'town_id' => 97,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s Pradera Chiquimula',
            'zone' => '2',
            'address' => 'Km. 167.5 Carretera a Esquipulas, CA-10 Centro Comercial Pradera Chiquimula',
            'vendor_id' => 12,
            'town_id' => 220,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s Antigua',
            'zone' => '1',
            'address' => '4a. Calle Poniente No 21',
            'vendor_id' => 12,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'McDonald\'s Zona 4',
            'zone' => '4',
            'address' => '7a. Ave. 1-34 zona 4',
            'vendor_id' => 12,
            'town_id' => 4,
        ]);

        /* SUBWAY */

        DB::table('branchoffice')->insert([
            'name' => 'subway Puerto Barrios',
            'zone' => '0',
            'address' => 'Km 292.5 Centro Comercial Pradera Puerto Barrios',
            'vendor_id' => 13,
            'town_id' => 204,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Subway Paseo Las Américas, Quetzaltenango',
            'zone' => '3',
            'address' => 'Avenida las Américas, 9 calle, zona 3 Centro Comercial Paseo Las Américas, local A',
            'vendor_id' => 13,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Subway Cobán',
            'zone' => '2',
            'address' => '1era calle, 15-20, Z.2, C.C. Plaza Magdalena',
            'vendor_id' => 13,
            'town_id' => 18,
        ]);

        /* Domino's */

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Zacapa',
            'zone' => '1',
            'address' => '4 calle 10-08, zona 1',
            'vendor_id' => 14,
            'town_id' => 219,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Jalapa',
            'zone' => '2',
            'address' => '1 calle 0-78, zona 2 Avenida Chipilapa',
            'vendor_id' => 14,
            'town_id' => 231,
        ]);

        
        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Sanarate',
            'zone' => '2',
            'address' => '0 avenida 2-30, zona 2',
            'vendor_id' => 14,
            'town_id' => 241,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Jutiapa',
            'zone' => '3',
            'address' => '5 calle 4-40, zona 3',
            'vendor_id' => 14,
            'town_id' => 129,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Chiquimulilla',
            'zone' => '4',
            'address' => '2 avenida 02-00, zona 4 Barrio Santiago',
            'vendor_id' => 14,
            'town_id' => 148,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Quiché',
            'zone' => '1',
            'address' => '1 avenida 9-02, zona 1',
            'vendor_id' => 14,
            'town_id' => 57,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s San Marcos',
            'zone' => '1',
            'address' => '6 avenida 6-39, zona 1',
            'vendor_id' => 14,
            'town_id' => 311,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Salamá',
            'zone' => '1',
            'address' => '6 calle 7-20, zona 1',
            'vendor_id' => 14,
            'town_id' => 35,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Domino\'s Metronorte',
            'zone' => '17',
            'address' => 'Km. 5, Carretera al Atlántico, Zona 17, C.C. Metro',
            'vendor_id' => 14,
            'town_id' => 4,
        ]);

        /* BURGUER KING */

        DB::table('branchoffice')->insert([
            'name' => 'Burguer King Petén',
            'zone' => '17',
            'address' => '1 calle y 6 avenida',
            'vendor_id' => 15,
            'town_id' => 43,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Burguer King Teculután',
            'zone' => '0',
            'address' => 'kM. 122 Carretera al Atlántico',
            'vendor_id' => 15,
            'town_id' => 217,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Burguer King Antigua',
            'zone' => '1',
            'address' => '4a. Calle Poniente No. 7',
            'vendor_id' => 15,
            'town_id' => 114,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Burguer King Pradera Xela',
            'zone' => '3',
            'address' => 'Avenida Las Américas, 7-12, zona 3 Centro Comercial Pradera Xela',
            'vendor_id' => 15,
            'town_id' => 246,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Burguer King Pacific Center',
            'zone' => '11',
            'address' => 'Calz. Aguilar Batres 32-10 Zona 11 C.C. Pacific Center, Local 315,',
            'vendor_id' => 15,
            'town_id' => 4,
        ]);

        /* CARGO EXPRESO */
        DB::table('branchoffice')->insert([
            'name' => 'Cargo Expreso',
            'zone' => '12',
            'address' => '31 Calle, 25-45 Colonia Santa Elisa',
            'vendor_id' => 16,
            'town_id' => 4,
        ]);

        /* Farmacia Carolina & H */

        DB::table('branchoffice')->insert([
            'name' => 'Farmacia Carolina & H Siquinalá',
            'zone' => '1',
            'address' => '8 calle 5-24, zona 1',
            'vendor_id' => 17,
            'town_id' => 164,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Farmacia Carolina & H Mazatenango',
            'zone' => '1',
            'address' => 'Km. 158 Carretera a Mazatenango, CA-2 Centro Comercial Plaza Américas',
            'vendor_id' => 17,
            'town_id' => 176,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Farmacia Carolina & H Morales',
            'zone' => '0',
            'address' => 'Morales, Izabal',
            'vendor_id' => 17,
            'town_id' => 207,
        ]);

        /* Farmacia Galeno */

        DB::table('branchoffice')->insert([
            'name' => 'Farmacia Galeno',
            'zone' => '11',
            'address' => 'Calz Batres 9-00 Z-11 Col Progreso',
            'vendor_id' => 18,
            'town_id' => 136,
        ]);

        /* INTELAF */

        DB::table('branchoffice')->insert([
            'name' => 'Intelaf Multicentro San Lucas',
            'zone' => '11',
            'address' => 'Km 29.5 Carretera Interamericana Local 19',
            'vendor_id' => 19,
            'town_id' => 121,
        ]);

        DB::table('branchoffice')->insert([
            'name' => 'Intelaf Reforma',
            'zone' => '10',
            'address' => 'Avenida Reforma 9-55 Zona 10 Edificio Reforma 10, Local 101-102',
            'vendor_id' => 19,
            'town_id' => 4,
        ]);

        /* hotel */

        DB::table('branchoffice')->insert([
            'name' => 'Hotel y Parque Acuático Longarone',
            'zone' => '0',
            'address' => 'Kilometro 126.5 Carretera Al Atlantico, Santa Cruz Rio Hondo',
            'vendor_id' => 20,
            'town_id' => 214,
        ]);

        /* STEREN */

        DB::table('branchoffice')->insert([
            'name' => 'STEREN Reforma',
            'zone' => '10',
            'address' => '10 Calle 0-26, Zona 10, 1010, Guatemala, Sobre 10 calle frente a Restaurante Altuna',
            'vendor_id' => 21,
            'town_id' => 4,
        ]);

    }
}
