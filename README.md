# drift-sec-audit-lens

`drift-sec-audit-lens` is a PHP project in security tooling. Its focus is to implement a PHP security tooling project for audit policy evaluation, using deny and allow fixtures and explainable decision traces.

## Project Rationale

The project exists to keep a narrow engineering decision visible and testable. For this repo, that decision is how trust boundary and replay exposure should influence a review result.

## Drift Sec Audit Lens Review Notes

Start with `trust boundary` and `trust boundary`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## Feature Set

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/drift-sec-audit-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Architecture

The core code exposes a scoring path and the added review layer uses `signal`, `slack`, `drag`, and `confidence`. The domain terms are `trust boundary`, `claim drift`, `replay exposure`, and `policy width`.

The PHP implementation avoids hidden state so fixture changes are easy to reason about.

## Usage

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Test Command

That command is also the regression path. It verifies the domain cases and catches mismatches between the CSV, metadata, and code.

## Next Improvements

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
