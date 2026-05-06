# Drift Sec Audit Lens Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 100 | hold |
| stress | claim drift | 167 | ship |
| edge | replay exposure | 161 | ship |
| recovery | policy width | 152 | ship |
| stale | trust boundary | 197 | ship |

Start with `stale` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `trust boundary` against `trust boundary`, not the raw score alone.
