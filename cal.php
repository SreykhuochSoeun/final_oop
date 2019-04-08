<?php
    
    if(isset($_POST['btn-cal'])){
        $add = $_POST['add'];
        $minus = $_POST['minus'];
        $multiple = $_POST['multiple'];
        $divicde= $_POST['divicde'];

        $Calculate = new Calculate($add, $minus, $multiple, $divicde);
            $getAdd = $Calculate->getAdd();
            $getMinus = $Calculate->getMinus();
            $getMultiple = $Calculate->getMultiple();
            $getDivicde = $Calculate->getDivicde();

    }
    
   


?>