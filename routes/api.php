<?php

Route::resource('/trucks', 'TrucksApiController', ['except' => ['create', 'edit', 'store', 'destroy', 'update']]);