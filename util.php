<?php

function verify_signature($raw_data, $signature, $pub_key_contents)
{
    return openssl_verify($raw_data, base64_decode($signature), $pub_key_contents, 'sha256');
}