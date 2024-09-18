#!/usr/bin/env bash
export SUPERVISOR_PHP_SERVE='php artisan serve --host=0.0.0.0';
export SUPERVISOR_REVERB_START='php artisan reverb:start';
export SUPERVISOR_YARN_DEV="bun run dev --host=${H}";
export SUPERVISOR_LIVE_SERVER='bun run live-server --port=1111 --host=0.0.0.0';
export SUPERVISOR_QUEUE_WORK='php artisan queue:work';
