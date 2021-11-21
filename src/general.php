<?php declare(strict_types=1);

namespace AC\General;

/**
* Partial application by pre-filling values at the beginning of the param list.
*
* @param callable $fn
* @param mixed ...$args1 Initial args
* @return \Closure
*/
function partial(callable $fn, ...$args1): callable {
    return fn(...$args2) => $fn(...[...$args1, ...$args2]);
}
