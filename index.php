<?php

class CustomException extends Exception {}
class TypeException extends CustomException {}
class IntException extends TypeException {}
class FloatException extends TypeException {}
class StringException extends TypeException {}
class BoolException extends TypeException {}
class ArrayException extends TypeException {}
class NullException extends TypeException {}

function calculate($variable) {
    switch (gettype($variable)) {
        case 'integer':
            throw new IntException("Variable is an integer");
        case 'double':
            throw new FloatException("Variable is a float");
        case 'string':
            throw new StringException("Variable is a string");
        case 'boolean':
            throw new BoolException("Variable is a boolean");
        case 'array':
            throw new ArrayException("Variable is an array");
        case 'NULL':
            throw new NullException("Variable is null");
        default:
            throw new CustomException("Unknown variable type");
    }
}

// Пример 

try {
    $variable = 42;
    calculate($variable);
} catch (IntException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (FloatException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (StringException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (BoolException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (ArrayException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (NullException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} catch (CustomException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
