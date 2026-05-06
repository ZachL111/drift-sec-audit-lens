# Review Journal

I treated `drift-sec-audit-lens` as a project where the smallest useful behavior should still be inspectable.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 100, lane `hold`
- `stress`: `claim drift`, score 167, lane `ship`
- `edge`: `replay exposure`, score 161, lane `ship`
- `recovery`: `policy width`, score 152, lane `ship`
- `stale`: `trust boundary`, score 197, lane `ship`

## Note

The repository should be understandable without pretending it is larger than it is.
