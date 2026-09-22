# Security

## Public surface

This website is informational. Registration is handled by the configured Google Form. The application does not expose an enquiry API and does not store registration, contact, payment, or authentication data.

## Reporting a vulnerability

Please report a suspected vulnerability privately to the repository owner through GitHub. Do not include passwords, access tokens, personal registration data, or other secrets in a public issue.

## Deployment controls

- Environment files, local runtime state, build output, and credentials are excluded from source control.
- Production responses use a restrictive Content Security Policy and browser security headers.
- External registration links are configured in `app/data/registration.ts`.
- Dependencies should be checked with `npm audit --omit=dev` before each deployment.
