<?php

class SiteController extends Controller {

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $sliders   = Utils::getAllasArray(Slider::model()->findAll('estado= true'));
        $clientes  = Utils::getAllasArray(Clientes::model()->findAll('estado= true'));
        $marcas    = Utils::getAllasArray(Marcas::model()->findAll('estado = true'));
        $servicios = Utils::getAllasArray(Servicios::model()->findAll('estado=true'));
        $nosotros  = Nosotros::model()->find('estado = TRUE');
        $autos     = Utils::getAllasArray(Auto::model()->findAll('estado = TRUE AND destacado = TRUE'));
        $this->render('index', compact('sliders', 'clientes', 'autos', 'marcas', 'servicios', 'nosotros'));
    }

    public function actionServicios() {
        $servicios = Utils::getAllasArray(Servicios::model()->findAll('estado=true'));
        $this->render('servicios', compact('servicios'));
    }

    public function actionAutos() {
        $autos = Auto::model()->findAll('estado = TRUE');
        $this->render('autos', compact('autos'));
    }

    public function actionContacto() {
        $post = $_POST;
        if ($post) {
            $from    = "Taller@factoriapenaranda.com";
            $to      = "sepia.aki@gmail.com";
            $subject = "Contacto Factoria Peñaranda";
            $message = "<h3>Contacto desde la pagina web</h3><br>";
            foreach ($post as $key => $value) {
                $message .= $key . ' : ' . $value . '<br>';
            }
            $headers = "From:" . $from;
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            mail($to, $subject, $message, $headers);
        }
        $this->render('contacto');
    }

    public function actionModal() {
        $marcas    = Marcas::model()->findAll('estado = true');
        $repuestos = Repuesto::model()->findAll('estado = true');
        $carros    = [
            [
                'descripcion' => 'Vehiculo empleado generalmente para el transporte de mercancías, y que tiene en su parte trasera una zona de carga.',
                'titulo'      => 'Camioneta',
                'image'       => 'c3.png'
            ],
            [
                'descripcion' => 'Vehículos de alta gama dentro de sus mismos grupos, siguen existiendo marcas específicas relacionadas con este tipo de coches de lujo.',
                'titulo'      => 'Carro de Lujo',
                'image'       => 'c1.png'
            ],
            [
                'descripcion' => 'El acrónimo SUV proviene del inglés y significa Sport Utility Vehicle o, traducido al español, Vehículo Utilitario Deportivo.',
                'titulo'      => 'Suv',
                'image'       => 'c2.png'
            ],
            [
                'descripcion' => 'Vehículo familiar, más cuadrado y alto, con tres o cuatro filas de asientos. y con capacidad para seis o más pasajeros.',
                'titulo'      => 'Van',
                'image'       => 'c4.png'
            ],
            [
                'descripcion' => 'Vehículo medio, pequeño y grande que puede ser para 2 o 4 pasajeros, con 2 o 4 puertas diseñado para poder circular a altas velocidades.',
                'titulo'      => 'Deportivo',
                'image'       => 'c5.png'
            ],
        ];
        echo $this->renderPartial('pages/_modal', compact('marcas', 'repuestos', 'carros'));
    }

    public function actionParent() {
        echo $this->renderPartial('pages/_modalParent');
    }

    public function actionrepuesto() {
        $post    = $_POST;
        $from    = "Taller@factoriapenaranda.com";
        $to      = "sepia.aki@gmail.com";
        $subject = "Solicitud de Repuesto Factoria Peñaranda";
        $message = "<h3>Contacto desde la pagina web</h3><br>";
        foreach ($post as $key => $value) {
            $message .= $key . ' : ' . $value . '<br>';
        }
        $headers = "From:" . $from;
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
        Utils::show($post);
        mail($to, $subject, $message, $headers);
        echo json_encode(['status'=>true,'message'=>'Envio realizado con éxito']);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }
        }
    }

}
