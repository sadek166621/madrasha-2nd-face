<?php
use App\Http\Controllers\Admin\Dashboard\DashboardController;
//ADMIN CONTROLLERS
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\QurancampusController;
use App\Http\Controllers\Admin\MoreController;
use App\Http\Controllers\Admin\OnlineController;
use App\Http\Controllers\Admin\WeeklyController;
use App\Http\Controllers\Admin\CourseteachersController;
use App\Http\Controllers\Admin\BatchController;
//APP
Use App\Http\Controllers\PagesController;
Use App\Http\Controllers\SocialShareButtonController;
Use App\Http\Controllers\AppAuthController;
use Illuminate\Support\Facades\Route;

// CUSTOMER PANEl ROUTES
Route::get('/register', [AppAuthController::class, 'register'])->name('register');
Route::POST('/registerAction', [AppAuthController::class, 'registerAction'])->name('registerAction');


//ADMIN PANEL
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});
Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/login', [AppAuthController::class, 'login'])->name('login');
    Route::post('/loginAction', [AppAuthController::class, 'loginAction'])->name('loginAction');
    Route::post('/logout', [AppAuthController::class, 'logout'])->name('logout');
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
            Route::get('/list', [SliderController::class, 'index'])->name('list');
            Route::get('/add', [SliderController::class, 'create'])->name('add');
            Route::post('/submit', [SliderController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [SliderController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SliderController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'department.', 'prefix' => 'department'], function () {
            Route::get('/list', [DepartmentController::class, 'index'])->name('list');
            Route::get('/add', [DepartmentController::class, 'create'])->name('add');
            Route::post('/submit', [DepartmentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [DepartmentController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'teacher.', 'prefix' => 'teacher'], function () {
            Route::get('/list', [TeacherController::class, 'index'])->name('list');
            Route::get('/add', [TeacherController::class, 'create'])->name('add');
            Route::post('/submit', [TeacherController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [TeacherController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'student.', 'prefix' => 'student'], function () {
            Route::get('/list', [StudentController::class, 'index'])->name('list');
            Route::get('/add', [StudentController::class, 'create'])->name('add');
            Route::post('/submit', [StudentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
        });



        Route::group(['as' => 'location.', 'prefix' => 'location'], function () {
            Route::get('/list', [LocationController::class, 'index'])->name('list');
            Route::get('/add', [LocationController::class, 'create'])->name('add');
            Route::post('/submit', [LocationController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LocationController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [LocationController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [LocationController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'staff.', 'prefix' => 'staff'], function () {
            Route::get('/list', [StaffController::class, 'index'])->name('list');
            Route::get('/add', [StaffController::class, 'create'])->name('add');
            Route::post('/submit', [StaffController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [StaffController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [StaffController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'notice.', 'prefix' => 'notice'], function () {
            Route::get('/list', [NoticeController::class, 'index'])->name('list');
            Route::get('/add', [NoticeController::class, 'create'])->name('add');
            Route::post('/submit', [NoticeController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [NoticeController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [NoticeController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [NoticeController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'news.', 'prefix' => 'news'], function () {
            Route::get('/list', [NewsController::class, 'index'])->name('list');
            Route::get('/add', [NewsController::class, 'create'])->name('add');
            Route::post('/submit', [NewsController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [NewsController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [NewsController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'online.', 'prefix' => 'online'], function () {
            Route::get('/list', [OnlineController::class, 'index'])->name('list');
            Route::get('/add', [OnlineController::class, 'create'])->name('add');
            Route::post('/submit', [OnlineController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [OnlineController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [OnlineController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [OnlineController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'curriculum.', 'prefix' => 'curriculum'], function () {
            Route::get('/list', [OnlineController::class, 'curriculumindex'])->name('list');
            Route::get('/add', [OnlineController::class, 'curriculumcreate'])->name('add');
            Route::post('/submit', [OnlineController::class, 'curriculumstore'])->name('store');
            Route::get('/edit/{id}', [OnlineController::class, 'curriculumedit'])->name('edit');
            Route::post('/update/{id}', [OnlineController::class, 'curriculumupdate'])->name('update');
            Route::get('/delete/{id}', [OnlineController::class, 'curriculumdestroy'])->name('delete');
        });
        Route::group(['as' => 'weekly.', 'prefix' => 'weekly'], function () {
            Route::get('/list', [WeeklyController::class, 'index'])->name('list');
            Route::get('/add', [WeeklyController::class, 'create'])->name('add');
            Route::post('/submit', [WeeklyController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [WeeklyController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [WeeklyController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [WeeklyController::class, 'destroy'])->name('delete');
        });

// ----------------------------------------------Course-teacher-----------------------------------------------
        Route::group(['as' => 'course-teachers.', 'prefix' => 'course-teachers'], function () {
            Route::get('/list', [CourseteachersController::class, 'index'])->name('list');
            Route::get('/add', [CourseteachersController::class, 'create'])->name('add');
            Route::post('/submit', [CourseteachersController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CourseteachersController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [CourseteachersController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CourseteachersController::class, 'destroy'])->name('delete');
        });
// --------------------------End Course Teacher------------------------------------------------

// ----------------------------------------------Batch-----------------------------------------------
        Route::group(['as' => 'batch.', 'prefix' => 'batch'], function () {
            Route::get('/list', [BatchController::class, 'index'])->name('list');
            Route::get('/add', [BatchController::class, 'create'])->name('add');
            Route::post('/submit', [BatchController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BatchController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [BatchController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BatchController::class, 'destroy'])->name('delete');
        });
// --------------------------End Batch------------------------------------------------


// ------------------------------Course------------------------------------

        Route::group(['as' => 'course.', 'prefix' => 'course'], function () {
            Route::get('/list', [CourseteachersController::class, 'courseindex'])->name('list');
            Route::get('/add', [CourseteachersController::class, 'coursecreate'])->name('add');
            Route::post('/submit', [CourseteachersController::class, 'coursestore'])->name('store');
            Route::get('/edit/{id}', [CourseteachersController::class, 'courseedit'])->name('edit');
            Route::post('/update/{id}', [CourseteachersController::class, 'courseupdate'])->name('update');
            Route::get('/delete/{id}', [CourseteachersController::class, 'coursedestroy'])->name('delete');
        });

// -----------------------------------End Course--------------------------------

        Route::group(['as' => 'setting.', 'prefix' => 'setting'], function () {
            Route::get('/edit', [DashboardController::class, 'site_edit'])->name('edit');
            Route::post('/update/{id}', [DashboardController::class, 'site_update'])->name('update');
        });
        Route::group(['as' => 'about.', 'prefix' => 'about'], function () {
            Route::get('/edit', [AboutController::class, 'site_edit'])->name('edit');
            Route::post('/update/{id}', [AboutController::class, 'site_update'])->name('update');
        });
        Route::group(['as' => 'quran-campus-male.', 'prefix' => 'quran-campus-male'], function () {
            Route::get('/edit', [QurancampusController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [QurancampusController::class, 'update'])->name('update');
        });
        Route::group(['as' => 'quran-campus-female.', 'prefix' => 'quran-campus-female'], function () {
            Route::get('/edit', [QurancampusController::class, 'femaleedit'])->name('edit');
            Route::post('/update/{id}', [QurancampusController::class, 'femaleupdate'])->name('update');
        });
        Route::group(['as' => 'more.', 'prefix' => 'more'], function () {
            Route::get('/more-edit', [MoreController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [MoreController::class, 'update'])->name('update');
        });
        Route::group(['as' => 'job.', 'prefix' => 'job'], function () {
            Route::get('/job-view', [TeacherController::class, 'view'])->name('view');
            Route::get('/job-details/{id}', [TeacherController::class, 'details'])->name('details');
            // Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update');
        });
        Route::group(['as' => 'applied-student.', 'prefix' => 'applied-student'], function () {
            Route::get('/applied-view', [DashboardController::class, 'appliedview'])->name('view');
            Route::get('/applied-details/{id}', [DashboardController::class, 'applieddetails'])->name('details');
            // Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update');
        });
    });


    Route::middleware('panel')->group(function () {
        Route::prefix('panel')->as('panel.')->group(function () {
            // USER PANEL
            Route::get('/', [DashboardController::class, 'panel'])->name('index');
        });
    });
});

Route::get('/app/get-gateway/{id}', [DashboardController::class, 'getGateway'])->name('getGateway');


//Front END
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/vice-principal-message', [PagesController::class, 'vicePrincipalMessage'])->name('vicePrincipalMessage');
Route::get('/principal-message', [PagesController::class, 'principalMessage'])->name('principalMessage');
Route::get('/faculties', [PagesController::class, 'teacher'])->name('teacher.list');
Route::get('/female-faculties', [PagesController::class, 'femaleteacher'])->name('femaleteacher.list');
Route::get('/faculties/profile/{username}', [PagesController::class, 'teacherShow'])->name('teacher.view');
Route::get('/staffs', [PagesController::class, 'staff'])->name('staff.list');
Route::get('/staffs/profile/{username}', [PagesController::class, 'staffShow'])->name('staff.view');

Route::get('/notices', [PagesController::class, 'notice'])->name('notice.list');
Route::get('/notices-general', [PagesController::class, 'noticeGeneral'])->name('notice.list.general');
Route::get('/notices-other', [PagesController::class, 'noticeOther'])->name('notice.list.other');
Route::get('/notice/{id}', [PagesController::class, 'noticeShow'])->name('notice.show');

Route::get('/news', [PagesController::class, 'news'])->name('news.list');
Route::get('/news/{id}', [PagesController::class, 'newsShow'])->name('news.show');
Route::get('/important-links', [PagesController::class, 'importantlinks'])->name('important-links');

Route::get('/quran-reading-course', [PagesController::class, 'quranreadingcourse'])->name('quran-reading-course');
Route::get('/quranic-arabic-course', [PagesController::class, 'quranicarabiccourse'])->name('quranic-arabic-course');
Route::get('/quran-memorization-course', [PagesController::class, 'quranmemorizationcourse'])->name('quran-memorization-course');

Route::get('/quran-reading-course-a', [PagesController::class, 'quranreadingcoursea'])->name('quran-reading-course-a');
Route::get('/quranic-arabic-course-a', [PagesController::class, 'quranicarabiccoursea'])->name('quranic-arabic-course-a');
Route::get('/quran-memorization-course-a', [PagesController::class, 'quranmemorizationcoursea'])->name('quran-memorization-course-a');
Route::get('/for-whom', [PagesController::class, 'forwhom'])->name('for-whom');
Route::get('/sfp', [PagesController::class, 'sfp'])->name('sfp');
Route::get('/ilq', [PagesController::class, 'ilq'])->name('ilq');
Route::get('/quran-reading-course-f-', [PagesController::class, 'quranreadingcoursef'])->name('quran-reading-course-f');
Route::get('/quranic-arabic-course-f-', [PagesController::class, 'quranicarabiccoursef'])->name('quranic-arabic-course-f');
Route::get('/quran-memorization-course-f-', [PagesController::class, 'quranmemorizationcoursef'])->name('quran-memorization-course-f');

Route::get('/quran-reading-course-f-a', [PagesController::class, 'quranreadingcoursefa'])->name('quran-reading-course-f-a');
Route::get('/quranic-arabic-course-f-a', [PagesController::class, 'quranicarabiccoursefa'])->name('quranic-arabic-course-f-a');
Route::get('/quran-memorization-course-f-a', [PagesController::class, 'quranmemorizationcoursefa'])->name('quran-memorization-course-f-a');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/Basics-of-Islam-Campus', [PagesController::class, 'BasicsofIslamCampus'])->name('Basics-of-Islam-Campus');
Route::get('/Be-Part-of-Us', [PagesController::class, 'BePartofUs'])->name('Be-Part-of-Us');

Route::get('/social-media-share', [SocialShareButtonController::class,'shareWidgate'])->name('social-media-share');

Route::get('/Donate-Us', [PagesController::class, 'DonateUs'])->name('Donate-Us');
Route::get('/be-a-teacher', [PagesController::class, 'beateacher'])->name('be-a-teacher');

Route::get('/online-class', [PagesController::class, 'onlineclass'])->name('online-class');
Route::get('/weekly-dars', [PagesController::class, 'weeklydarks'])->name('weekly.dars');

Route::post('/teacher-job-apply', [PagesController::class, 'teacherjobapply'])->name('teacher-job-apply');


Route::get('/student-dashboard', [PagesController::class, 'studentdashboard'])->name('student.dashboard');
Route::get('/logout', [PagesController::class, 'logout'])->name('logout');



Route::get('/student-admission', [PagesController::class, 'studentadmission'])->name('student-admission');
Route::get('/curriculum', [PagesController::class, 'curriculum'])->name('curriculum');
Route::post('/student-register-form', [StudentController::class, 'studentregisterform'])->name('student-register-form');
Route::post('/new-student-signup', [StudentController::class, 'newstudentsignup'])->name('new-student-signup');
Route::get('/how-to-register', [StudentController::class, 'howtoregister'])->name('how-to-register');
Route::get('/student-signup', [StudentController::class, 'studentsignup'])->name('student-signup');
Route::post('/student-login', [StudentController::class, 'studentlogin'])->name('student-login');
Route::get('/division-district/ajax/{division_id}',[PagesController::class,'getdivision'])->name('division.ajax');

