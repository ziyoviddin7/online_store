@extends('layouts.main')

@section('content')


<div class="hp-main-layout-content">

    <div class="row mb-32 gy-32">
        <div class="col-12">
            <div class="row justify-content-between gy-32">
                <div class="col hp-flex-none w-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="javascript:;">Pages</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="col hp-flex-none w-auto">
                    <div class="row g-16">
                        <div class="col hp-flex-none w-auto">
                            <button class="btn btn-ghost btn-primary me-14">Action</button>
                        </div>

                        <div class="col hp-flex-none w-auto">
                            <button type="button" class="btn btn-primary btn-icon-only">
                                <i class="ri-settings-4-line" style="font-size: 16px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="row hp-profile-mobile-menu-btn bg-black-0 hp-bg-color-dark-100 rounded py-12 px-8 px-sm-12 mb-16 mx-0">
                <div class="d-inline-block" data-bs-toggle="offcanvas" data-bs-target="#profileMobileMenu" aria-controls="profileMobileMenu">
                    <button type="button" class="btn btn-text btn-icon-only">
                        <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                    </button>
                </div>
            </div>

            <div class="row bg-black-0 hp-bg-color-dark-100 rounded pe-16 pe-sm-32 mx-0">











                <div class="col hp-profile-menu py-24" style="flex: 0 0 240px;">
                    <div class="w-100">
                        <div class="hp-profile-menu-header mt-16 mt-lg-0 text-center">
                            <div class="hp-menu-header-btn mb-12 text-end">
                                <div class="d-inline-block" id="profile-menu-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <button type="button" class="btn btn-text btn-icon-only">
                                        <i class="ri-more-2-line text-black-100 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                                    </button>
                                </div>

                                <ul class="dropdown-menu" aria-labelledby="profile-menu-dropdown">
                                    <li>
                                        <a class="dropdown-item" href="javascript:;">Change Avatar</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="d-inline-block position-relative">
                                    <div class="avatar-item d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                        <img src="../../../app-assets/img/memoji/memoji-1.png">
                                    </div>

                                    <span class="position-absolute translate-middle badge rounded-pill bg-primary text-white border-none">
                                        12
                                    </span>
                                </div>
                            </div>

                            <h3 class="mt-24 mb-4">Dolores Bianca</h3>
                            <a href="mailto:dolores@yoda.com" class="hp-p1-body">dolores@yoda.com</a>
                        </div>
                    </div>

                    <div class="hp-profile-menu-body w-100 text-start mt-48 mt-lg-0">
                        <ul class="me-n1 mx-lg-n12">
                            <li class="mt-4 mb-16">
                                <a href="profile-information.html" class="active position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-User me-16"></i>
                                    <span>Personal Information</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>

                            <li class="mt-4 mb-16">
                                <a href="profile-notifications.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-Notification me-16"></i>
                                    <span>Notifications</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>

                            <li class="mt-4 mb-16">
                                <a href="profile-activity.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-Activity me-16"></i>
                                    <span>Activity Monitor</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>

                            <li class="mt-4 mb-16">
                                <a href="profile-settings.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-Setting me-16"></i>
                                    <span>Security Settings</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>

                            <li class="mt-4 mb-16">
                                <a href="profile-password.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-Password me-16"></i>
                                    <span>Password Change</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>

                            <li class="mt-4 mb-16">
                                <a href="profile-connect.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                    <i class="iconly-Curved-Heart me-16"></i>
                                    <span>Connect with Social</span>

                                    <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="hp-profile-menu-footer">
                        <img src="../../../app-assets/img/pages/profile/menu-img.svg" alt="Profile Image">
                    </div>
                </div>

                <div class="hp-profile-mobile-menu offcanvas offcanvas-start" tabindex="-1" id="profileMobileMenu" aria-labelledby="profileMobileMenuLabel">
                    <div class="offcanvas-header">
                        <div class="hp-menu-header-btn text-end">
                            <div class="d-inline-block" id="profile-menu-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <button type="button" class="btn btn-text btn-icon-only">
                                    <i class="ri-more-2-line text-black-100 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                                </button>
                            </div>

                            <ul class="dropdown-menu" aria-labelledby="profile-menu-dropdown">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">Change Avatar</a>
                                </li>
                            </ul>
                        </div>

                        <div class="d-inline-block" id="profile-menu-dropdown" data-bs-dismiss="offcanvas" aria-label="Close">
                            <button type="button" class="btn btn-text btn-icon-only">
                                <i class="ri-close-fill text-black-80 lh-1" style="font-size: 24px;"></i>
                            </button>
                        </div>
                    </div>

                    <div class="offcanvas-body p-0">











                        <div class="col hp-profile-menu py-24" style="flex: 0 0 240px;">
                            <div class="w-100">
                                <div class="hp-profile-menu-header mt-16 mt-lg-0 text-center">
                                    <div class="hp-menu-header-btn mb-12 text-end">
                                        <div class="d-inline-block" id="profile-menu-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <button type="button" class="btn btn-text btn-icon-only">
                                                <i class="ri-more-2-line text-black-100 hp-text-color-dark-30 lh-1" style="font-size: 24px;"></i>
                                            </button>
                                        </div>

                                        <ul class="dropdown-menu" aria-labelledby="profile-menu-dropdown">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">Change Avatar</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="d-inline-block position-relative">
                                            <div class="avatar-item d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px;">
                                                <img src="../../../app-assets/img/memoji/memoji-1.png">
                                            </div>

                                            <span class="position-absolute translate-middle badge rounded-pill bg-primary text-white border-none">
                                                12
                                            </span>
                                        </div>
                                    </div>

                                    <h3 class="mt-24 mb-4">Dolores Bianca</h3>
                                    <a href="mailto:dolores@yoda.com" class="hp-p1-body">dolores@yoda.com</a>
                                </div>
                            </div>

                            <div class="hp-profile-menu-body w-100 text-start mt-48 mt-lg-0">
                                <ul class="me-n1 mx-lg-n12">
                                    <li class="mt-4 mb-16">
                                        <a href="profile-information.html" class="active position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-User me-16"></i>
                                            <span>Personal Information</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>

                                    <li class="mt-4 mb-16">
                                        <a href="profile-notifications.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-Notification me-16"></i>
                                            <span>Notifications</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>

                                    <li class="mt-4 mb-16">
                                        <a href="profile-activity.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-Activity me-16"></i>
                                            <span>Activity Monitor</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>

                                    <li class="mt-4 mb-16">
                                        <a href="profile-settings.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-Setting me-16"></i>
                                            <span>Security Settings</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>

                                    <li class="mt-4 mb-16">
                                        <a href="profile-password.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-Password me-16"></i>
                                            <span>Password Change</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>

                                    <li class="mt-4 mb-16">
                                        <a href="profile-connect.html" class="position-relative text-black-80 hp-text-color-dark-30 hp-hover-text-color-primary-1 hp-hover-text-color-dark-0 py-12 px-24 d-flex align-items-center">
                                            <i class="iconly-Curved-Heart me-16"></i>
                                            <span>Connect with Social</span>

                                            <span class="hp-menu-item-line position-absolute opacity-0 h-100 top-0 end-0 bg-primary hp-bg-dark-0" style="width: 2px;"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="hp-profile-menu-footer">
                                <img src="../../../app-assets/img/pages/profile/menu-img.svg" alt="Profile Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col ps-16 ps-sm-32 py-24 py-sm-32 overflow-hidden">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h2>Personal Informations</h2>
                            <p class="hp-p1-body mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales sit amet nunc et vehicula. Mauris sed lectus nisi.</p>
                        </div>

                        <div class="divider border-black-40 hp-border-color-dark-80"></div>

                        <div class="col-12 col-md-8">
                            <h3>About</h3>
                            <p class="hp-p1-body mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales sit amet nunc et vehicula. Mauris sed lectus nisi. Suspendisse velit mi, pretium non euismod vitae Suspendisse velit mi, pretium non euismod vitae</p>
                        </div>

                        <div class="divider border-black-40 hp-border-color-dark-80"></div>

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-6">
                                    <h3>Contact</h3>
                                </div>

                                <div class="col-12 col-md-6 hp-profile-action-btn text-end">
                                    <button class="btn btn-ghost btn-primary" data-bs-toggle="modal" data-bs-target="#profileContactEditModal">Edit</button>
                                </div>

                                <div class="col-12 hp-profile-content-list mt-8 pb-0 pb-sm-120">
                                    <ul>
                                        <li>
                                            <span class="hp-p1-body">Full Name</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">Edward Yıldırım</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Display Name</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">Edward.3</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Email</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">Add Email</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Phone</span>
                                            <a class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0" href="tel:+900374323">+90 037 43 23</a>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Date of Birth</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">02/03/94</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Address</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">Lorem ipsum dolor sit 07/6</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="divider border-black-40 hp-border-color-dark-80"></div>

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-6">
                                    <h3>Preferance</h3>
                                </div>

                                <div class="col-12 col-md-6 hp-profile-action-btn text-end">
                                    <button class="btn btn-ghost btn-primary" data-bs-toggle="modal" data-bs-target="#profilePreferanceEditModal">Edit</button>
                                </div>

                                <div class="col-12 hp-profile-content-list mt-8">
                                    <ul>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Language</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">English</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Date Format</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">YYY.d.M</span>
                                        </li>
                                        <li class="mt-18">
                                            <span class="hp-p1-body">Timezone</span>
                                            <span class="mt-0 mt-sm-4 hp-p1-body text-black-100 hp-text-color-dark-0">Cairo (GMT+3)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileContactEditModal" tabindex="-1" aria-labelledby="profileContactEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 416px;">
            <div class="modal-content">
                <div class="modal-header py-16">
                    <h5 class="modal-title" id="profileContactEditModalLabel">Contact Edit</h5>
                    <button type="button" class="btn-close hp-bg-none d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line hp-text-color-dark-0 lh-1" style="font-size: 24px;"></i>
                    </button>
                </div>

                <div class="divider my-0"></div>

                <div class="modal-body py-48">
                    <form>
                        <div class="row g-24">
                            <div class="col-12">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName">
                            </div>

                            <div class="col-12">
                                <label for="displayName" class="form-label">Display Name</label>
                                <input type="text" class="form-control" id="displayName">
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="col-12">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone">
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" id="address" class="form-control"></textarea>
                            </div>

                            <div class="col-6">
                                <button type="button" class="btn btn-primary w-100">Edit</button>
                            </div>

                            <div class="col-6">
                                <div class="btn w-100" data-bs-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profilePreferanceEditModal" tabindex="-1" aria-labelledby="profilePreferanceEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 316px;">
            <div class="modal-content">
                <div class="modal-header py-16">
                    <h5 class="modal-title" id="profilePreferanceEditModalLabel">Preferance Edit</h5>
                    <button type="button" class="btn-close hp-bg-none d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line hp-text-color-dark-0 lh-1" style="font-size: 24px;"></i>
                    </button>
                </div>

                <div class="divider my-0"></div>

                <div class="modal-body py-48">
                    <form>
                        <div class="row g-24">
                            <div class="col-12">
                                <label for="language" class="form-label">Language</label>
                                <input type="text" class="form-control" id="language">
                            </div>

                            <div class="col-6">
                                <button type="button" class="btn btn-primary w-100">Edit</button>
                            </div>

                            <div class="col-6">
                                <div class="btn w-100" data-bs-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection