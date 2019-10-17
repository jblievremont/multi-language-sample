<?php
/*
 * Test for SonarPHP
 */

print 'polop' . $variableFromMain;

define(variableFromMyLib, 'palap');

function fnFromMyLib() {
    print variableFromMyLib;
}

?>