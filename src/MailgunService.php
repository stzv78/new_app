<?php
namespace Src;

require_once __DIR__ . '/../vendor/autoload.php';
use Mailgun\Mailgun;

class MailgunService implements NotifireInterface
{
    /** @var Mailgun $mailgun */
    private $mailgun;

    public function __construct(Mailgun $mailgun)
    {
        $this->mailgun = $mailgun;
    }

    public function send($to, $from, $subject, $message)
    {
        $email = [
            'to'         => [['email' => $to]],
            'from_email' => $from,
            'subject'    => $subject,
            'message'       => $message
        ];
        $this->mailgun->messages->send($email);

        return true;
    }
}