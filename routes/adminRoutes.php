<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('adminHome');
Route::get('/admin/category/add', [AdminController::class, 'add_category'])->name('addCategoryPage');
Route::post('/add_category_data', [AdminController::class, 'add_category_data'])->name('addCategoryData');
Route::get('/admin/brand/add', [AdminController::class, 'add_brand'])->name('addBrandPage');
Route::post('/add_brand_data', [AdminController::class, 'add_brand_data'])->name('addBrandData');
Route::get('/admin/product/add', [AdminController::class, 'add_product'])->name('addProductPage');
Route::post('/add_product_data', [AdminController::class, 'add_product_data'])->name('addProductData');
Route::get('/admin/slider/add', [AdminController::class, 'add_slide_show'])->name('addSlideShowPage');
Route::post('/add_slide_show_data', [AdminController::class, 'add_slide_show_data'])->name('addSlideShowData');
Route::get('/admin/blog/add', [AdminController::class, 'add_blog'])->name('addBlogPage');
Route::post('/add_blog_data', [AdminController::class, 'add_blog_data'])->name('addBlogData');
Route::get('/admin/contact/view', [AdminController::class, 'view_contactDetails'])->name('viewContactDetails');
Route::get('/delete-contact/{id}', [AdminController::class, 'deleteContact'])->name('contact.delete');

Route::get('/admin/category_view/details', [AdminController::class, 'viewCategory'])->name('viewCategoryDetails');
Route::get('/delete-category/{id}', [AdminController::class, 'deleteCategory'])->name('category.delete');


Route::get('/admin/brand/details', [AdminController::class, 'viewBrand'])->name('viewBrandDetails');
Route::get('/delete-brand/{id}', [AdminController::class, 'deleteBrand'])->name('brand.delete');

Route::get('/admin/product/view', [AdminController::class, 'viewProduct'])->name('viewProductPage');

Route::get('/delete-product/{id}', [AdminController::class, 'deleteProduct'])->name('product.delete');

Route::get('/admin/slider/view', [AdminController::class, 'viewSliderPage'])->name('viewSlidePage');
Route::get('/delete-slider/{id}', [AdminController::class, 'deleteSlider'])->name('slider.delete');

Route::get('admin/blog/view', [AdminController::class, 'viewBlogDetailsPage'])->name('viewBlogPage');
Route::get('/delete-blog/{id}', [AdminController::class, 'deleteBlog'])->name('blog.delete');
