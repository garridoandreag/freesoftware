<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Guatemala  */
        DB::table('town')->insert([
            'name' => 'Amatitlán',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Chinautla',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Chuarrancho',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Guatemala',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Fraijanes',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Mixco',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Palencia',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San José del Golfo',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San José Pinula',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Sacatepéquez',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Petapa',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Ayampuc',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Sacatepéquez',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'San Raymundo',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Catarina Pinula',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Villa Canales',
            'department_id' => 6,
        ]);

        DB::table('town')->insert([
            'name' => 'Villa Nueva',
            'department_id' => 6,
        ]);

        /*ALTA VERAPAZ */
        DB::table('town')->insert([
            'name' => 'Cobán',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz Verapaz',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'San Cristóbal Verapaz',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Tactic',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Tamahú',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Tucurú',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Panzós',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Senahú',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Carchá',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Chamelco',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'San Agustín Lanquín',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Cahabón',
            'department_id' => 1,
        ]);
        
        DB::table('town')->insert([
            'name' => 'Chisec',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Chahal',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Fray Bartolomé de las Casas',
            'department_id' => 1,
        ]);
        
        DB::table('town')->insert([
            'name' => 'Santa Catalina La Tinta',
            'department_id' => 1,
        ]);

        DB::table('town')->insert([
            'name' => 'Raxruhá',
            'department_id' => 1,
        ]);

         /*BAJA VERAPAZ */
         DB::table('town')->insert([
            'name' => 'Salamá',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'Cubulco',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'Granados',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'Purulhá',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'Rabinal',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz el Chol',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'San Jerónimo',
            'department_id' => 2,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Chicaj',
            'department_id' => 2,
        ]);

         /*PETEN */
         DB::table('town')->insert([
            'name' => 'Flores',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'San José',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'San Benito',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'La Libertad',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'San Francisco',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Ana',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Dolores',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'San Luis',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Sayaxché',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Melchor de Mencos',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Poptún',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'Las Cruces',
            'department_id' => 3,
        ]);

        DB::table('town')->insert([
            'name' => 'El Chal',
            'department_id' => 3,
        ]);

        /*QUICHÉ */
        DB::table('town')->insert([
            'name' => 'Santa Cruz del Quiché',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Chiché',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Chinique',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Zacualpa',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Chajul',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Chichicastenango',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Patzité',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Ilotenango',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Jocopilas',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Cunén',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Cotzal',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Joyabaj',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Nebaj',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés Sajcabajá',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Uspantán',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Sacapulas',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'San Bartolomé Jocotenango',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Canillá',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Chicamán',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Ixcán',
            'department_id' => 4,
        ]);

        DB::table('town')->insert([
            'name' => 'Pachalum',
            'department_id' => 4,
        ]);

        /*sOLOLÁ*/
        DB::table('town')->insert([
            'name' => 'Sololá',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Concepción',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Nahualá',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Panajachel',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés Semetabaj',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Palopó',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San José Chacayá',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Lucas Tolimán',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Marcos La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pablo La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Catarina Ixtahuacán',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Catarina Palopó',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Clara La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz La Laguna',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Lucía Utatlán',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Visitación',
            'department_id' => 5,
        ]);

        DB::table('town')->insert([
            'name' => 'Santiago Atitlán',
            'department_id' => 5,
        ]);

        /* CHIMALTENANGO */

        DB::table('town')->insert([
            'name' => 'Chimaltenango',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'San José Poaquíl',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'San Martín Jilotepeque',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Comalapa',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Apolonia',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Tecpán Guatemala',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Patzún',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Pochuta',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Patzicía',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz Balanyá',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Acatenango',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Yepocapa',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés Itzapa',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'Parramos',
            'department_id' => 7,
        ]);
        
        DB::table('town')->insert([
            'name' => 'Zaragoza',
            'department_id' => 7,
        ]);

        DB::table('town')->insert([
            'name' => 'El Tejar',
            'department_id' => 7,
        ]);

        /* SACATEPEQUEZ */
        DB::table('town')->insert([
            'name' => 'Alotenango',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'La Antigua Guatemala',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'Ciudad Vieja',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'Jocotenango',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'Magdalena Milpas Altas',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'Pastores',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Aguas Calientes',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'San Bartolomé Milpas Altas',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'San Lucas Sacatepéquez',
            'department_id' => 8,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Dueñas',
            'department_id' => 8,
        ]);       
        
        DB::table('town')->insert([
            'name' => 'Santa Catarina Barahona',
            'department_id' => 8,
        ]);      

        DB::table('town')->insert([
            'name' => 'Santa Lucía Milpas Altas',
            'department_id' => 8,
        ]); 
        
        DB::table('town')->insert([
            'name' => 'Santa María de Jesús',
            'department_id' => 8,
        ]);   

        DB::table('town')->insert([
            'name' => 'Santiago Sacatepéquez',
            'department_id' => 8,
        ]);   

        DB::table('town')->insert([
            'name' => 'Santo Domingo Xenacoj',
            'department_id' => 8,
        ]);   

        DB::table('town')->insert([
            'name' => 'Sumpango',
            'department_id' => 8,
        ]); 

        /* JUTIAPA */
        DB::table('town')->insert([
            'name' => 'Jutiapa',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Agua Blanca',
            'department_id' => 9,
        ]);        

        DB::table('town')->insert([
            'name' => 'Asunción Mita',
            'department_id' => 9,
        ]);    

        DB::table('town')->insert([
            'name' => 'Atescatempa',
            'department_id' => 9,
        ]);    

        DB::table('town')->insert([
            'name' => 'Comapa',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Conguaco',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'El Adelanto',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'El Progreso',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Jalpatagua',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Jerez',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Moyuta',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Pasaco',
            'department_id' => 9,
        ]); 

        DB::table('town')->insert([
            'name' => 'Quesada',
            'department_id' => 9,
        ]);

        DB::table('town')->insert([
            'name' => 'San José Acatempa',
            'department_id' => 9,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Catarina Mita',
            'department_id' => 9,
        ]);

        DB::table('town')->insert([
            'name' => 'Yupiltepeque',
            'department_id' => 9,
        ]);

        DB::table('town')->insert([
            'name' => 'Zapotitlán',
            'department_id' => 9,
        ]);

        /* SANTA ROSA */

        DB::table('town')->insert([
            'name' => 'Cuilapa',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Casillas Santa Rosa',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Chiquimulilla',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Guazacapán',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Nueva Santa Rosa',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Oratorio',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Pueblo Nuevo Viñas',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Tecuaco',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'San Rafael Las Flores',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz Naranjo',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Ixhuatán',
            'department_id' => 10,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Rosa de Lima',
            'department_id' => 10,
        ]);       
        
        DB::table('town')->insert([
            'name' => 'Taxisco',
            'department_id' => 10,
        ]);   
        
        DB::table('town')->insert([
            'name' => 'Barberena',
            'department_id' => 10,
        ]);  

        /* ESCUINTLA */

        DB::table('town')->insert([
            'name' => 'Escuintla',
            'department_id' => 11,
        ]);  

        DB::table('town')->insert([
            'name' => 'Santa Lucía Cotzumalguapa',
            'department_id' => 11,
        ]);  

        DB::table('town')->insert([
            'name' => 'Palín',
            'department_id' => 11,
        ]);  

        DB::table('town')->insert([
            'name' => 'Puerto de San José',
            'department_id' => 11,
        ]);  

        DB::table('town')->insert([
            'name' => 'Siquinalá',
            'department_id' => 11,
        ]); 

        DB::table('town')->insert([
            'name' => 'Puerto de Iztapa',
            'department_id' => 11,
        ]); 

        DB::table('town')->insert([
            'name' => 'Nueva Concepción',
            'department_id' => 11,
        ]); 

        DB::table('town')->insert([
            'name' => 'Pueblo Nuevo Tiquisate',
            'department_id' => 11,
        ]); 

        DB::table('town')->insert([
            'name' => 'La Democracia',
            'department_id' => 11,
        ]);

        DB::table('town')->insert([
            'name' => 'Masagua',
            'department_id' => 11,
        ]);

        DB::table('town')->insert([
            'name' => 'La Gomera',
            'department_id' => 11,
        ]);

        DB::table('town')->insert([
            'name' => 'San Vicente Pacaya',
            'department_id' => 11,
        ]);

        DB::table('town')->insert([
            'name' => 'Guanagazapa',
            'department_id' => 11,
        ]);

        DB::table('town')->insert([
            'name' => 'Sipacate',
            'department_id' => 11,
        ]);

        /* SUCHITEPEQUEZ */

        DB::table('town')->insert([
            'name' => 'Chicacao',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Cuyotenango',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Mazatenango',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Patulul',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Pueblo Nuevo',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Río Bravo',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Samayac',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Suchitepéquez',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Bernardino',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Francisco Zapotitlán',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Gabriel',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San José El Ídolo',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San José La Máquina',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Bautista',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Lorenzo',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Panán',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pablo Jocopilas',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Bárbara',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Santo Domingo Suchitepéquez',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Santo Tomás La Unión',
            'department_id' => 12,
        ]);

        DB::table('town')->insert([
            'name' => 'Zunilito',
            'department_id' => 12,
        ]);

        /* RETALHULEU */

        DB::table('town')->insert([
            'name' => 'Champerico',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'El Asintal',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'Nuevo San Carlos',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'Retalhuleu',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés Villa Seca',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'San Felipe',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'San Martín Zapotitlán',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'San Sebastián',
            'department_id' => 13,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz Muluá',
            'department_id' => 13,
        ]);

        /*IZABAL*/

        DB::table('town')->insert([
            'name' => 'Puerto Barrios',
            'department_id' => 14,
        ]);

        DB::table('town')->insert([
            'name' => 'Livingston',
            'department_id' => 14,
        ]);

        DB::table('town')->insert([
            'name' => 'El Estor',
            'department_id' => 14,
        ]);

        DB::table('town')->insert([
            'name' => 'Morales',
            'department_id' => 14,
        ]);

        DB::table('town')->insert([
            'name' => 'Los Amates',
            'department_id' => 14,
        ]);

        /* ZACAPA */
        DB::table('town')->insert([
            'name' => 'Cabañas',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Estanzuela',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Gualán',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Huité',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'La Unión',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Río Hondo',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'San Diego',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'San Jorge',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Teculután',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Usumatlán',
            'department_id' => 15,
        ]);

        DB::table('town')->insert([
            'name' => 'Zacapa',
            'department_id' => 15,
        ]);

        /* CHIQUIMULA */
        DB::table('town')->insert([
            'name' => 'Chiquimula',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Jocotán',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Esquipulas',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Camotán',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Quezaltepeque',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Olopa',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Ipala',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Ermita',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'Concepción Las Minas',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'San Jacinto',
            'department_id' => 16,
        ]);

        DB::table('town')->insert([
            'name' => 'San José la Arada',
            'department_id' => 16,
        ]);

        /* JALAPA */

        DB::table('town')->insert([
            'name' => 'Jalapa',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'Mataquescuintla',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'Monjas',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'San Carlos Alzatate',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'San Luis Jilotepeque',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Pinula',
            'department_id' => 17,
        ]);

        DB::table('town')->insert([
            'name' => 'San Manuel Chaparrón',
            'department_id' => 17,
        ]);

        /* EL PROGRESO */
        DB::table('town')->insert([
            'name' => 'El Jícaro',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'Guastatoya',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'Morazán',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'Sanarate',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'Sansare',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'San Agustín Acasaguastlán',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio La Paz',
            'department_id' => 18,
        ]);

        DB::table('town')->insert([
            'name' => 'San Cristóbal Acasaguastlán',
            'department_id' => 18,
        ]);

        /* QUETZALTENANGO */
        DB::table('town')->insert([
            'name' => 'Quetzaltenango',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Almolonga',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Cabricán',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Cajolá',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Cantel',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Coatepeque',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Colomba Costa Cuca',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Concepción Chiquirichapa',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'El Palmar',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Flores Costa Cuca',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Génova',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Huitán',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'La Esperanza',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Olintepeque',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Ostuncalco',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Palestina de Los Altos',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Salcajá',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Carlos Sija',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Francisco La Unión',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Martín Sacatepéquez',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Mateo',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Sigüilá',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Sibilia',
            'department_id' => 19,
        ]);

        DB::table('town')->insert([
            'name' => 'Zunil',
            'department_id' => 19,
        ]);

        /* TOTONICAPÁN */
        DB::table('town')->insert([
            'name' => 'Momostenango',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'San Andrés Xecul',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'San Bartolo',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'San Cristóbal Totonicapán',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'San Francisco El Alto',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Lucía La Reforma',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa María Chiquimula',
            'department_id' => 20,
        ]);

        DB::table('town')->insert([
            'name' => 'Totonicapán',
            'department_id' => 20,
        ]);

        /* HUEHUETENANGO */

        DB::table('town')->insert([
            'name' => 'Huehuetenango',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Aguacatán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Chiantla',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Colotenango',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Concepción Huista',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Cuilco',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Jacaltenango',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'La Democracia',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'La Libertad',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Malacatancito',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Nentón',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Huista',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Gaspar Ixchil',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Ildefonso Ixtahuacán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Atitán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Juan Ixcoy',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Mateo Ixtatán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Acatán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Nécta',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Soloma',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Rafael La Independencia',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Rafael Pétzal',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Sebastián Coatán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'San Sebastián Huehuetenango',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Ana Huista',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Bárbara',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Santa Cruz Barillas',
            'department_id' => 21,
        ]);

        
        DB::table('town')->insert([
            'name' => 'Santa Eulalia',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Santiago Chimaltenango',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Tectitán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Todos Santos Cuchumatán',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Unión Cantinil',
            'department_id' => 21,
        ]);

        DB::table('town')->insert([
            'name' => 'Santiago Petatán',
            'department_id' => 21,
        ]);

        /* SAN MARCOS */

        DB::table('town')->insert([
            'name' => 'San Marcos',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Ayutla Tecún Umán',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Catarina',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Comitancillo',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Concepción Tutuapa',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'El Quetzal',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San José El Rodeo',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'El Tumbador',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Esquipulas Palo Gordo',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Ixchiguán',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'La Reforma',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Malacatán',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Nuevo Progreso',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Ocós',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Pajapita',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Antonio Sacatepéquez',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Cristóbal Cucho',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San José Ojetenam',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Lorenzo',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Miguel Ixtahuacán',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pablo',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Pedro Sacatepéquez',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'San Rafael Pie de la Cuesta',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Sibinal',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Sipacapa',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Tacaná',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Tajumulco',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Tejutla',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'La Blanca',
            'department_id' => 22,
        ]);

        DB::table('town')->insert([
            'name' => 'Río Blanco',
            'department_id' => 22,
        ]);

        $this->command->info('La tabla TOWN se ha llenado con información.');

    }
}
