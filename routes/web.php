<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FooterColumnController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFormsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checklogin;
use App\Http\Controllers\CoursecategoryController;
use App\Http\Controllers\CourseStatusController;
use App\Http\Controllers\CourseLevelController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\userCourseController;
use App\Http\Controllers\UserpaymentsController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CourseSeasonController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\LessoncommentsController;
use App\Http\Controllers\CourseAttachmentController;
use App\Http\Controllers\courseQuestionController;
use App\Http\Controllers\courseAnswerController;
use App\Http\Controllers\lessonSuggestionController;
use App\Http\Controllers\couresAnswerreactionController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\lessonErrortitleController;
use App\Http\Controllers\lessonErrorController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;

// new version routes
// settings routes
Route::group([
    'prefix' => 'settings',
    'as' => 'settings.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::group([
        'prefix' => 'colors',
        'controller' => SettingsController::class,
        'as' => 'colors.'
    ], function () {
        Route::get('/create', 'createColor')->name('createColor');
        Route::post('/update', 'upsertColor')->name('upsertColor');
        Route::get('/show', 'showColors')->name('showColors');
        Route::get('/delete', 'deleteColor')->name('deleteColor');
    });
    Route::group([
        'prefix' => 'header',
        'controller' => HeaderController::class,
        'as' => 'header.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
    Route::group([
        'prefix' => 'logo',
        'controller' => LogoController::class,
        'as' => 'logo.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
    Route::group([
        'prefix' => 'section',
        'controller' => SectionController::class,
        'as' => 'section.'
    ], function () {
        Route::get('/index', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/edit', 'edit')->name('edit');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    Route::group([
        'prefix' => 'service',
        'controller' => ServiceController::class,
        'as' => 'service.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/edit', 'edit')->name('edit');
        Route::post('/show', 'show')->name('show');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
    Route::group([
        'prefix' => 'introduction',
        'controller' => IntroductionController::class,
        'as' => 'introduction.'
    ], function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::post('/edit', 'edit')->name('edit');
        Route::post('/show', 'show')->name('show');
        Route::post('/update', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });
});


Route::post('/removeActivationCode', [UserController::class, 'removeActivationCode'])->name('removeActivationCode');
// category routes
Route::group(['prefix' => 'category', 'controller' => CategoryController::class, 'as' => 'category-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{category}', 'adminShow')->missing(function () {
        return to_route('missing');
    })->name('adminShow');
    Route::get('/show/{category}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{category}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{category}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/admin/deleteAll', 'deleteAll')->name('deleteAll');
});
// product routes
Route::group(['prefix' => 'product', 'controller' => ProductController::class, 'as' => 'product-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/list', 'adminIndex')->name('adminIndex');
    Route::get('/list', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
    Route::get('/admin/show/{product}', 'adminShow')->missing(function () {
        return to_route('missing');
    })->name('adminShow');
    Route::get('/show/{product}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{product}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{product}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/admin/deleteAll', 'deleteAll')->name('deleteAll');
});
// menu routes
Route::group(['prefix' => 'menu', 'controller' => MenuController::class, 'as' => 'menu-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{menu}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{menu}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{menu}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
});
// user routes
Route::group([
    'prefix' => 'user',
    'controller' => userController::class,
    'as' => 'user.'
], function () {
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/check_user', 'checkUser')->name('checkUser');
    Route::get('/profile/{user?}', 'profile')->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('profile');
    Route::get('/edit/{user}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{user}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/logout{id?}', 'logout')->name('logout');
    Route::get('/index', 'index')->middleware(checkAdminMiddleware::class)->name('index');
    Route::get('/courses/{user}', 'courses')->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('courses');
    Route::get('/admin/courses/{user}', 'adminCourses')->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('adminCourses');
    Route::post('/sendSMS', 'send_code')->name('sendSMS');
    Route::post('/sendCode', 'send_sms')->name('sendCode');
    Route::post('/checkAuth', 'checkAuth')->name('checkAuth');
    Route::post('/validate', 'validate')->name('validate');
    Route::post('/setPassword', 'setPassword')->name('setPassword');
    Route::post('/savePassword', 'savePassword')->name('savePassword');
    Route::get('/forgetPassword', 'forgetPassword')->name('forgetPassword');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// comments routes
Route::group([
    'prefix' => 'comment',
    'controller' => CommentController::class,
    'as' => 'comment.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{comment}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{comment}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{comment}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// questions routes
Route::group(['prefix' => 'question', 'controller' => QuestionController::class, 'as' => 'question-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{question}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{question}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{question}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// answers routes
Route::group(['prefix' => 'answer', 'controller' => AnswerController::class, 'as' => 'answer-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->name('store');
    Route::get('/list', 'index')->name('index');
    Route::get('/show/{answer}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{answer}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{answer}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// home routes
Route::get('/home', function () {
    return view('mahdi.index');
});
Route::group(['controller' => HomeController::class], function () {
    Route::get('/', 'index')->name('home');
    Route::get('/notAccess', 'notAccess')->name('notAccess');
    Route::get('/loginAtFirst', 'loginAtFirst')->name('loginAtFirst');
    Route::post('/relatedProducts', 'relatedProducts')->name('relatedProducts');
    Route::get('/dashboard', 'dashboard')->middleware(checkAdminMiddleware::class)->name('dashboard');
});
// admin routes
Route::controller(userController::class)->prefix('admin')->group(function () {
    Route::get('/signupUser', 'adminSignup')->middleware(checkAdminMiddleware::class)->name('admin_create_user');
    // Route::post("/store","store") -> name("user_store");
    // Route::get("/loginUser","login") -> name("user_login");
    // Route::post("/check_login","checkLogin");
    Route::get('/profile/{id?}', 'profile')->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    });
    // Route::get("/index","index");
    // Route::get("/edit/{id}","edit")->missing(function () {return to_route('missing');});
    // Route::post("/update","update");
    // Route::get("/delete/{id}","delete")->missing(function () {return to_route('missing');});
});
// search routes
Route::group(['controller' => SearchController::class, 'as' => 'search-'], function () {
    Route::post('/search', 'search')->name('search');
    Route::get('/show/products/category/{category}', 'index')->missing(function () {
        return to_route('missing');
    })->name('cat-products');
});
// banners routes
Route::group(['prefix' => 'banners', 'controller' => BannersController::class, 'as' => 'banners-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'bannersCreate')->name('create');
    // Route::get('/logo/create', 'logoCreate')->name('logo-create');
    Route::get('/bigBanner/create', 'bigBannerCreate')->name('bigBanner-create');
    Route::get('/tiles/create', 'tilesCreate')->name('tiles-create');
    Route::get('/bigTile/create', 'bigTileCreate')->name('bigTile-create');
    Route::get('/footerTile/create', 'footerTileCreate')->name('footerTile-create');
    Route::post('/upsert', 'upsert')->name('upsert');
});
// footer column and rows routes
Route::group(['prefix' => 'footer', 'controller' => FooterColumnController::class, 'as' => 'footer-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/update', 'update')->name('update');
    Route::get('/footerFormMedia/create', 'footerFormMediaCreate')->name('footerFormMedia-create');
    Route::post('/footerFormMedia/store', 'footerFormMediaStore')->name('footerFormMedia-store');
    Route::post('/footerFormMedia/update', 'footerFormMediaUpdate')->name('footerFormMedia-update');
});
// about us routes
Route::group(['prefix' => 'aboutus', 'controller' => AboutUsController::class, 'as' => 'aboutus-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/upsert', 'upsert')->name('upsert');
    Route::get('', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('index');
});
// contact us routes
Route::group(['prefix' => 'contactus', 'controller' => ContactUsController::class, 'as' => 'contactus-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::get('/usersContact/{user}', 'usersContact')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('usersContact-index');
    Route::get('/usersContact/edit/{contactUs}', 'usersContactEdit')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('usersContact-edit');
    Route::post('/usersContact/update', 'usersContactUpdate')->withoutMiddleware(checkAdminMiddleware::class)->name('usersContact-update');
    Route::get('/usersContact/delete/{contactUs}', 'usersContactDelete')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('usersContact-delete');
    Route::get('/create', 'create')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->name('create');
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/edit/{contactUs}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/show/{contactUs}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/list', 'index')->name('index');
    Route::get('/delete/{contactUs}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAllUser', 'deleteAllUser')->name('deleteAllUser');
});
// home forms routes
Route::group(['prefix' => 'homeForm', 'controller' => HomeFormsController::class, 'as' => 'homeForm-', 'middleware' => checkAdminMiddleware::class], function () {
    Route::post('/store', 'store')->withoutMiddleware(checkAdminMiddleware::class)->name('store');
    Route::get('/edit/{homeForms}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/show/{homeForms}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/list', 'index')->name('index');
    Route::get('/delete/{homeForms}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
//! akbarnezhad courses
// course category
Route::group([
    'prefix' => 'coursecategory',
    'controller' => CoursecategoryController::class,
    'as' => 'coursecategory.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/show/{coursecategory}', 'adminShow')->missing(function () {
        return to_route('missing');
    })->name('adminShow');
    Route::get('/show/{coursecategory}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/admin/categories', 'adminIndex')->name('adminList');
    Route::get('/categories', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('list');
    Route::get('/edit/{coursecategory}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{coursecategory}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// course teacher
Route::group([
    'prefix' => 'teacher',
    'controller' => TeacherController::class,
    'as' => 'teacher.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{teacher}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/teachers', 'index')->name('list');
    Route::get('/edit/{teacher}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update/{teacher}', 'update')->missing(function () {
        return to_route('missing');
    })->name('update');
    Route::get('/delete/{teacher}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// course status
Route::group([
    'prefix' => 'courseStatus',
    'controller' => CourseStatusController::class,
    'as' => 'status.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{coursestatus}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/statuses', 'index')->name('list');
    Route::get('/edit/{coursestatus}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{coursestatus}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// course levels
Route::group([
    'prefix' => 'courseLevel',
    'controller' => CourseLevelController::class,
    'as' => 'courseLevel.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{courseLevel}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/levels', 'index')->name('list');
    Route::get('/edit/{courseLevel}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{courseLevel}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// course
Route::group([
    'prefix' => 'course',
    'controller' => CourseController::class,
    'as' => 'course.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/show/{course}', 'adminShow')->missing(function () {
        return to_route('missing');
    })->name('adminShow');
    Route::get('/show/{course}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/admin/courses', 'adminIndex')->name('adminList');
    Route::get('/courses', 'index')->withoutMiddleware(checkAdminMiddleware::class)->name('list');
    Route::get('/edit/{course}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{course}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/users/{course}', 'users')->missing(function () {
        return to_route('missing');
    })->name('users');
    Route::get('/admin/seasons/{course}', 'adminSeasons')->missing(function () {
        return to_route('missing');
    })->name('adminSeasons');
    Route::get('/seasons/{course}', 'seasons')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('seasons');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
//user_course
Route::group([
    'prefix' => 'userCourse',
    'controller' => userCourseController::class,
    'as' => 'userCourse.',
    'middleware' => [checkAdminMiddleware::class, checklogin::class]
], function () {
    Route::get('/signup/{course}', 'store')->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name('store');
    Route::get('/show/{userCourse}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::get('/edit/{userCourse}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{userCourse}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/comments/{userCourse}', 'comments')->missing(function () {
        return to_route('missing');
    })->name('comments');
});
// user payment
Route::group([
    'prefix' => 'payment',
    'controller' => UserpaymentsController::class,
    'as' => 'payment_',
    'middleware' => checklogin::class
], function () {
    Route::post('/course/{course}', 'buyCourse')->missing(function () {
        return to_route('missing');
    })->name('course');
});
// course season
Route::group([
    'prefix' => 'season',
    'controller' => CourseSeasonController::class,
    'as' => 'season.',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create/{course?}', 'create')->missing(function () {
        return to_route('missing');
    })->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/admin/show/{courseseason}', 'adminShow')->missing(function () {
        return to_route('missing');
    })->name('adminShow');
    Route::get('/show/{courseseason}', 'show')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('show');
    // Route::get('/seasons/{course}', 'index')->missing(function () {return to_route('missing');})->name('list');
    Route::get('/edit/{courseseason}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::post('/update', 'update')->name('update');
    Route::get('/delete/{courseseason}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/admin/lessons/{courseseason}', 'adminLessons')->missing(function () {
        return to_route('missing');
    })->name('adminLessons');
    Route::get('/lessons/{courseseason}', 'lessons')->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name('lessons');
});
// course lessons
Route::group([
    'prefix' => 'lesson',
    'controller' => LessonController::class,
    'as' => 'lesson_',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get("/create/{season?}/{course?}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store", "store")->name("store");
    Route::get("/edit/{lesson}", "edit")->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::post("/update/{lesson}", "update")->missing(function () {
        return to_route('missing');
    })->name("update");
    Route::get("/delete/{lesson}", "delete")->missing(function () {
        return to_route('missing');
    })->name("delete");
    Route::get("/admin/show/{lesson}", "adminShow")->missing(function () {
        return to_route('missing');
    })->name("adminShow");
    Route::get("/show/{lesson}", "show")->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name("show");
    Route::get("/index", "index")->name("index");
    Route::get("/attachfile/{lesson}", "attachfile")->missing(function () {
        return to_route('missing');
    })->name("attachfile");
    Route::get("/showerrors/{lesson}", "errors")->missing(function () {
        return to_route('missing');
    })->name("errors");
    Route::get("/showSuggestions/{lesson}", "suggestions")->missing(function () {
        return to_route('missing');
    })->name("suggestions");
    Route::get("/admin/showQuestion/{lesson}", "adminQuestions")->missing(function () {
        return to_route('missing');
    })->name("adminQuestions");
    Route::get("/showQuestion/{lesson}", "questions")->withoutMiddleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("questions");
    Route::get("/admin/attachments/{lesson}", "adminShowLessonAttachments")->missing(function () {
        return to_route('missing');
    })->name("adminAttachments");
    Route::get("/attachments/{lesson}", "showLessonAttachments")->withoutMiddleware(checkAdminMiddleware::class)->middleware(checklogin::class)->missing(function () {
        return to_route('missing');
    })->name("attachments");
});
// meta
Route::group([
    'prefix' => 'meta',
    'controller' => MetaController::class,
    'as' => 'meta_',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/meta', 'index')->name('index');
    Route::get('/edit/{meta}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::get('/delete/{meta}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::get('/show/{meta}', 'show')->missing(function () {
        return to_route('missing');
    })->name('show');
    Route::post('/update/{meta}', 'update')->missing(function () {
        return to_route('missing');
    })->name('update');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// lesson comments
Route::group([
    'prefix' => 'lessoncomments',
    'controller' => LessoncommentsController::class,
    'as' => 'lessonComments_',
    'middleware' => checklogin::class
], function () {
    Route::get("/admin/create/{lesson}", "adminCreate")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminCreate");
    Route::get("/create/{lesson}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store/{lesson}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
    Route::get("/admin/index/{lesson}", "adminIndex")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminIndex");
    Route::get("/index/{lesson}", "index")->missing(function () {
        return to_route('missing');
    })->name("index");
    Route::get("/lesson/{lesson}/comment/{lessoncomments}/edit", "edit")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::post("/update/{lessoncomments}", "update")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("update");
    Route::get("/lesson/{lesson}/comment/{lessoncomments}/delete", "delete")->missing(function () {
        return to_route('missing');
    })->name("delete");
});
// course attachments
Route::group([
    'prefix' => 'courseAttachments',
    'controller' => CourseAttachmentController::class,
    'as' => 'attachment_',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::post("/attachfile", "store")->name("store");
    Route::post("/attachfile/{courseattachment}", "update")->missing(function () {
        return to_route('missing');
    })->name("update");
    Route::get("/{courseattachment}/delete", "delete")->missing(function () {
        return to_route('missing');
    })->name("delete");
});
// course question
Route::group([
    'prefix' => 'courseQuestion',
    'controller' => courseQuestionController::class,
    'as' => 'question_',
    'middleware' => checklogin::class
], function () {
    Route::get("/admin/create/{lesson}", "adminCreate")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminCreate");
    Route::get("/create/{lesson}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store/{lesson}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
    Route::get("/lesson/{lesson}/question/{coursequestion}/edit", "edit")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::get("/lesson/{lesson}/question/{coursequestion}/delete", "delete")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("delete");
    Route::post("/update/{coursequestion}", "update")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("update");
    Route::get("/admin/answers/{coursequestion}", "adminAnswers")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminAnswers");
    Route::get("/answers/{coursequestion}", "answers")->missing(function () {
        return to_route('missing');
    })->name("answers");
});
// course answer
Route::group([
    'prefix' => 'courseAnswer',
    'controller' => courseAnswerController::class,
    'as' => 'answer_',
    'middleware' => checklogin::class
], function () {
    Route::get("/admin/create/{coursequestion}", "adminCreate")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminCreate");
    Route::get("/create/{coursequestion}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store/{coursequestion}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
    Route::get("/{courseanswer}/edit", "edit")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::get("/{courseanswer}/delete", "delete")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("delete");
    Route::post("/update/{courseanswer}", "update")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("update");
    Route::get("/admin/reactions/{courseanswer}", "adminReactions")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminReactions");
    Route::get("/reactions/{courseanswer}", "reactions")->missing(function () {
        return to_route('missing');
    })->name("reactions");
});
// lesson suggestion
Route::group([
    'prefix' => 'lessonSuggestion',
    'controller' => lessonSuggestionController::class,
    'as' => 'suggestion_',
    'middleware' => checklogin::class
], function () {
    Route::get("/admin/create/{lesson}", "adminCreate")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminCreate");
    Route::get("/create/{lesson}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store/{lesson}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
    Route::get("/lesson/{lesson}/Suggestion/{lessonsuggestion}/edit", "edit")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::get("/lesson/{lesson}/Suggestion/{lessonsuggestion}/delete", "delete")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("delete");
    Route::post("/update/{lessonsuggestion}", "update")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("update");
});
// answer reaction
Route::group([
    'prefix' => 'answerReaction',
    'controller' => couresAnswerreactionController::class,
    'as' => 'answerReaction_',
    'middleware' => checklogin::class
], function () {
    Route::post("/store/{courseanswer}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
});
// course error title
Route::group([
    'prefix' => 'lessonErrortitle',
    'controller' => lessonErrortitleController::class,
    'as' => 'errortitle_',
    'middleware' => checkAdminMiddleware::class
], function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/errortitles', 'index')->name('index');
    Route::get('/edit/{lessonerrortitle}', 'edit')->missing(function () {
        return to_route('missing');
    })->name('edit');
    Route::get('/delete/{lessonerrortitle}', 'delete')->missing(function () {
        return to_route('missing');
    })->name('delete');
    Route::post('/update/{lessonerrortitle}', 'update')->missing(function () {
        return to_route('missing');
    })->name('update');
    Route::post('/deleteAll', 'deleteAll')->name('deleteAll');
});
// lesson error 
Route::group([
    'prefix' => 'lesson-error',
    'controller' => lessonErrorController::class,
    'as' => 'error_',
    'middleware' => checklogin::class
], function () {
    Route::get("/admin/create/{lesson}", "adminCreate")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("adminCreate");
    Route::get("/create/{lesson}", "create")->missing(function () {
        return to_route('missing');
    })->name("create");
    Route::post("/store/{lesson}", "store")->missing(function () {
        return to_route('missing');
    })->name("store");
    Route::get("/lesson/{lesson}/error/{lessonerror}/edit", "edit")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("edit");
    Route::get("/lesson/{lesson}/error/{lessonerror}/delet", "delete")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("delete");
    Route::post("/update/{lessonerror}", "update")->middleware(checkAdminMiddleware::class)->missing(function () {
        return to_route('missing');
    })->name("update");
});
//! end akbarnezhad courses
// fallback and missing
Route::fallback([HomeController::class, 'pageNotFound'])->name('fallback');
Route::get('/missing', [HomeController::class, 'pageNotFound'])->name('missing');
