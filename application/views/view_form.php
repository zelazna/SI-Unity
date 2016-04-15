<html>
<head>
    <title>Grim Reaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">
    <style>
        body {
            background: url("<?php echo base_url(); ?>assets/img/bck.png");
        }

        h2 {
            color: white;
        }

        #bokeh {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            width: 100%;
            max-width: 600px;
            margin: 50px auto 0;
            padding: 1.5em 2em;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            background: rgba(34, 34, 34, 0.9);
            border: 1px solid #111;
            color: white;
            border-radius: 5px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        #bokeh h1 {
            font-size: 2em;
            margin: 0;
        }

        #bokeh #launch {
            margin: 20px auto;
            display: block;
            width: 120px;
            text-align: center;
            font-size: 1em;
            font-weight: bold;
            text-decoration: none;
            background: #3D3DCC;
            border: 1px solid #111;
            padding: 0.75em 1em;
            border-radius: 3px;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
            color: #EEE;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        #bokeh #launch:hover {
            cursor: pointer;
            background-color: #6565d7;
        }

        #modal {
            opacity: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            background: rgba(17, 17, 17, 0.5);
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            text-align: center;
            z-index: -1;
        }

        #modal .modalContent {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            width: 20%;
            margin: 150px auto;
            padding: 2em 2.5em;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        #modal.visible {
            display: block;
            -webkit-filter: blur(0);
            -moz-filter: blur(0);
            opacity: 1;
            z-index: 1000;
        }

        .blur {
            -webkit-filter: blur(30px);
            -moz-filter: blur(30px);
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            transform: scale(1.05);
        }

        #canvas {
            position: absolute;
            background-image: url('http://subtlepatterns.com/patterns/debut_dark.png');
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            transform: scale(1.5);
        }

        #canvas.blur-less {
            -webkit-filter: blur(0);
            -moz-filter: blur(0);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            transform: scale(1);
        }

        @media only screen and (max-width: 800px) {
            #bokeh {
                width: 80%;
            }

            #modal .modalContent {
                width: 60%;
            }
        }
    </style>
</head>
<body>
<div class="main">
    <div id="content">
        <h2 id="form_head">Astuce: prennez les coeurs!!</h2>
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
                'type' => 'hidden'
            );
            echo form_input($data_name);
            echo form_label('scores_id');
            $data_email = array(
//                'type' => 'number',
                'name' => 'scores_id',
                'id' => 'number_id',
                'class' => 'input_box',
                'placeholder' => 'score id',
                'required' => 'required',
                'type' => 'hidden',
                'value' => $_SESSION['id']
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