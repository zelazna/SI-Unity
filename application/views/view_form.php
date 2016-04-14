<html>
<head>
    <title>Codeigniter Json</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet'
          type='text/css'>
</head>
<body>
<div class="main">
    <div id="content">
        <h2 id="form_head">Astuces: prennez les coeurs!!</h2>
        <div id="form_input">
            <?php
            echo form_open('form/data_submitted');
            echo form_label('score');
            $data_name = array(
                'name' => 'score',
                'id' => 'score',
                'class' => 'input_box',
                'placeholder' => 'Please Enter Int',
                'required' => 'required',
            );
            echo form_input($data_name);
            echo form_label('scores_id');
            $data_email = array(
                'type' => 'number',
                'name' => 'scores_id',
                'id' => 'number_id',
                'class' => 'input_box',
                'placeholder' => 'score id',
                'required' => 'required',
                'value'=> $_SESSION['id']
            );
            echo form_input($data_email);
//            echo form_label('Gender');
//            $data_gender = array(
//                'Male' => 'Male',
//                'Female' => 'Female'
//            );
//            echo form_dropdown('select', $data_gender, 'Male', 'class="dropdown_box"');
//            echo form_label('Address');
//            echo "<div class='textarea_input'>";
//            $data_textarea = array(
//                'name' => 'address',
//                'rows' => 5,
//                'cols' => 28,
//                'placeholder' => 'Address...',
//                'required' => 'required'
//            );
//            echo form_textarea($data_textarea);
            echo "</div>";
            ?>
        </div>
        <div id="form_button">
            <?php echo form_submit('submit', 'Compris!', "class='submit'"); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<?php
if (isset($result_msg)) {
    echo "<div id='res_msg'>";
    echo $result_msg;
    echo "</div>";
}
?>
</body>
</html>