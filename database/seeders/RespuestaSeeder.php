<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuestasPreg1_3_4_5_6Sec_1 = [
            'Muy Buena',
            'Buena',
            'Regula',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg1_3_4_5_6Sec_1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_3_4_5_6Sec_1[$i],
                'pregunta_id' => 1
            ]);
        }
        for ($i = 0; $i < count($respuestasPreg1_3_4_5_6Sec_1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_3_4_5_6Sec_1[$i],
                'pregunta_id' => 3
            ]);
        }
        for ($i = 0; $i < count($respuestasPreg1_3_4_5_6Sec_1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_3_4_5_6Sec_1[$i],
                'pregunta_id' => 4
            ]);
        }
        for ($i = 0; $i < count($respuestasPreg1_3_4_5_6Sec_1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_3_4_5_6Sec_1[$i],
                'pregunta_id' => 5
            ]);
        }
        for ($i = 0; $i < count($respuestasPreg1_3_4_5_6Sec_1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_3_4_5_6Sec_1[$i],
                'pregunta_id' => 6
            ]);
        }


        $respuestasPreg2 = [
            'Muy Buenos',
            'Buenos',
            'Regulares',
            'Malos'
        ];
        for ($i = 0; $i < count($respuestasPreg2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2[$i],
                'pregunta_id' => 2
            ]);
        }

        $respuestasPreg1_sec2 = [
            'Trabaja',
            'Estudia',
            'Estudia y Trabaja',
            'No estudia ni trabaja'
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg1_sec2_2 = [
            'Especialidad',
            'Maestria',
            'Doctorado',
            'Idiomas',
            'Otros',
            'Ninguna',
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg2_sec2_2 = [
            'Antes de Entregar',
            'Menos de seis meses',
            'Entre seis meses y año',
            'Más de un año',
            
        ];        
        for ($i = 0; $i < count($respuestasPreg1_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg3_sec2 = [
            'Bolsa de trabajo del plantel',
            'Contactos personales',
            'Recidencia profecional',
            'Medios masivos comunicacion',
            'Otros',
        ];        
        for ($i = 0; $i < count($respuestasPreg3_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg3_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg4_sec2 = [
            'Competecnias laborales',
            'Titulo profesional',
            'Examen de seleccion',
            'Idioma extranjero',
            'Actitudes y habilidades socio-comunicativas (principios y valores',
            'Ninguno',
            'Otros',
        ];
        for ($i = 0; $i < count($respuestasPreg4_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg5_sec2 = [
            'Ingles',
            'Frances',
            'Aleman',
            'Japones',
            'Otros',
        ];
        for ($i = 0; $i < count($respuestasPreg5_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg5_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg6_sec2 = [
            'Hablar',
            'Escribir',
            'Leer',
            'Escuchar',
        ];
        for ($i = 0; $i < count($respuestasPreg6_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg6_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg7_sec2 = [
            'Menos de un año',
            'Un año',
            'Dos años',
            'Tres años',
            'Más de tres años',
        ];
        for ($i = 0; $i < count($respuestasPreg7_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg7_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg8_sec2 = [
            'Menos de cinco',
            'Entre cinco y siete',
            'Entre 8 y 10 ',
            'Más de 10',
        ];
        for ($i = 0; $i < count($respuestasPreg8_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg8_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg9_sec2 = [
            'Técnico',
            'Supervisor',
            'Jefe de área',
            'Funcionario ',
            'Directivo',
            'Empresario',
        ];
        for ($i = 0; $i < count($respuestasPreg9_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg9_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg10_sec2 = [
            'Base',
            'Eventual',
            'Contrato',
            'Otros ',
        ];
        for ($i = 0; $i < count($respuestasPreg10_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg10_sec2[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg11_sec2 = [
            '0%',
            '20%',
            '40%',
            '60%',
            '80%',
            '100%',

        ];
        for ($i = 0; $i < count($respuestasPreg11_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg11_sec2[$i],
                'pregunta_id' => 2
            ]);
        }

        $respuestasPreg1_sec3 = [
            'Muy eficiente',
            'Eficiente',
            'Poco eficiente',
            'Deficiente',
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec3[$i],
                'pregunta_id' => 2
            ]);
        }


        $respuestasPreg2_3_sec2 = [
            'Excelente',
            'Bueno',
            'Regular',
            'Malo',
            'Pésimo',
        ]; 
        for ($i = 0; $i < count($respuestasPreg2_3_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2_3_sec2[$i],
                'pregunta_id' => 2
            ]);
        }

        
        $respuestasPreg4_subp_sec2 = [
            '1',
            '2',
            '3',
            '4',
            '5',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp_sec2[$i],
                'pregunta_id' => 2
            ]);
        } 
    }
}

