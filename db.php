<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=pk457';
        $username = 'pk457';
	    $password = 'tCX2Wqcx';
	        try {
		    $db = new PDO($dsn, $username, $password);
		        } catch(PDOException $e) {
			    $error_message = $e->getMessage();
			        echo $error_message;
				    exit();
				        }
					?>
