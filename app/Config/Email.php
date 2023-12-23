<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = 'greenweb@greenchuya.com';
    public $fromName   = 'Green Chuya';
    public $recipients = '';

    /**
     * The "user agent"
     */
    public $userAgent = 'CodeIgniter';

    /**
     * The mail sending protocol: mail, sendmail, smtp
     */
    public $protocol = 'smtp';

    /**
     * The server path to Sendmail.
     */
    public $mailPath = '/usr/sbin/sendmail';

    /**
     * SMTP Server Address
     */
    public $SMTPHost = 'greenchuya.com';

    /**
     * SMTP Username
     */
    public $SMTPUser = 'greenweb@greenchuya.com';

    /**
     * SMTP Password
     */
    public $SMTPPass = 'greenchuya2023.';

    /**
     * SMTP Port
     */
    public $SMTPPort = 465;

    /**
     * SMTP Timeout (in seconds)
     */
    public $SMTPTimeout = 5;

    /**
     * Enable persistent SMTP connections
     */
    public $SMTPKeepAlive = false;

    /**
     * SMTP Encryption.
     *
     * @var string '', 'tls' or 'ssl'. 'tls' will issue a STARTTLS command
     *             to the server. 'ssl' means implicit SSL. Connection on port
     *             465 should set this to ''.
     */
    public $SMTPCrypto = 'ssl';

    /**
     * Enable word-wrap
     */
    public $wordWrap = true;

    /**
     * Character count to wrap at
     */
    public $wrapChars = 76;

    /**
     * Type of mail, either 'text' or 'html'
     */
    public $mailType = 'text';

    /**
     * Character set (utf-8, iso-8859-1, etc.)
     */
    public $charset = 'UTF-8';

    /**
     * Whether to validate the email address
     */
    public $validate = false;

    /**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */
    public $priority = 3;

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public $CRLF = "\r\n";

    /**
     * Newline character. (Use “\r\n” to comply with RFC 822)
     */
    public $newline = "\r\n";

    /**
     * Enable BCC Batch Mode.
     */
    public $BCCBatchMode = false;

    /**
     * Number of emails in each BCC batch
     */
    public $BCCBatchSize = 200;

    /**
     * Enable notify message from server
     */
    public $DSN = false;
}
