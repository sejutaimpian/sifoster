<?php
function filterrole()
{
    if (session()->get('role') != 'user') {
        return redirect()->to('admin');
    }
}
