<?php

foreach (glob(__DIR__.'/../bootstrap/cache/*.php') as $manifest) {
    unlink($manifest);
}
