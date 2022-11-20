<?php

$todo = 'model/To_do.txt';
$inProgress = 'model/inProgress.txt';
$Done = 'model/Done.txt';


function process($file){
AddElement($file);
DeleteElement($file);
}
process($todo);

function displayElement($file){
    $lines = file($file,FILE_IGNORE_NEW_LINES);
    foreach($lines as $element){
        echo "<li>$element<a href='todo.php?delete=$element'><img src='./images/poubelle.png'></a></li>";

    }

}


function AddElement($file){
    if(isset($_POST['AddElement'])){  
              
        $lines = file($file,FILE_IGNORE_NEW_LINES);             
                                     
        if(!in_array($_POST['AddElement'], $lines)){                              
            $handle = fopen($file,'a+');
            fwrite($handle, $_POST['AddElement'].PHP_EOL);
            fclose($handle);
        }else{
            echo 'This element already exists<br>';
        }
      
                            
    }
}

function DeleteElement($file){
    if(isset($_GET['delete'])){
        $lines = file($file,FILE_IGNORE_NEW_LINES);
        foreach($lines as $key => $element){
            if ($_GET['delete'] === $element){
                unset($lines[$key]);
            }
        }
        EcrireFichier($lines,$file);
    }
}

function EcrireFichier($lines, $file){
    $handle = fopen($file,'w');
    foreach($lines as $line){
        fwrite($handle, $line.PHP_EOL);
    }
    fclose($handle);
}
