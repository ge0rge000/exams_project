<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AllSubject;
use App\Http\Livewire\TeacherComponent;

use App\Http\Livewire\ExamsComponent;
use App\Http\Livewire\PasswordExam;
use App\Http\Livewire\AboutUs;
use App\Http\Livewire\student\Studentexamcomponent;
use App\Http\Livewire\student\StudentDashboardComponent;
use App\Http\Livewire\student\ResultStudentComponent;
use App\Http\Livewire\student\Choicesexamcomponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminSubjectComponent;
use App\Http\Livewire\Admin\AdminAddSubjectComponent;
use App\Http\Livewire\TeachersAll;
use App\Http\Livewire\Admin\StudentsTeacherComponent;
use App\Http\Livewire\Admin\SliderComponent;
use App\Http\Livewire\Admin\AddSliderComponent;
use App\Http\Livewire\Admin\UsersComponent;
use App\Http\Livewire\Admin\AdminAllStudentComponent;
use App\Http\Livewire\Admin\AdminEditUser;
use App\Http\Livewire\Admin\AdminAllTeacherComponent;

use App\Http\Livewire\Admin\AdminSubjectTeacher;
use App\Http\Livewire\Admin\AdminTeacherExams;
use App\Http\Livewire\Admin\AdminTeacherExamsPasswords;

use App\Http\Livewire\Teacher\TeacherDashboardComponent;
use App\Http\Livewire\Teacher\AddExamComponent;
use App\Http\Livewire\Teacher\Printpdf;


use App\Http\Livewire\Teacher\AddQuestionComponent;
use App\Http\Livewire\Teacher\EditQuestionComponent;

use App\Http\Livewire\Teacher\TeachersExamsYearSpecified;
use App\Http\Livewire\Teacher\TeachersQuestionsExam;
use App\Http\Livewire\Teacher\StudentPerExaComponent;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('layouts.base');
// });


Route::get('/',HomeComponent::class)->name('index');

Route::get('/subject',AllSubject::class)->name('all_subject');

Route::get('/aboutus',AboutUs::class)->name('about_us');
// Route::get('/aboutus/pdf',[AboutUs::class,'generatePDF'])->name('teacher.downloadquestions');

Route::get('/allteacher',TeachersAll::class)->name('teachers');

Route::get('/subject/{name_subject}/{id_subject}',TeacherComponent::class)->name('subject.teacher');
Route::get('/subject/{name_subject}/{id_subject}/{teacher_id}',ExamsComponent::class)->name('subject.exams');
Route::get('/subject/{name_subject}/{teacher_id}/{student_id}/{exam_id}',PasswordExam::class)->name('student.exam');
Route::get('/subject/{name_subject}/{teacher_id}/{student_id}/online_exaxasuxgsxv/result/{exam_id}',ResultStudentComponent::class)->name('student.examonlineresult');

///for user
 Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/student/dashboard',StudentDashboardComponent::class)->name('student.dashboard');

    Route::get('/student/dashboard/choices/{student_id}/{exam_id}',Choicesexamcomponent::class)->name('student.choices_exam');


    Route::get('/subject/{name_subject}/{teacher_id}/{student_id}/{exam_id}/online_exaxasuxgsxv',Studentexamcomponent::class)->name('student.examonline');
    Route::get('/subject/{name_subject}/{id_subject}/{teacher_id}',ExamsComponent::class)->name('subject.exams');
    Route::get('/subject/{name_subject}/{teacher_id}/{student_id}/{exam_id}',PasswordExam::class)->name('student.exam');
 });

///for admin
Route::middleware(['auth:sanctum','verified','auth_admin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/dashboard/users',UsersComponent::class)->name('admin.dashboard_users');
    Route::get('/admin/dashboard/users/student',AdminAllStudentComponent::class)->name('admin.dashboard_users_st');
    Route::get('/admin/dashboard/users/student/{student_id}',AdminEditUser::class)->name('admin.dashboard_users_st_edit');

    Route::get('/admin/dashboard/users/teacher',AdminAllTeacherComponent::class)->name('admin.dashboard_users_teach');

    Route::get('/admin/dashboard/subject',AdminSubjectComponent::class)->name('admin.subject_dashboard');
    Route::get('/admin/dashboard/slider',SliderComponent::class)->name('admin.slider_dashboard');
    Route::get('/admin/dashboard/slider/add',AddSliderComponent::class)->name('admin.add_slider');


    Route::get('/admin/dashboard/subject/add',AdminAddSubjectComponent::class)->name('admin.add_subject');

    Route::get('/admin/dashboard/subject/teachers/{subject_id}',AdminSubjectTeacher::class)->name('admin.teachers_sub');
    Route::get('/admin/dashboard/subject/teachers/{subject_id}/{teacher_id}',AdminTeacherExams::class)->name('admin.teachers_exams');
    Route::get('/admin/dashboard/subject/teachers/students/{subject_id}/{teacher_id}/{exam_id}',StudentsTeacherComponent::class)->name('admin.exams_students');
    Route::get('/admin/dashboard/subject/teachers/passwords/{subject_id}/{teacher_id}/{exam_id}',AdminTeacherExamsPasswords::class)->name('admin.teachers_exams_passwords');


});
///for teacher
Route::middleware(['auth:sanctum','verified','authteacher'])->group(function(){
    Route::get('/teacher/dashboard/{teacher_id}',TeacherDashboardComponent::class)->name('teacher.dashboard');
    Route::get('/teacher/dashboard/{teacher_id}/{year_type}',TeachersExamsYearSpecified::class)->name('teacher.exams_year');
    Route::get('/teacher/dashboard/students/{teacher_id}/{year_type}/{exam_id}',StudentPerExaComponent::class)->name('teacher.student_perform exam');

    Route::get('/teacher/dashboard/addexam/{teacher_id}/{year_type}/{subject_id}',AddExamComponent::class)->name('teacher.add_exam');
    Route::get('/teacher/dashboard/questions/{teacher_id}/{exam_id}',TeachersQuestionsExam::class)->name('teacher.questions');
    Route::get('/teacher/dashboard/questions/{teacher_id}/{exam_id}/pdf',Printpdf::class)->name('teacher.downloadquestions');
    Route::get('/teacher/dashboard/questions/{teacher_id}/{exam_id}/pdf/download',[Printpdf::class,'generatePDF'])->name('teacher.downloadquestionspdf');

    Route::get('/teacher/dashboard/add_question/{teacher_id}/{exam_id}',AddQuestionComponent::class)->name('teacher.addquestions');
    Route::get('/teacher/dashboard/edit_question/{teacher_id}/{exam_id}/{question_id}',EditQuestionComponent::class)->name('teacher.editquestions');



});
