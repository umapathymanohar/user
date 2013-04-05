<?php
class DashboardController extends BaseController
{
    public function index()
    {
        $roles = Auth::user()->role()->first();
        $role  = $roles->path;
        return View::make('dashboard.index', array(
            'role' => $role
        ));
    }
}