<?php

namespace App\Http\Controllers;


use  Barryvdh\DomPDF\Facade as PDF; // IMPORTAR PDF

class PDFController extends Controller
{
    
    /* MUESTRA PDF DE LA LISTA DE INSTITUCIONES */
    public function lista_instituciones(){

        $data = 'Lista de Instituciones';

        $instituciones = array(
            [
                'id'=>'1',
                'codigo'=>'AWE-123',
                'nombre'=>'AWE',
                'direccion'=>'Siquirres',
                'contacto_directo'=>'awe@gmail.com',
                'telefono'=>'86090002',
                'estado'=>'activo',
            ],

            [
                'id'=>'2',
                'codigo'=>'ICE-111',
                'nombre'=>'ICE',
                'direccion'=>'Turrialba',
                'contacto_directo'=>'ice@gmail.com',
                'telefono'=>'60987808',
                'estado'=>'inactivo',
            ],

            [
                'id'=>'3',
                'codigo'=>'INS-222',
                'nombre'=>'INS',
                'direccion'=>'San José',
                'contacto_directo'=>'ins@gmail.com',
                'telefono'=>'88888888',
                'estado'=>'activo',
            ],

            [
                'id'=>'4',
                'codigo'=>'INA-111',
                'nombre'=>'INA',
                'direccion'=>'Cartago',
                'contacto_directo'=>'ina@gmail.com',
                'telefono'=>'77777777',
                'estado'=>'inactivo',
            ],

            [
                'id'=>'5',
                'codigo'=>'UCR-111',
                'nombre'=>'UCR',
                'direccion'=>'Heredia',
                'contacto_directo'=>'ucr@gmail.com',
                'telefono'=>'89898989',
                'estado'=>'activo',
            ],

            [
                'id'=>'6',
                'codigo'=>'BCR-111',
                'nombre'=>'BCR',
                'direccion'=>'Siquirres',
                'contacto_directo'=>'bcr@gmail.com',
                'telefono'=>'78867516',
                'estado'=>'inactivo',
            ],
        );

        $pdf = PDF::loadView('SCA.PDF.view_lista_instituciones',compact(['data','instituciones']));
        return $pdf->stream('');
    }

    /* Muestra los empleados por institución */
    public function empleados_por_institucion(){

        $data = 'Lista de Empleados por institucion';

        $empleados = array(
            [
                'codigo'=>'123',
                'nombre_completo'=>'Angie Quiros',
                'fecha_ingreso'=>'19/11/2021',
                'profesion'=>'Analista',
                'contacto'=>'77777777 | angie@gmail.com',
              ],
              [
                'codigo'=>'456',
                'nombre_completo'=>'Wendy Martinez',
                'fecha_ingreso'=>'19/11/2021',
                'profesion'=>'Diseñadora',
                'contacto'=>'88888888 | wendy@gmail.com',
              ],
              [
                'codigo'=>'789',
                'nombre_completo'=>'Emanuel González',
                'fecha_ingreso'=>'19/11/2021',
                'profesion'=>'Desarrollador',
                'contacto'=>'99999999 | emanuel@gmail.com',
              ],
        
              [
                'codigo'=>'321',
                'nombre_completo'=>'Delia Smith',
                'fecha_ingreso'=>'19/11/2021',
                'profesion'=>'Gerente',
                'contacto'=>'89898987 | delia@gmail.com',
              ],
        
              [
                'codigo'=>'654',
                'nombre_completo'=>'Pedrito Fernández',
                'fecha_ingreso'=>'19/11/2021',
                'profesion'=>'Secretario',
                'contacto'=>'78767876 | pedrito@gmail.com',
              ],
        );

        $pdf = PDF::loadView('SCA.PDF.view_empleados_por_institucion',compact(['data','empleados']));
        return $pdf->stream('');
    }


    public function lista_cajeros(){
        $data="Lista de Cajeros";
        $cajeros=array(
            [
                'codigo'=>'CJ-123',
                'nombre_completo'=>'Carlos',
                'fecha_ingreso'=>'19/11/2020',
                'profesion'=>'Cajero (a)',
                'contacto'=>'77777777 | carlos@gmail.com',
                'institucion'=>'SCA',
              ],
              [
                'codigo'=>'CJ-456',
                'nombre_completo'=>'Karla',
                'fecha_ingreso'=>'19/11/2020',
                'profesion'=>'Cajero (a)',
                'contacto'=>'88888888 | karla@gmail.com',
                'institucion'=>'SCA',
              ],
              [
                'codigo'=>'CJ-789',
                'nombre_completo'=>'Roberto',
                'fecha_ingreso'=>'19/11/2020',
                'profesion'=>'Cajero (a)',
                'contacto'=>'99999999 | roberto@gmail.com',
                'institucion'=>'SCA',
              ],
        
        );
        $pdf = PDF::loadView('SCA.PDF.view_lista_cajeros',compact(['data','cajeros']));
        return $pdf->stream('');
    }

    
    public function estado_cajas(){
      $data="Estado de Cajas";
      $estado_cajas=array(
        [
          'cajero'=>'Carlos',
          'estado'=>'activo',
          'fecha_inicio'=>'19/11/2020',
          'monto_inicio'=>'10000',
          'fecha_cierre'=>'19/11/2020',
          'monto_cierre'=>'15000',
          'descripcion_cuenta_cajero'=>'meta cumplida',
        ],
        [
          'cajero'=>'Karla',
          'estado'=>'activo',
          'fecha_inicio'=>'19/11/2020',
          'monto_inicio'=>'20000',
          'fecha_cierre'=>'19/11/2020',
          'monto_cierre'=>'15000',
          'descripcion_cuenta_cajero'=>'meta no cumplida',
        ],
      );
      $pdf = PDF::loadView('SCA.PDF.view_estado_cajas',compact(['data','estado_cajas']));
      return $pdf->stream('');
    }


}
