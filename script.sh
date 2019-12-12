#!/bin/bash

case "$1" in
  start)
    php -S 0.0.0.0:8000 -t ./tests
    ;;

  *)
    echo "Usage: ./action.sh {start}" >&2
    exit 3
    ;;
esac
