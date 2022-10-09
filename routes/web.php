<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
// use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AddurlController;
use App\Http\Controllers\BusinessCategoriesController;
use App\Http\Controllers\contentTxtGetCodesController;
use App\Http\Controllers\manageTasksController;
use App\Http\Controllers\manageUrlsController;
use App\Http\Controllers\manageTextsController;
use App\Http\Controllers\manageTemplatesController;
use App\Http\Controllers\manageImagesController;
use App\Http\Controllers\contentTxtGetTextController;
use App\Http\Controllers\txtAddTextController;
use App\Http\Controllers\txtManageTextController;
use App\Http\Controllers\manageSvgFilesController;
use App\Http\Controllers\addSvgFilesController;
use App\Http\Controllers\contentImgWebsiteElementsController;
use App\Http\Controllers\manageSocialIconFilesController;
use App\Http\Controllers\manageBrandFilesController;
use App\Http\Controllers\manageTemplateFilesController;
/* Code By Hassan */
use App\Http\Controllers\UploadImagesController;
use App\Http\Controllers\TaskImgCroppedController;
use App\Http\Controllers\ContentImgCroppedController;
use App\Http\Controllers\ImportImagesController;
use App\Http\Controllers\CatManageTasksController;
use App\Http\Controllers\CatSearchFiltersController;
use App\Http\Controllers\CatManageColorsController;
use App\Http\Controllers\CatManageUserRolesController;
use App\Http\Controllers\CatManageSocialIconsController;
use App\Http\Controllers\CatManageBrandsController;
use App\Http\Controllers\CatManageSvgFilesController;
use App\Http\Controllers\CatManageTemplatesController;
/* Hassan Code End */

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
/*Route for index page*/
Route::get('/', [indexController::class, 'index']);
Route::get('/change', [indexController::class, 'change'])->name('changeLang');
/*Route for login page*/
Route::get('/login', [LoginController::class, 'index']);
/*Route for 404 page*/
/*Route::get('/404', [ ErrorController::class, 'index']);*/

/*Route start for user page*/
Route::get('/manage-users', [UsersController::class, 'index']);
Route::post('/manage-users', [UsersController::class, 'store']);
Route::get('/manage-users', [UsersController::class, 'view']);
Route::get('/manage-users/delete/{user_id}', [UsersController::class, 'delete'])->name('user.delete');
Route::get('/manage-users/edit/{user_id}', [UsersController::class, 'edit'])->name('user.edit');
Route::put('/manage-users/update/{user_id}', [UsersController::class, 'update'])->name('user.update');
/*Route end for user page*/

/*Route start for Addurl page*/
Route::get('/img-add-url', [AddurlController::class,'index']);
Route::post('/img-add-url', [AddurlController::class, 'store']);
Route::get('/img-download', [AddurlController::class, 'index']);
Route::get('/img-download', [AddurlController::class, 'view']);
Route::get('/img-download/update/{url_id}', [AddurlController::class, 'update'])->name('downloadimg.update');
/*Route end for Addurl page*/

/* Route for business categories page */
Route::get('/business-categories', [BusinessCategoriesController::class,'index']);
Route::post('/business-categories', [BusinessCategoriesController::class, 'store']);
Route::get('/business-categories', [BusinessCategoriesController::class, 'view']);
Route::get('/business-categories/destroy/{id}', [BusinessCategoriesController::class, 'destroy'])->name('business_categories.destroy');
Route::get('/business-categories/edit/{id}', [BusinessCategoriesController::class, 'edit'])->name('business_categories.edit');
Route::put('/business-categories/update/{id}', [BusinessCategoriesController::class, 'update'])->name('business_categories.update');
/* Route end for business categories page */

/* Route for cat manage page */
Route::get('/cat-manage-tasks', [CatManageTasksController::class,'index']);
Route::post('/cat-manage-tasks', [CatManageTasksController::class, 'store']);
Route::get('/cat-manage-tasks', [CatManageTasksController::class, 'view']);
Route::get('/cat-manage-tasks/destroy/{id}', [CatManageTasksController::class, 'destroy'])->name('cat_manage_tasks.destroy');
Route::get('/cat-manage-tasks/edit/{id}', [CatManageTasksController::class, 'edit'])->name('cat_manage_tasks.edit');
Route::put('/cat-manage-tasks/update/{id}', [CatManageTasksController::class, 'update'])->name('cat_manage_tasks.update');
/* Route end for cat manage page */

/* Route for cat search filters page */
Route::get('/cat-search-filters', [CatSearchFiltersController::class,'index']);
Route::post('/cat-search-filters', [CatSearchFiltersController::class, 'store']);
Route::get('/cat-search-filters', [CatSearchFiltersController::class, 'view']);
Route::get('/cat-search-filters/destroy/{id}', [CatSearchFiltersController::class, 'destroy'])->name('cat_search_filters.destroy');
Route::get('/cat-search-filters/edit/{id}', [CatSearchFiltersController::class, 'edit'])->name('cat_search_filters.edit');
Route::put('/cat-search-filters/update/{id}', [CatSearchFiltersController::class, 'update'])->name('cat_search_filters.update');
/* Route end for cat search filters page */

/* Route for cat manage colors page */
Route::get('/cat-manage-colors', [CatManageColorsController::class,'index']);
Route::post('/cat-manage-colors', [CatManageColorsController::class, 'store']);
Route::get('/cat-manage-colors', [CatManageColorsController::class, 'view']);
Route::get('/cat-manage-colors/destroy/{id}', [CatManageColorsController::class, 'destroy'])->name('cat_manage_colors.destroy');
Route::get('/cat-manage-colors/edit/{id}', [CatManageColorsController::class, 'edit'])->name('cat_manage_colors.edit');
Route::put('/cat-manage-colors/update/{id}', [CatManageColorsController::class, 'update'])->name('cat_manage_colors.update');
/* Route end for cat manage colors page */

/* Route for upload images page */
Route::get('/img-upload', [UploadImagesController::class,'index']);
Route::post('/img-upload', [UploadImagesController::class, 'store']);
Route::get('/img-upload', [UploadImagesController::class, 'view']);
Route::delete('/img-upload/{id}', [UploadImagesController::class, 'destroy'])->name('upload-images.destroy');
/* Route end for upload images page */

/* Route for tasks img cropped page */
Route::get('/task-cw-img-crop', [TaskImgCroppedController::class,'index']);
Route::get('/task-cw-img-crop', [TaskImgCroppedController::class,'view']);
Route::get('/task-cw-img-crop/getimage/{id}', [TaskImgCroppedController::class,'getimage'])->name('upload-images.getimage');
Route::post('/task-cw-img-crop', [TaskImgCroppedController::class,'cropimage'])->name('upload-images.cropimage');
/* Route end for task img cropped page */

/* Route for img cropped page */
Route::get('/content-img-cropped', [ContentImgCroppedController::class,'index']);
Route::get('/content-img-cropped', [ContentImgCroppedController::class,'view']);
/* Route end for img cropped page */

/* Route for import images page */
Route::get('/import-images', [ImportImagesController::class, 'index']);
Route::get('/import-images', [ImportImagesController::class, 'importimages']);
/* Route end for import images page */

/*Route for content txt get codes page */
Route::get('/content-txt-get-codes', [contentTxtGetCodesController::class,'index']);
/*Route for manage tasks page */
Route::get('/manage-tasks', [manageTasksController::class, 'index']);
/*Route for manage urls page */
Route::get('/manage-urls', [manageUrlsController::class, 'index']);
/*Route for manage texts page */
Route::get('/manage-texts', [manageTextsController::class, 'index']);
/*Route for manage images page */
Route::get('/manage-images', [manageImagesController::class, 'index']);
/*Route for manage templates page */
Route::get('/manage-templates', [manageTemplatesController::class, 'index']);
/*Route for manage social icon files*/
Route::get('/manage-social-icon-files', [manageSocialIconFilesController::class, 'index']);
Route::post('/manage-social-icon-files/delete', [manageSocialIconFilesController::class, 'delete'])->name('social.icon.delete');
Route::post('/manage-social-icon-files', [manageSocialIconFilesController::class, 'store'])->name('social.icon.store');
// show social icon file
Route::get('/social-img-content', [manageSocialIconFilesController::class, 'showScialIcon'])->name('social.icon.show');

/*Route for manage brand files files*/
Route::get('/manage-brand-files', [manageBrandFilesController::class, 'index'])->name('brand');
Route::post('/manage-brand-files/add', [manageBrandFilesController::class, 'store'])->name('brand.store');
Route::post('/manage-brand-files/delete', [manageBrandFilesController::class, 'delete'])->name('brand.delete');
/*Route for manage template files  files*/
Route::get('/manage-template-files ', [manageTemplateFilesController::class, 'index']);
Route::post('/manage-template-files/add', [manageTemplateFilesController::class, 'store'])->name('template.store');
Route::post('/manage-template-files/delete', [manageTemplateFilesController::class, 'delete'])->name('template.delete');

/*Route for content txt get text page */
Route::get('/content-txt-get-text', [contentTxtGetTextController::class, 'index']);
Route::get('/content-txt-get-text', [contentTxtGetTextController::class, 'view']);
Route::get('/content-txt-get-text/getcontent', [contentTxtGetTextController::class, 'getcontent'])->name('business_content.getcontent');
/*Route end for content txt get text page */

/*Route for txt add text page */
Route::get('/txt-add-text', [txtAddTextController::class, 'index']);
Route::get('/txt-add-text', [txtAddTextController::class, 'view']);
Route::get('/txt-add-text/leveltwo/{id}', [txtAddTextController::class, 'leveltwo'])->name('business_categories.leveltwo');
Route::get('/txt-add-text/levelthree/{id}', [txtAddTextController::class, 'levelthree'])->name('business_categories.levelthree');
Route::get('/txt-add-text/levelfour/{id}', [txtAddTextController::class, 'levelfour'])->name('business_categories.levelfour');
Route::get('/txt-add-text/levelfive/{id}', [txtAddTextController::class, 'levelfive'])->name('business_categories.levelfive');
Route::post('/txt-add-text', [txtAddTextController::class, 'store']);
/*Route end for txt add text page */

/*Route for txt manage text page */
Route::get('/txt-manage-text', [txtManageTextController::class, 'index']);
Route::get('/txt-manage-text', [txtManageTextController::class, 'view']);
Route::get('/txt-manage-text/levelone', [txtManageTextController::class, 'levelone'])->name('business_categories.levelone');
Route::delete('/txt-manage-text/destroy/{id}', [txtManageTextController::class, 'destroy'])->name('business_content.destroy');
Route::GET('/txt-manage-text/edit/{id}', [txtManageTextController::class, 'edit'])->name('business_content.edit');
Route::put('/txt-manage-text/update/{id}', [txtManageTextController::class, 'update'])->name('business_content.update');

/*Route for txt manage text page */
Route::get('/manage-svg-files', [manageSvgFilesController::class, 'index']);
Route::post('/manage-svg-files', [manageSvgFilesController::class, 'store']);
Route::post('/manage-svg-files/{id}', [manageSvgFilesController::class, 'destroy'])->name('sub_cat_manage_svg_file.delete');
/*Route for add svg files page */
Route::get('/add-svg-files', [addSvgFilesController::class, 'index']);
Route::post('/store-svg-files', [addSvgFilesController::class, 'store'])->name('svg.store');
/*Route for content img website elements page */
Route::get('/content-img-website-elements', [contentImgWebsiteElementsController::class, 'index']);

/* Route for cat manage user roles page */
Route::get('/cat-manage-user-roles', [CatManageUserRolesController::class,'index']);
Route::post('/cat-manage-user-roles', [CatManageUserRolesController::class, 'store']);
Route::get('/cat-manage-user-roles', [CatManageUserRolesController::class, 'view']);
Route::get('/cat-manage-user-roles/destroy/{id}', [CatManageUserRolesController::class, 'destroy'])->name('cat_manage_user_roles.destroy');
Route::get('/cat-manage-user-roles/edit/{id}', [CatManageUserRolesController::class, 'edit'])->name('cat_manage_user_roles.edit');
Route::put('/cat-manage-user-roles/update/{id}', [CatManageUserRolesController::class, 'update'])->name('cat_manage_user_roles.update');
/* Route end for cat manage user roles page */

/* Route for cat manage social icons page */
Route::get('/cat-manage-social-icons', [CatManageSocialIconsController::class,'index']);
Route::post('/cat-manage-social-icons', [CatManageSocialIconsController::class, 'store']);
Route::get('/cat-manage-social-icons', [CatManageSocialIconsController::class, 'view']);
Route::get('/cat-manage-social-icons/destroy/{id}', [CatManageSocialIconsController::class, 'destroy'])->name('cat_manage_social_icons.destroy');
Route::get('/cat-manage-social-icons/edit/{id}', [CatManageSocialIconsController::class, 'edit'])->name('cat_manage_social_icons.edit');
Route::put('/cat-manage-social-icons/update/{id}', [CatManageSocialIconsController::class, 'update'])->name('cat_manage_social_icons.update');
/* Route end for cat manage social icons page */

/* Route for cat manage brands page */
Route::get('/cat-manage-brands', [CatManageBrandsController::class,'index']);
Route::post('/cat-manage-brands', [CatManageBrandsController::class, 'store']);
Route::get('/cat-manage-brands', [CatManageBrandsController::class, 'view']);
Route::get('/cat-manage-brands/destroy/{id}', [CatManageBrandsController::class, 'destroy'])->name('cat_manage_brands.destroy');
Route::get('/cat-manage-brands/edit/{id}', [CatManageBrandsController::class, 'edit'])->name('cat_manage_brands.edit');
Route::put('/cat-manage-brands/update/{id}', [CatManageBrandsController::class, 'update'])->name('cat_manage_brands.update');
/* Route end for cat manage brands page */

/* Route for cat manage svg files page */
Route::get('/cat-manage-svg-files', [CatManageSvgFilesController::class,'index']);
Route::post('/cat-manage-svg-files', [CatManageSvgFilesController::class, 'store']);
Route::get('/cat-manage-svg-files', [CatManageSvgFilesController::class, 'view']);
Route::get('/cat-manage-svg-files/destroy/{id}', [CatManageSvgFilesController::class, 'destroy'])->name('cat_manage_svg_files.destroy');
Route::get('/cat-manage-svg-files/edit/{id}', [CatManageSvgFilesController::class, 'edit'])->name('cat_manage_svg_files.edit');
Route::put('/cat-manage-svg-files/update/{id}', [CatManageSvgFilesController::class, 'update'])->name('cat_manage_svg_files.update');
/* Route end for cat manage svg files page */

/* Route for cat manage templates page */
Route::get('/cat-manage-templates', [CatManageTemplatesController::class,'index']);
Route::post('/cat-manage-templates', [CatManageTemplatesController::class, 'store']);
Route::get('/cat-manage-templates', [CatManageTemplatesController::class, 'view']);
Route::get('/cat-manage-templates/destroy/{id}', [CatManageTemplatesController::class, 'destroy'])->name('cat_manage_templates.destroy');
Route::get('/cat-manage-templates/edit/{id}', [CatManageTemplatesController::class, 'edit'])->name('cat_manage_templates.edit');
Route::put('/cat-manage-templates/update/{id}', [CatManageTemplatesController::class, 'update'])->name('cat_manage_templates.update');
/* Route end for cat manage templates page */
