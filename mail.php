<?php 

$destinataire = 'michel@gmail.com';
$sujet = 'Il fait beau et chaud';
$message = 'Salut Michel, je trouve qu/il fait beau et chaud';
$headers = 'From:manu@elysee.fr' . "\r\n" .
'Reply-To: concierge@elysee.fr' . "\r\n" .
'X-Mailer: PHP8';

mail($destinataire, $sujet, $message, $headers);

// lancer dans localhost:1080
// commande 'maildev' dans le terminal pour lancer tt ça