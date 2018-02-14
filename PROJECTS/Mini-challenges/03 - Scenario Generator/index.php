<?php
    $settings = explode("\n", file_get_contents('./text/scenario.settings.txt'));
    $objectives = explode("\n", file_get_contents('./text/scenario.objectives.txt'));
    $antagonists = explode("\n", file_get_contents('./text/scenario.antagonists.txt'));
    $complications = explode("\n", file_get_contents('./text/scenario.complications.txt'));
    
    shuffle($settings);
    shuffle($objectives);
    shuffle($antagonists);
    shuffle($complications);
    
    echo $settings[0] . ' ' . $objectives[0] . ' <br>' . $antagonists[0] . ' ' 
    . $complications[0] . "<br />\n";
?>