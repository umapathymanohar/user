<?php
class TimesheetController extends BaseController
{
    protected $layout = 'layouts.master';
    public function index()
    {
        $timesheet = Auth::user()->timesheet()->where('check_in_date', '=', date('Y-m-d'))->get();
        $id        = "0";
        foreach ($timesheet as $time) {
            $id = $time->user_id;
        }
        echo $id;
        if ($id != "0") {
            $timesheet = Auth::user()->timesheet()->orderBy('check_in_date', 'desc')->get();
            return View::make('timesheet.index', array(
                'timesheet' => $timesheet
            ));
        } else {
            $timesheets                = new timesheet();
            $logged_in_user            = Auth::user();
            $timesheets->user_id       = $logged_in_user->id;
            $timesheets->check_in_date = date('Y-m-d');
            $timesheets->save();
            return Redirect::to('timesheet');
        }
    }
    public function checkin()
    {
        $timesheet                = Auth::user()->timesheet()->where('check_in_date', '=', date('Y-m-d'))->first();
        $timesheet->check_in_time = date('H:i:s');
        $timesheet->save();
        return Redirect::to('timesheet');
    }
    public function checkout()
    {
        $timesheet                 = Auth::user()->timesheet()->where('check_in_date', '=', date('Y-m-d'))->first();
        $timesheet->check_out_time = date('H:i:s');
        $timesheet->save();
        return Redirect::to('timesheet');
    }
}