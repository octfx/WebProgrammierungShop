<?php declare(strict_types = 1);
/**
 * User: Hannes
 * Date: 27.11.2017
 * Time: 20:42
 */

namespace App\SparkPlug\Validation;

use App\SparkPlug\Request\Request;
use App\SparkPlug\Validation\Exceptions\ValidationException;
use InvalidArgumentException;

class Validation
{
    const TESTS = [
        'boolean',
        'email',
        'int',
        'float',
        'string',
        'url',
    ];

    private $failedRules = [];

    public function validate(array $rules, $data): array
    {
        if ($data instanceof Request) {
            $data = $data->all();
        }

        foreach ($rules as $name => $rule) {
            if (isset($data[$name])) {
                $rule = explode('|', $rule);
                $test = array_shift($rule);

                if (!in_array($test, static::TESTS)) {
                    throw new InvalidArgumentException("Test {$test} not in (".implode(static::TESTS)."}");
                }

                if (!$this->validateAgainstRule($test, $data[$name], $rule)) {
                    $this->failedRules[] = $name;
                }
            }
        }

        if (!empty($this->failedRules)) {
            throw new ValidationException(print_r($this->failedRules, true));
        }

        return array_intersect_key($data, $rules);
    }

    private function validateAgainstRule($rule, $data, array $options = [])
    {
        if ($rule === 'string') {
            $pass = is_string($data);

            foreach ($options as $option) {
                if (str_contains($option, 'min')) {
                    $pass = $pass && (strlen($data) >= intval(str_replace('min:', '', $option)));
                }

                if (str_contains($option, 'max')) {
                    $pass = $pass && (strlen($data) <= intval(str_replace('max:', '', $option)));
                }
            }
        } else {
            $pass = filter_var($data, constant("FILTER_VALIDATE_".strtoupper($rule)));
        }

        return $pass;
    }

}
