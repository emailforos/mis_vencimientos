<?php
/*
 * This file is part of facturacion_base
 * Copyright (C) 2014-2017    Carlos Garcia Gomez  neorazorx@gmail.com
 * Copyright (C) 2014         GISBEL JOSE          gpg841@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once 'plugins/facturacion_base/extras/fbase_controller.php';

class contabilidad_formas_pago extends fbase_controller
{
    public function vencimientos()
    {
        return array(
            '+0day' => 'mismo día',
            '+1day' => '1 día',            
            '+45day' => '45 días',
            '+1week' => '1 semana',
            '+2week' => '2 semanas',
            '+3week' => '3 semanas',
            '+1month' => '1 mes',
            '+2month' => '2 meses',
            '+3month' => '3 meses',
            '+4month' => '4 meses',
            '+5month' => '5 meses',
            '+6month' => '6 meses',
            '+7month' => '7 meses',
            '+8month' => '8 meses',
            '+9month' => '9 meses',
            '+10month' => '10 meses',
            '+11month' => '11 meses',
            '+12month' => '12 meses',
        );
    }
}
