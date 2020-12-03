#!/bin/bash

docker run --rm -v $(pwd):/app composer/composer create-project --prefer-dist laravel/laravel oms