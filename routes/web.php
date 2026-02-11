<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('/services/staff-augmentation-services', [ServiceController::class, 'staff_augmentation_services'])->name('services.staff-augmentation-services');
Route::get('/services/data-automation-services', [ServiceController::class, 'data_automation_services'])->name('services.data-automation-services');
Route::get('/services/data-entry-services', [ServiceController::class, 'data_entry_services'])->name('services.data-entry-services');
Route::get('/services/adobe-photoshop-services', [ServiceController::class, 'adobe_photoshop_services'])->name('services.adobe-photoshop-services');
Route::get('/services/cad-services', [ServiceController::class, 'cad_services'])->name('services.cad-services');
Route::get('/services/engineering-design-service', [ServiceController::class, 'engineering_design_service'])->name('services.engineering-design-service');
Route::get('/services/engineering-documentation-services', [ServiceController::class, 'engineering_documentation_services'])->name('services.engineering-documentation-services');
Route::get('/services/healthcare-bpo-services', [ServiceController::class, 'healthcare_bpo_services'])->name('services.healthcare-bpo-services');
Route::get('/services/image-retouching-service', [ServiceController::class, 'image_retouching_service'])->name('services.image-retouching-service');
Route::get('/services/insurance-outsourcing', [ServiceController::class, 'insurance_outsourcing'])->name('services.insurance-outsourcing');
Route::get('/services/market-research-and-financial-services', [ServiceController::class, 'market_research_and_financial_services'])->name('services.market-research-and-financial-services');
Route::get('/services/real-estate-image-editing-service', [ServiceController::class, 'real_estate_image_editing_service'])->name('services.real-estate-image-editing-service');
Route::get('/services/scanning-and-indexing-services', [ServiceController::class, 'scanning_and_indexing_services'])->name('services.scanning-and-indexing-services');
Route::get('/services/telecom-survey-services', [ServiceController::class, 'telecom_survey_services'])->name('services.telecom-survey-services');
Route::get('/services/virtual-assistant-service', [ServiceController::class, 'virtual_assistant_service'])->name('services.virtual-assistant-service');
Route::get('/services/wedding-image-editing-services', [ServiceController::class, 'wedding_image_editing_services'])->name('services.wedding-image-editing-services');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us/submit', [ContactController::class, 'submit'])->name('contact-us.submit');
