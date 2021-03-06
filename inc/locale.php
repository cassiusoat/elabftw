<?php
/********************************************************************************
*                                                                               *
*   Copyright 2012 Nicolas CARPi (nicolas.carpi@gmail.com)                      *
*   http://www.elabftw.net/                                                     *
*                                                                               *
********************************************************************************/

/********************************************************************************
*  This file is part of eLabFTW.                                                *
*                                                                               *
*    eLabFTW is free software: you can redistribute it and/or modify            *
*    it under the terms of the GNU Affero General Public License as             *
*    published by the Free Software Foundation, either version 3 of             *
*    the License, or (at your option) any later version.                        *
*                                                                               *
*    eLabFTW is distributed in the hope that it will be useful,                 *
*    but WITHOUT ANY WARRANTY; without even the implied                         *
*    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR                    *
*    PURPOSE.  See the GNU Affero General Public License for more details.      *
*                                                                               *
*    You should have received a copy of the GNU Affero General Public           *
*    License along with eLabFTW.  If not, see <http://www.gnu.org/licenses/>.   *
*                                                                               *
********************************************************************************/
if (isset($_SESSION['prefs']['lang'])) {
    $locale = $_SESSION['prefs']['lang'] . '.utf8';
} else {
    $locale = 'en_GB.utf8';
}
$domain = 'messages';
putenv("LC_ALL=$locale");
$res = setlocale(LC_ALL, $locale);
//uncomment this line to remove cache from gettext (need to do :
// "cd locale;ln -s nocache ." before)
// bindtextdomain($domain, ELAB_ROOT."locale/nocache");
bindtextdomain($domain, ELAB_ROOT . "locale");
textdomain($domain);
