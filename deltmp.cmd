@echo off

erase /F /S /Q tmp\eaccelerator.cache\*.*
erase /F /S /Q tmp\xdebug\*.*
erase /F /S /Q app\bin\tmp\eaccelerator.cache\*.*
erase /F /S /Q app\bin\tmp\xdebug\*.*

IF EXIST app\logs erase /F /S /Q app\logs\*.*
IF EXIST data\*.err erase /F /S /Q data\*.err
IF EXIST data\*.pid erase /F /S /Q data\*.pid

