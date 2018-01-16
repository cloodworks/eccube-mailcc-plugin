<?php
/*
  * This file is part of the MailCc plugin
  *
  * Copyright (C) 2018 Clood Works Inc. All Rights Reserved.
  * clood.jp
  *
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

namespace Plugin\MailCc;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;

class MailCcEvent
{
    /**
     * @var \Eccube\Application
     */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

	public function beforeSendMail(EventArgs $event)
  {
		$message = $event->getArgument('message');
    $bcc = $message->getBcc();
    $message->setCc($bcc);
  }

}
