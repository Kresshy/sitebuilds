<?php 
/*
-------------------------
Language: English
-------------------------
*/

function lang($phrase){
    
    static $lang = array(
        'WELCOME_TEXT' => 'design beautiful logos<br /><b>in the palm of your hand',
        'APP_STORE' => 'Available on the <b>App Store</b>',
        'HOW_IT_WORKS' => 'how it works',
        'HOW_TO_VIDEO' => 'how to video',
        'TIPS_TRICKS' => 'tips & tricks',
        'PORTFOLIO' => 'portfolio',
        'CONTACT_US' => 'contact us',
        'STEP' => 'step',
        'GO_CREATE' => 'go create',
        'STEP1_TEXT' => 'choose from our huge library<br />use tons of fonts preloaded<br />import photos or images<br />copy and paste anything ',
        'ADJUST_MODIFY' => 'adjust & modify',
        'STEP2_TEXT' => 'pinch, drag and spin objects<br />undo - redo every steps<br />grid lines helps by alignment<br />apply degree indicators',
        'SAVE_SHARE' => 'save & share',
        'STEP3_TEXT' => 'save as PDF or transparent PNG<br />access to major cloud services<br />share by email or facebook<br />print with AirPrint',
        'RATING_TEXT' => '“This is simply amazing. Wasn\'t expecting it to be this good when I downloaded.Can\'t stop creating.”',
        'INTERESTED' => 'Are you interested? <b>Get it on the App Store</b>',
        'ALREADY_USER' => 'Already a user? <b>Please take a minute to rate!</b>',
        'WATCH_OUR_TITLE' => 'watch our <b>how-to video</b>',
        'TIPS_AND_TRICKS_TITLE' => '<b>tips</b> & <b>tricks</b>',
        'TIP1' => 'Tap a blank<br />area of the screen<br />to deselect all<br />selected objects.',
        'TIP2' => 'When selecting logos<br />or text styles, slide<br />your finger across<br />them to flip through<br />the many options.',
        'TIP3' => 'Tap the screen<br />with two fingers to<br />hide the tool box.<br />And again to<br />bring it back.',
        'TIP4' => 'Rotate objects by<br />touching each side of<br />the object with your<br />index fingers.<br />Then rotate.',
        'TIP5' => 'Double tap<br />an object to<br />flip it horizontally.',
        'POTFOLIO_TITLE' => 'see our <b>portfolio</b>',
        'CONTACT_US_TITLE' => '<b>contact</b> us',
        'QUESTION' => 'Do You have any questions, comments for us? Just send us a message in the form below.',
        'COPYRIGHT' => 'Copyright © 2012-2014 Adam Meszaros  <span>•</span>  All Rights Reserved'
    );

    return $lang[$phrase];
}

?>