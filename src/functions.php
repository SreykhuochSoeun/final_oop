
<?php
   class calculate{
       public $add;
       public $minus;
       public $multiple;
       public $divide;
       
       public function __construct($add,$minus,$multiple,$divide){
           $this->add=$add;
           $this->minus;
           $this->multiple;
           $this->$divide;
       }

       public function getAdd(){
        return $this->add;
       }
       
       public function getMinus(){
        return $this->minus;
       }
       
       public function getMultiple(){
        return $this->multiple;
       }
       
       public function getDivide(){
        return $this->divide;
       }
       
   }

?>

