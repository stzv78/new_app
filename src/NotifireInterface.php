<?php
namespace Src;

interface NotifireInterface
{
    /**
     * @param string $to
     * @param string $from
     * @param string $subject
     * @param string $message
     * @return boolean
     */
    public function send($to, $from, $subject, $message);
}