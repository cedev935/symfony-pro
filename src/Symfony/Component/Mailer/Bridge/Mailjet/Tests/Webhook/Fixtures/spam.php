<?php

use Symfony\Component\RemoteEvent\Event\Mailer\MailerEngagementEvent;

$wh = new MailerEngagementEvent(MailerEngagementEvent::SPAM, '13792286917004336', json_decode(file_get_contents(str_replace('.php', '.json', __FILE__)), true, flags: JSON_THROW_ON_ERROR));
$wh->setRecipientEmail('bounce@mailjet.com');
$wh->setDate(\DateTimeImmutable::createFromFormat('U', 1430812195));
$wh->setTags(['helloworld']);
$wh->setMetadata(['Payload' => '']);

return $wh;
