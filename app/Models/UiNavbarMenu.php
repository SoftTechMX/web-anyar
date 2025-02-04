<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiNavbarMenu extends Model
{
    use HasFactory;

    /**
     * Relación: Obtener los submenús asociados a este menú.
     */
    public function subMenus()
    {
        return $this->hasMany(UiNavbarMenu::class, 'parent_menu');
    }

    /**
     * Verificar si el menú tiene submenús.
     *
     * @return bool
     */
    public function hasSubMenu() : bool
    {
        return $this->subMenus()->exists();
    }
}
