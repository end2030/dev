<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('public/head');
?>

<body>
    <div id="main-wrapper">
       <?php 
       $this->load->view('public/header');
       $this->load->view('public/sidebar');
       $this->load->view('public/content');
        ?>
    </div>
   <?php 
   $this->load->view('public/js');
   ?>
</body>

</html>