<?php

    $decode = json_decode(implode($_POST),false);
    
    if (isset($decode->event)) {
        
        $account = $decode->Account->title;
    
        $title = $decode->Metadata->title;
    
        if (isset($decode->Metadata->grandparentTitle)) {
    
            $title .= " (" . $decode->Metadata->grandparentTitle . ")"; }
    
        $action = $decode->event;
    
        date_default_timezone_set('America/New_York');
        
        $logmee = date(DATE_RFC2822). " " . $account . " is watching " . $title . " [" . $action . "]\n";
    
        file_put_contents('plex.log', $logmee, FILE_APPEND);
    
    }

?>
