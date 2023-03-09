<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['https://sp.example.org/saml/metadata'] = [
  'entityid' => 'https://sp.example.org/saml/metadata',
  'contacts' => [],
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => [
      [
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
          'Location' => 'https://sp.example.org/saml/acs',
          'index' => 1,
      ],
      [
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
          'Location' => 'https://sp.example.org/saml/acs',
          'index' => 2,
      ],
  ],
  'SingleLogoutService' => [
      [
          'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
          'Location' => 'https://sp.example.org/saml/slo',
          'ResponseLocation' => 'https://sp.example.org/saml/slo',
      ],
  ],
  'NameIDFormat' => '',
  'keys' => [
      [
          'encryption' => true,
          'signing' => false,
          'type' => 'X509Certificate',
          'X509Certificate' => 'MIIDEzCCAfugAwIBAgIUYf203h6FoId3N76tqwkrd1XCkfIwDQYJKoZIhvcNAQELBQAwGTEXMBUGA1UEAwwObG9jYWxob3N0OjgwMDAwHhcNMjMwMzA5MDQxMTI4WhcNMjQwMzA4MDQxMTI4WjAZMRcwFQYDVQQDDA5sb2NhbGhvc3Q6ODAwMDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAJf+T5YJ0sqg4FsBuBhHovOs3tPY+d6LMz1V972oh5zlh8mYRWl9+tARoUcTjkGGbxIj8Yl0iKPCDk7/3lkkfv+78N6kVbDaeihERAOxlBRJNdAe3iOUx/+OLrG8tqevu/7RglFash9yu7Yg2M4knagRK6wK8o0DukjFMWffs9R2xTimEpgUpBnql3jRl0cUiZrI6YZCaq5p9jpP7uImNf2zhYDctCiWNLQzoyL8bQHoubZG8zvjTStOV0U+fvYjAhKCxlIuu2Yv6VfBUggrV8q/a8RtcoCaxHulIUDrAAdKl3Fd7X0th7/3kCwusihe3LSfiapcaYL6wSBDdhK1KSECAwEAAaNTMFEwHQYDVR0OBBYEFNEQKKLqeYX6/xnZlJ6V4Z88+1I4MB8GA1UdIwQYMBaAFNEQKKLqeYX6/xnZlJ6V4Z88+1I4MA8GA1UdEwEB/wQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBACCSGQZuYDPGRDY570R0e7zoUNBekg5Ad6vZsLX2942kJnViJ1x0bKq/sffCpwuaKQB9G3VzE1Svfn9qRozMDbCYwycokl9v1mTKVfQyUDFcwL7U3qt/O9wqSjSfqAfk7AXEGuQrqP6HfOX2kkkwDQV6aHA3wzA3o5USslRklEfCISbbOnGQnKPQin3SGlzaBWFbwT3ZBxpxgorduz02fmPeMKu8ozZ5zHEilGjdlpN0is4jaWYalWCajm5sRL0hpLpU8s3eT9FlzDXYN2Hsubnu4QDLRAdXeprRY+EXVcNamQXX2zq44hrNeBvmVi8/3YCQeGtuJKbw5Czho+8KTJ8=',
      ],
  ],
  'validate.authnrequest' => false,
  'saml20.sign.assertion' => true,
];