<?php

namespace Bolt\Extension\cgahmann\truncatehtml;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}