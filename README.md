# Package

## Description
This is a skeleton for composer library distributed via GitHub.

## Installation

To install the package add the repository to your `composer.json`

```json
{
    "repositories": [
        {
            "url": "https://github.com/izzius94/package.git",
            "type": "github"
        }
    ]
}
```

### Using custom branch/commit

To use a specific branch use 
```
composer require izzius/package:dev-[BRANCH-NAME]
```

To use a specific commit use
```
composer require izzius/package:dev-[BRANCH-NAME]#[COMMIT]
```

## Securing the package

If the package is private you need to set an authentication token in composer

### Locally:
```
composer config -G github-oauth.github.com ${GITHUB_TOKEN}
```

> Note: This will create an auth.json file in your project. Remember to exclude it from your repo 

### Globally:
```
composer config -G github-oauth.github.com ${GITHUB_TOKEN}
```
