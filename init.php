<?php

namespace Bolt\Extension\CGahmann\TruncateHtml;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}