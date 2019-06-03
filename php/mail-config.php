<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Jesus Silva <thebestjesse76@gmail.com>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpUser = 'apikey';
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = '6LdN6aMUAAAAAIXb6QxHUHuT6pKsZ03EPCHIauoi';
$secret = '6LdN6aMUAAAAAGFRT2ifHTeM-vrZYKH1LzwywUGd';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["thebestjesse76@gmail.com", "Jesus Silva"];