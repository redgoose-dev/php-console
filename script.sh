#!/bin/bash

case "$1" in
  start)
    php -S 0.0.0.0:8000 -t ./tests
    ;;

  update-tag)
    git tag -a $2 -m "$3"
    git push --tags
    ;;

  *)
    echo "Usage: ./action.sh {start}" >&2
    exit 3
    ;;
esac
