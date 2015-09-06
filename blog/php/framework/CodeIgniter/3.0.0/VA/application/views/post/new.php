<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php
            //send info to method test of controller welcome
            echo form_open("Article/insert");

            $atributos = array('style'  => 'text-align: center;');
            echo form_input_text('nombre', 'Ingresa email', $atributos);
            echo form_input_password('password','Ingresa contraseña', $atributos);


            echo form_input_text('titulo', 'Titulo del post', $atributos);
            echo form_input_text('descripcion', 'Descripción corta del post', $atributos);
            echo form_input_text('contenido', 'Contenido', $atributos);

            /*echo form_input_checkbox('remember','Recordar');
            echo form_input_radio('area','Valor 1', 'valor1');
            echo form_input_radio('area','Valor 2', 'valor2');
            echo form_input_radio('area','Valor 3', 'valor3');
            echo form_input_textarea('area','ingresa una descripcion');
            echo form_input_select("lol");

            $options = array('1' => 1,'2' => 2);
            echo select_options($options);*/

            echo form_submit("Enviar formulario");
            echo form_close();

            // send file to method uploadTest of controller welcome
            /*echo form_open_multipart("welcome/uploadTest");
            echo form_input_file('Selecciona una imagen');
            echo form_submit("Enviar formulario");
            echo form_close();*/
        ?>
        </div>
    </div>
</div>

<hr>