An example project that uses [php-actions/composer][composer-link]
===

This is a trivial project that holds only simple example functionality: a repository that installs its dependencies (a WebEngine application) plus a private repository. The private repository is hosted on Github at https://github.com/php-actions/example-private-repo (the link will return 404 due to it being private).

An SSH key has been generated specifically for this project. It is a typical public/private pair of RSA keys. The example-private-repo repository has the key added as a read-only deploy key, so anyone with access to the key can clone the repo (but not push). The key pair is stored in this repository as a [Github Secret][secret].

Check out the [Actions tab in the Github repository][actions-tab] to see the past actions workflows and their outputs. You will see that both the [public repo for `phpgt/webengine`][webengine-link] and the [private repo for `php-actions/example-private-repo`][example-private-repo-link] are downloaded successfully.

The file at .github/workflows/ci.yml shows how to use [php-actions/composer][composer-link].

*** 

If you found this repository helpful, please consider [sponsoring the developer][sponsor].

[secret]: https://docs.github.com/en/actions/configuring-and-managing-workflows/creating-and-storing-encrypted-secrets
[composer-link]: https://github.com/php-actions/composer
[actions-tab]: https://github.com/php-actions/example-phpunit/actions
[sponsor]: https://github.com/sponsors/g105b
[webengine-link]: https://github.com/phpgt/webengine
[example-private-repo-link]: https://github/com/php-actions/example-private-repo