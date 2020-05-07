{
request_parameter_supported: true,
claims_parameter_supported: true,
introspection_endpoint: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/introspect",
check_session_iframe: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/connect/checkSession",
scopes_supported: [
"openid",
"accounts"
],
issuer: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp",
id_token_encryption_enc_values_supported: [
"A256GCM",
"A192GCM",
"A128GCM"
],
acr_values_supported: [
"urn:openbanking:psd2:ca"
],
userinfo_encryption_enc_values_supported: [
"A256GCM",
"A192GCM",
"A128GCM"
],
authorization_endpoint: "https://train01online.hl.co.uk/my-accounts/external-access/authorize",
request_object_encryption_enc_values_supported: [
"A256GCM",
"A192GCM",
"A128GCM"
],
rcs_request_encryption_alg_values_supported: [
"RSA-OAEP",
"RSA-OAEP-256",
"A128KW",
"A256KW",
"dir",
"A192KW"
],
claims_supported: [
"acr",
"openbanking_intent_id"
],
userinfo_signing_alg_values_supported: [
"PS256"
],
rcs_request_signing_alg_values_supported: [
"PS256"
],
token_endpoint_auth_methods_supported: [
"client_secret_post",
"private_key_jwt",
"self_signed_tls_client_auth",
"tls_client_auth",
"none",
"client_secret_basic"
],
tls_client_certificate_bound_access_tokens: true,
token_endpoint: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/access_token",
response_types_supported: [
"code",
"code id_token",
"id_token"
],
request_uri_parameter_supported: true,
rcs_response_encryption_enc_values_supported: [
"A256GCM",
"A192GCM",
"A128GCM"
],
userinfo_encryption_alg_values_supported: [
"RSA-OAEP",
"RSA-OAEP-256",
"A128KW",
"A256KW",
"RSA1_5",
"dir",
"A192KW"
],
grant_types_supported: [
"refresh_token",
"client_credentials",
"authorization_code"
],
end_session_endpoint: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/connect/endSession",
rcs_request_encryption_enc_values_supported: [
"A256GCM",
"A192GCM",
"A128GCM"
],
version: "3.0",
rcs_response_encryption_alg_values_supported: [
"RSA-OAEP",
"RSA-OAEP-256",
"A128KW",
"A256KW",
"dir",
"A192KW"
],
userinfo_endpoint: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/userinfo",
token_endpoint_auth_signing_alg_values_supported: [
"PS256"
],
require_request_uri_registration: true,
id_token_encryption_alg_values_supported: [
"RSA-OAEP",
"RSA-OAEP-256",
"A128KW",
"A256KW",
"dir",
"A192KW"
],
jwks_uri: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/connect/jwk_uri",
subject_types_supported: [
"pairwise"
],
id_token_signing_alg_values_supported: [
"PS256"
],
registration_endpoint: "https://vmtrainig01.hargreaveslansdown.co.uk/auth/oauth2/tpp/register",
request_object_signing_alg_values_supported: [
"PS256"
],
request_object_encryption_alg_values_supported: [
"RSA-OAEP",
"RSA-OAEP-256",
"A128KW",
"A256KW",
"dir",
"A192KW"
],
rcs_response_signing_alg_values_supported: [
"PS256"
]
}

