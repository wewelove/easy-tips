<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace GPBMetadata;

class Demo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adb010a0a64656d6f2e70726f746f120464656d6f221c0a0c48656c6c6f" .
            "52657175657374120c0a046e616d65180120012809221d0a0a48656c6c6f" .
            "5265706c79120f0a076d65737361676518012001280932500a0747726565" .
            "74657212450a0853617948656c6c6f12122e64656d6f2e48656c6c6f5265" .
            "71756573741a102e64656d6f2e48656c6c6f5265706c79221382d3e49302" .
            "0d22082f76312f64656d6f3a012a42300a15696f2e677270632e6578616d" .
            "706c65732e64656d6f420944656d6f50726f746f50015a0a64656d6f2f3b" .
            "64656d6f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

