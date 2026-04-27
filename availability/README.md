# PHP -- Availability Sidecar

> **Auto-generated** -- do not edit manually. Changes will be overwritten on the next generation run.
>
> Regenerate with: `make project/generate-tests`

## Source

- **Spec:** `compression_contracts/availability/availability.json` (sidecar)
- **Files:** 1 (`availability.json`)

## Contents

Capability matrix sidecar -- chain compatibility, capabilities_version,
and per-feature availability metadata.

## Access

The sidecar ships at the package root path `vendor/giveitsmaller/contracts/availability/availability.json`.
No formal helper class is provided yet -- parse via
`json_decode(file_get_contents(...))` or compose a path resolver in your
application code. A formal packaging mechanism (helper class) is a
follow-up ticket.
