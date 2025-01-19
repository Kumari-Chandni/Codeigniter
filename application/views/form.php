<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <?php $data = array(
                      'name'          => 'username',
                      'id'            => 'username',
                      'value'         => 'johndoe',
                      'maxlength'     => '100',
                      'size'          => '50',
                      'style'         => 'width:50%'
                    );
                ?>

                <!-- <?php echo form_open();?>
                <?php echo form_close();?> -->

                <?php echo form_open('homecontroller/myfunc',['id'=>'my_form','class'=>'my_form']);?>
                <?php echo form_input($data);?>
                <?php echo form_submit('submit', 'Login', ['class' => 'form-control btn btn-success']); ?>


                <?php echo form_close();?>

            </div>

        </div>

    </div>
</body>
</html>