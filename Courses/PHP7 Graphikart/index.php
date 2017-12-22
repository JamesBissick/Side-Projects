<?php
declare(strict_types=1);
class A {

}
function ma_fonction(float ...$arg): int {
    var_dump($arg);
    return new A();
    return count($arg);
}

ma_fonction(10.40, 23, 17);