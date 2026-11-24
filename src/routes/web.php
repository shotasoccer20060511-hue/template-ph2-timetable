<?php

use App\Http\Controllers\TimetableController;

Route::get('/timetable', [TimetableController::class, 'index']);
