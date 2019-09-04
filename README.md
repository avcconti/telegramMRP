# telegramMRP
Telegram Message Run Processor

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

1. Install Docker on your machine, here is the link to [Docker installation](https://docs.docker.com/install/#supported-platforms) page (For Windows: Install Docker toolbox)

2. Install Git

3. To check that you are able to execute the code, you should be able to view a valid output from this command (run it on terminal):

	```
	docker run hello-world
	```

4. Create a bot with instructions from [Telegram API Bot](https://core.telegram.org/bots) and note down the `key`, you will need it for the `config.php` file.

### Installing

1. Git clone this repository to be able to work with the files included, and move to the directory on your system.

2. `config.php` must be created before executing the script. There is a `config_template.php` to check possible values.

3. The script expect the file `message.md`to exists in the root path. Telegram API does not support full markdown, but we could use different aspects of it:

    ````
    *bold text*
    _italic text_
    [inline URL](http://www.example.com/)
    [inline mention of a user](tg://user?id=123456789)
    `inline fixed-width code`
    ```block_language
    pre-formatted fixed-width code block
    ```
    ````

4. `config.php`file is ready to work with two envs, but you could use only one, just be sure to setup it correctly within index.php.

2. Execute command:

	```
	docker build -t telegram-mrp . && docker run -it --rm telegram-mrp

	```

### Deployment

TODO

## Built With

* [VSCode](https://www.vscode.com/)
* [macOS](https://www.apple.com/lae/macos/high-sierra/)
* [Docker](https://www.docker.com/)
* [Git](https://git-scm.com/)

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Andrés Velasco** - *Software Engineer*

See also the list of [contributors](https://github.com/BrainSINS/Analytics) who participated in this project.

## License

GPL 3.0

