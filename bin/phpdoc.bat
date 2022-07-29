@ECHO OFF
SETLOCAL DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/phar/phpDocumentor.phar
SET COMPOSER_RUNTIME_BIN_DIR=%~dp0/../vendor/bin
REM php "%BIN_TARGET%" %*

docker run --rm -v %~dp0\..\:/data phpdoc/phpdoc:3
REM --template=vendor/onspli/phpdoc-markdown/templates/public-onefile
