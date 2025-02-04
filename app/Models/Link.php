<?php

namespace App\Models;

class Link
{
    public string $text;
    public string $url;
    public ?string $icon; // Puede ser nulo si no se especifica
    public ?string $alt;  // Puede ser nulo si no se especifica
    public array $attributes; // Otros atributos opcionales

    /**
     * Constructor para inicializar un Link.
     */
    public function __construct(string $text, string $url, ?string $icon = null, ?string $alt = null, array $attributes = [])
    {
        $this->text = $text;
        $this->url = $url;
        $this->icon = $icon;
        $this->alt = $alt;
        $this->attributes = $attributes;
    }

    /**
     * Devuelve los atributos del enlace como una cadena para vistas.
     */
    public function renderAttributes(): string
    {
        return collect($this->attributes)
            ->map(fn($value, $key) => sprintf('%s="%s"', $key, htmlspecialchars($value)))
            ->join(' ');
    }

    /**
     * Método estático para crear una colección de enlaces.
     */
    public static function collection(array $links): array
    {
        return array_map(fn($link) => new self(...$link), $links);
    }
}
