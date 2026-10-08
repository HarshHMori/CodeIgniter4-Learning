# Error transformers

Error transformers provide a standard interface for making generated error messages more useful to end users.

### Inputs & outputs

Each transformer's `transform` function is given an Immutable List of Immutable Maps as its first argument.

It is expected that each `transform` function returns a List of similarly-formed Maps.

These errors originate from the Redux error actions that add errors to state. Errors are transformed before being passed into the reducer.

It's important that all the keys present in each error (specifically, `line`, `level`, `message`, `source`, and `type`) are present when the transformer is finished.

##### Deleting an error

If you want to delete an error completely, you can overwrite it with `null`. The null value will be filtered out of the transformed error array before the errors are returned.
å

### Example transformer

This transformer will increase all your line numbers by 10.

```
export function transform(errors) {
  return errors.map(err => {
    err.line += 10
    return err
  })
}
```

---

<!-- local-learning-guide -->

# src/core/plugins/err/error-transformers: local learning guide

[Source checkout guide](../../../../../README.md) · [Parent guide](../README.md)

## What this folder does

This folder implements part of the `src/core/plugins/err/error-transformers` plugin or its extensions. Read the nearest parent index.js registration, then follow the imported actions/selectors/components below to see what is active.

## Read and work through it

1. Start with the parent registration/import or package.json script that reaches this folder.
2. Read the entry file below (often index.js) and follow local imports in execution order.
3. Identify the inputs: UI props, plugin state/actions, configuration, or build options. Trace the resulting render, state change, or artifact.
4. Compare the behavior in `npm run dev` for source UI work or `npm run serve-static` for prebuilt assets, running commands from the source checkout root.
5. For a source change, run the relevant lint/type/unit checks declared in package.json and inspect the rendered behavior. Release and container operations have separate prerequisites and are not needed just to read this code.

## Local files

| File | Entry points and dependencies |
| --- | --- |
| [hook.js](hook.js) | Module implementation. Provides a default export. Imports: `lodash/reduce`, `./transformers/not-of-type`, `./transformers/parameter-oneof`. |

## Child folders

- [transformers/](transformers/README.md)

## Learning checkpoint

Explain how this folder is reached and what it changes in the viewer or build. Keep the API specification and backend implementation distinct from viewer source. Existing upstream guides, where present above, are retained for deeper implementation details.
