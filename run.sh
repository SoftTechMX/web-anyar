#!/bin/bash

# Este script es para entornos de desarrollo, no para producción
# Ejecuta el servidor por default de php y la cola de trabajos

gnome-terminal -- bash -c "php artisan serve; exec bash"
gnome-terminal -- bash -c "php artisan queue:work; exec bash"
gnome-terminal -- bash -c "source ~/.nvm/nvm.sh && nvm use 18 && npm run dev; exec bash"