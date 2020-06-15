<?php


namespace App\Support;


class Roles
{
//init role
    const ROOT = 'root';
    const KADIN = 'kepala dinas';
    const KABAG = 'kepala bagian';
    const STAFF = 'staff';
    const ADMIN = 'admin';

    const ALL = [
        Roles::ROOT,
        Roles::ADMIN,
        Roles::KADIN,
        Roles::KABAG,
        Roles::STAFF,
    ];
}
