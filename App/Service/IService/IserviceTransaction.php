<?php

    interface Iservice {

        function insert(Transaction $transaction);
        function delete($id);
        function display();
        
    }

?>