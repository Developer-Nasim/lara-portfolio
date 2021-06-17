<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
}); 
Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('/admins', function () {
    return view('dashboard.index');
});


// Header Routes
Route::prefix('/admin/headers/')->group(function(){
    
    Route::get('/', 'dashboard\HeaderController@index');
    Route::post('/', "dashboard\HeaderController@LogoUpload")->name('logo.upload');
    Route::get('logo/delete/{id}', 'dashboard\HeaderController@deleteLogo');
    Route::get('logo/update/{id}', 'dashboard\HeaderController@updateLogo');
    Route::post('logo/update/', 'dashboard\HeaderController@updateing')->name('logo.update');
    Route::get('logo/status/{id}', 'dashboard\HeaderController@statusLogo');
 
});


// Hero Routes
Route::prefix('admin/hero')->group(function(){
    Route::get('contents', 'dashboard\HeroController@index');
    Route::post('contents', 'dashboard\HeroController@heroContentInsert')->name('hero.content');
    Route::get('delete/{id}', 'dashboard\HeroController@delete');
    Route::get('update/{id}', 'dashboard\HeroController@updateIndex');
    Route::post('update/', 'dashboard\HeroController@updateing')->name('hero.update');
    Route::get('status/{id}', 'dashboard\HeroController@status');
});


// About Routes
Route::prefix('admin/about')->group(function(){
    Route::get('/', 'dashboard\AboutController@index')->name('about.me');
    Route::post('contents', 'dashboard\AboutController@insert')->name('about.content');
    Route::get('delete/{id}', 'dashboard\AboutController@delete');
    Route::get('update/{id}', 'dashboard\AboutController@updateIndex');
    Route::post('update/', 'dashboard\AboutController@updateing')->name('about.update');
    Route::get('status/{id}', 'dashboard\AboutController@status');
});


// Services Routes
Route::prefix('admin/services')->group(function(){
    Route::get('/', 'dashboard\ServicesController@index')->name('services');
    Route::post('contents', 'dashboard\ServicesController@insert')->name('services.content');
    Route::get('delete/{id}', 'dashboard\ServicesController@delete');
    Route::get('update/{id}', 'dashboard\ServicesController@updateIndex');
    Route::post('update/', 'dashboard\ServicesController@updateing')->name('services.update');
    Route::get('status/{id}', 'dashboard\ServicesController@status');
});


// Skills Routes
Route::prefix('admin/skills')->group(function(){
    // Skill Heading and Descriptions
    Route::get('/', 'dashboard\SkillController@index')->name('skills');
    Route::post('contents', 'dashboard\SkillController@insert')->name('skills.content');
    Route::get('delete/{id}', 'dashboard\SkillController@delete');
    Route::get('update/{id}', 'dashboard\SkillController@updateIndex');
    Route::post('update/', 'dashboard\SkillController@updateing')->name('skills.update');
    Route::get('status/{id}', 'dashboard\SkillController@status');
    // Main Skills
    Route::get('main/skills', 'dashboard\SkillController@indexAddSkill')->name('main.skills');
    Route::post('add/main/skill', 'dashboard\SkillController@insertSkill')->name('main.skills.content');
    Route::get('main/skill/delete/{id}', 'dashboard\SkillController@deleteSkill');
    Route::get('main/skill/update/{id}', 'dashboard\SkillController@updateIndexSkill');
    Route::post('main/skill/update/', 'dashboard\SkillController@updateingSkill')->name('main.skills.update');
    Route::get('main/skill/status/{id}', 'dashboard\SkillController@statusSkill');
});



// Experinces Routes
Route::prefix('admin/experinces')->group(function(){
    Route::get('/', 'dashboard\ExperincesInfoController@index')->name('experinces');
    Route::post('contents', 'dashboard\ExperincesInfoController@insert')->name('experinces.content');
    Route::get('delete/{id}', 'dashboard\ExperincesInfoController@delete');
    Route::get('update/{id}', 'dashboard\ExperincesInfoController@updateIndex');
    Route::post('update/', 'dashboard\ExperincesInfoController@updateing')->name('experinces.update');
    Route::get('status/{id}', 'dashboard\ExperincesInfoController@status');
});



// Testimonails Routes
Route::prefix('admin/testimonails')->group(function(){
    Route::get('/', 'dashboard\TestimonailController@index')->name('testimonails');
    Route::post('contents', 'dashboard\TestimonailController@insert')->name('testimonails.content');
    Route::get('delete/{id}', 'dashboard\TestimonailController@delete');
    Route::get('update/{id}', 'dashboard\TestimonailController@updateIndex');
    Route::post('update/', 'dashboard\TestimonailController@updateing')->name('testimonails.update');
    Route::get('status/{id}', 'dashboard\TestimonailController@status');
});



// Testimonails Routes
Route::prefix('admin/blog')->group(function(){
    Route::get('/', 'dashboard\BlogController@index')->name('blogs');
    Route::post('contents', 'dashboard\BlogController@insert')->name('blogs.content');
    Route::get('delete/{id}', 'dashboard\BlogController@delete');
    Route::get('update/{id}', 'dashboard\BlogController@updateIndex');
    Route::post('update/', 'dashboard\BlogController@updateing')->name('blogs.update');
    Route::get('status/{id}', 'dashboard\BlogController@status');
});



// Contact Routes
Route::prefix('admin/contact')->group(function(){
    Route::get('/', 'dashboard\ContactController@index')->name('contact');
    Route::post('contents', 'dashboard\ContactController@insert')->name('contact.content');
    Route::get('delete/{id}', 'dashboard\ContactController@delete');
    Route::get('update/{id}', 'dashboard\ContactController@updateIndex');
    Route::post('update/', 'dashboard\ContactController@updateing')->name('contact.update');
    Route::get('status/{id}', 'dashboard\ContactController@status');
});


 
// Social Routes
Route::prefix('admin/social')->group(function(){
    Route::get('/', 'dashboard\SocialController@index')->name('social');
    Route::post('contents', 'dashboard\SocialController@insert')->name('social.content');
    Route::get('delete/{id}', 'dashboard\SocialController@delete');
    Route::get('update/{id}', 'dashboard\SocialController@updateIndex');
    Route::post('update/', 'dashboard\SocialController@updateing')->name('social.update');
    Route::get('status/{id}', 'dashboard\SocialController@status');
}); 
 

 
// Footer Routes
Route::prefix('admin/footer')->group(function(){
    Route::get('/', 'dashboard\FooterController@index')->name('footer');
    Route::post('contents', 'dashboard\FooterController@insert')->name('footer.content');
    Route::get('delete/{id}', 'dashboard\FooterController@delete');
    Route::get('update/{id}', 'dashboard\FooterController@updateIndex');
    Route::post('update/', 'dashboard\FooterController@updateing')->name('footer.update');
    Route::get('status/{id}', 'dashboard\FooterController@status');
});

 
 
// Section Title Routes
Route::prefix('admin/section-title')->group(function(){
    Route::get('/', 'dashboard\SectionTitlesController@index')->name('sectionTitle');
    Route::post('contents', 'dashboard\SectionTitlesController@insert')->name('sectionTitle.content');
    Route::get('delete/{id}', 'dashboard\SectionTitlesController@delete');
    Route::get('update/{id}', 'dashboard\SectionTitlesController@updateIndex');
    Route::post('update/', 'dashboard\SectionTitlesController@updateing')->name('sectionTitle.update');
    Route::get('status/{id}', 'dashboard\SectionTitlesController@status');
});

 
 
// Section Title Routes
Route::prefix('admin/resume')->group(function(){
    Route::get('/', 'dashboard\ResumeController@index')->name('resume');
    Route::post('contents', 'dashboard\ResumeController@insert')->name('resume.content');
    Route::get('delete/{id}', 'dashboard\ResumeController@delete');
    Route::get('update/{id}', 'dashboard\ResumeController@updateIndex');
    Route::post('update/', 'dashboard\ResumeController@updateing')->name('resume.update');
    Route::get('status/{id}', 'dashboard\ResumeController@status');
});

 
// Section Title Routes
Route::prefix('admin/portfolio')->group(function(){
    Route::get('/', 'dashboard\ResumeController@index')->name('portfolio');
    Route::post('contents', 'dashboard\ResumeController@insert')->name('portfolio.content');
    Route::get('delete/{id}', 'dashboard\ResumeController@delete');
    Route::get('update/{id}', 'dashboard\ResumeController@updateIndex');
    Route::post('update/', 'dashboard\ResumeController@updateing')->name('portfolio.update');
    Route::get('status/{id}', 'dashboard\ResumeController@status');
});
 
 
// Portfolio Routes
Route::prefix('admin/portfolio')->group(function(){
    // portfolio Menu
    Route::get('categ/', 'dashboard\PortfolioController@indexCt')->name('portfolio');
    Route::post('categ/contents', 'dashboard\PortfolioController@insertCt')->name('portfolio.category');
    Route::get('categ/delete/{id}', 'dashboard\PortfolioController@deleteCt'); 
    Route::get('categ/status/{id}', 'dashboard\PortfolioController@statusCt');
    // portfolios
    Route::get('/', 'dashboard\PortfolioController@index')->name('portfolio');
    Route::post('contents', 'dashboard\PortfolioController@insert')->name('portfolio.content');
    Route::get('delete/{id}', 'dashboard\PortfolioController@delete');
    Route::get('update/{id}', 'dashboard\PortfolioController@updateIndex');
    Route::post('update/', 'dashboard\PortfolioController@updateing')->name('portfolio.update');
    Route::get('status/{id}', 'dashboard\PortfolioController@status');
});


