<?php

namespace Src;

require_once __DIR__ . '/../vendor/autoload.php';

Class App
{
    /** @var string $from */
    private $from = 'app@example.com';
    /** @var string $subject */
    private $subject = 'Welcome to the App!';
    /** @var string $message */
    private $message = 'This is a welcome email!';

    /** @var NotifireInterface $notifirer */
    private $notifirer;

    /**
     * @param NotifireInterface $notifirer
     * @return $this
     */
    public function setMailer(NotifireInterface $notifirer)
    {
        $this->notifirer = $notifirer;
        return $this;
    }

    /**
     * @param $to
     * @return boolean
     */
    public function send($to)
    {
        return $this->notifirer->send($to, $this->from, $this->subject, $this->message);
    }
}